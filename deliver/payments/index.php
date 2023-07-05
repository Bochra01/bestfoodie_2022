<?php 
session_start();
$user_id=$_SESSION['id'];
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
function details(no) {
    document.getElementById('order_no').innerText = no;
    // document.getElementById('order_client').innerText = name;
    // document.getElementById('order_adress').innerText = adress;
}
</script>
<!-- Custom styles for this template -->
<link href="../../assets/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once '../header.php';
    include_once '../../php/db.php';

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
                            <th scope="col">Date</th>
                            <th scope="col">Comissions</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        $orders_do = $bdd->prepare("SELECT orders.statut,fees,date_time_publication FROM orders INNER JOIN 
                         members ON members.id=orders.customer WHERE deliver=? AND statut='do'");
                        $orders_do->execute(array($_SESSION['id']));
                        ?>
                        <?php
                        while ($o = $orders_do->fetch()) {
                            ?>
                        <tr>
                            <th scope="row"><?=$o['date_time_publication']?></th>
                            
                            <td>$ <?=$o['fees']?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-3">

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