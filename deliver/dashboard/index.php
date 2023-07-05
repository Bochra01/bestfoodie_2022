<?php 
session_start();
if(isset($_SESSION['id'])) {
    $user_id=$_SESSION['id'];
    }else{
        header('location:../../');
    }
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
<title>BestFoodie - Accueil</title>
<link rel="canonical" href="index.php">
<!-- Bootstrap core CSS -->
<link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script>
function details(no, name, adress, phone, amount, fees, deliver) {
    document.getElementById('order_no').innerText = "No commande : # " + no;
    document.getElementById('order_client').innerText = "Nom complet : " + name;
    document.getElementById('order_adress').innerText = "Adresse de livraison : " +
        adress;
    document.getElementById('order_phone').innerText = "Telephone : " +
        phone;
    document.getElementById('order_amount').innerText = "Montant : $ " +
        amount;
    document.getElementById('order_ship_fees').innerText = "Frais de livraison : $ " +
        fees;
    document.getElementById('order_link').href = "../../php/take_order.php?order=" + no + "&deliver=" + deliver;
    fees;
}
</script>
<!-- Custom styles for this template -->
<link href="../../assets/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once '../header.php';
    include_once '../../php/db.php';
    $orders = $bdd->query("SELECT orders.no,adress,customer,description,amount,fees
    fees,date_time_publication,members.pseudo,members.email,members.phone FROM orders INNER JOIN 
     members ON members.id=orders.customer WHERE statut = 'toship'");
    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-3">

            </div>
            <div class="col-6">
                <h2 align="center" style="margin-top:40px;">Les dernieres commandes</h2>
                <table class="table" style="margin-top:30px;align:center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No commande</th>
                            <th scope="col">Client</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($o = $orders->fetch()) {
                            ?>
                        <tr>
                            <th scope="row"><?=$o['no']?></th>
                            <td><?=$o['pseudo']?></td>
                            <td><?=$o['adress']?></td>
                            <td><a href="#" onClick="details(<?=$o['no']?>,'<?=$o['pseudo']?>',
                             '<?=$o['adress']?>','<?=$o['phone']?>','<?=$o['amount']?>',
                             '<?=$o['fees']?>',<?=$user_id?>)" data-toggle="modal" data-target="#detailView"><i class="fa fa-file"></i></a>
                                &nbsp;
                                <i class="fa fa-check"></i>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class=" col-3">

            </div>
        </div>
    </div>
    <?php
    //modal
     include '../modals.php';
    include_once '../../partials/footer.php';
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>

    <script src="../../assets/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
</body>

</html>