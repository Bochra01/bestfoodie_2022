<?php
session_start();
include './php/db.php';
require_once './php/classes.php';
if (isset($_SESSION['email'])) {
    header("location:./timeout.php");
}
$cond = "";
if (isset($_GET['cat'])) {
    $cat = intval($_GET['cat']);
    $cond = "WHERE category = " . $cat;
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
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./assets/font-awesome-4.7.0/css/font-awesome.min.css">
<!-- Custom styles for this template -->
<link href="./assets/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once './partials/header.php';
    ?>
    <main role="main">
        <?php if ($cond == "") { ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./assets/images/slides/slide1.jpg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bienvenue a BestFoodie</h5>
                        <p>Faites vos epicerie</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="./assets/images/slides/slide1.jpg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bienvenue a BestFoodie</h5>
                        <p>Faites vos ep</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="./assets/images/slides/slide1.jpg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bienvenue a BestFoodie</h5>
                        <p>Faites vos ep</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><?php } ?>


        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">

                    <?php
                    $read_produits = $bdd->query("SELECT products.id,products.title,products.description ,products.price, category.title as category,
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
                            <img class="card-img-top" style="height: 200px;" src="./admin/miniatures/<?= $id ?>.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><?= $title; ?></p>
                                <p class="card-text"><?= $price; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button
                                            onClick="product('<?= $title; ?>','<?= $description; ?>','<?= $category; ?>','<?= $price; ?>','<?= $id; ?>')"
                                            data-toggle="modal" data-target="#productView"
                                            class="btn btn-sm btn-outline-secondary">Details</button>

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
    include './modals.php';
    include_once './partials/footer.php';
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./assets/js/bestfoodie/function.js"></script>
    <script src="./assets/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/vendor/holder.min.js"></script>
</body>

</html>