<?php
session_start();
//connection a la base de donnees
include '../../php/db.php';
//importation des classes
include  '../../php/classes.php';
//verification d'utilisateur et importation des donnees
//reccupperation de donnees example : $member->getName()
require_once '../../php/requser.php';
//creer l'utilisateur
$member = new Member($_SESSION['id']);
if ($_SESSION['statut'] != "client") {
    $_SESSION['error'] = "404 page";
    header("location:../../logout.php");
}

$cond = "";
if (isset($_GET['cat'])) {
    $cat = intval($_GET['cat']);
    $cond = "WHERE category = " . $cat;
}
?>
<script>
function commander(title, prix) {
    document.getElementById('cmd_titre').innerHTML = title;
    document.getElementById('cmd_produit').value = title;
    document.getElementById('cmd_prix').value = prix;
}
</script>
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
<!-- Custom styles for this template -->
<link href="../../assets/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once '../../partials/header.php';
    ?>
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <div class="row">

                    <?php
                    $read_produits = $bdd->query("SELECT products.id , products.title,products.description ,products.price, category.title as category,
                     products.company,products.images FROM products inner join
                      category on products.category=category.id " . $cond);
                    while ($p = $read_produits->fetch()) {
                        $id = $p['id'];
                        $title = $p['title'];
                        $price = $p['price'];
                        $image = $p['images'];
                        $category = $p['category'];
                        $description = $p['description'];
                    ?>
                    <!-- item product -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" style="height: 200px;" src="../../admin/miniatures/<?= $id ?>.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><?= $title; ?></p>
                                <p class="card-text"><?= $price; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button
                                            onClick="shop_list('<?= $title; ?>','<?= $description; ?>','<?= $category; ?>','<?= $price; ?>','<?= $id; ?>')"
                                            data-toggle="modal" data-target="#productView"
                                            class="btn btn-sm btn-outline-secondary">Details</button>


                                        <button type="button" onClick="commander('<?= $title; ?>'
                                          ,<?= $price; ?>)" class="btn btn-sm btn-outline-secondary"
                                            data-toggle="modal" data-target="#modCommander">Commander
                                            Maintenant
                                        </button>
                                    </div>
                                    <small class="text-muted"><?= $category; ?></small>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end item product -->
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <?php
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
    <script src="../../assets/js/bestfoodie/function.js"></script>
    <script src="../../assets/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
</body>

</html>