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



if (isset($_POST['formedit'])) {
  if (!empty($_POST['pseudo']) and !empty($_POST['phone']) and !empty($_POST['adress']) and !empty($_POST['zipcode']) and !empty($_POST['city']) and !empty($_POST['province'])) {
    $name = htmlspecialchars($_POST['pseudo']);
    $tel = htmlspecialchars($_POST['phone']);
    $adress = htmlspecialchars($_POST['adress']);
    $zip = htmlspecialchars($_POST['zipcode']);
    $city = htmlspecialchars($_POST['city']);
    $province = htmlspecialchars($_POST['province']);


    $editMbr = $bdd->prepare("UPDATE members SET pseudo=?, phone=?, adress=?, zipcode=?, city=?, province=?");
    $editMbr->execute(array($name, $tel, $adress, $zip, $city, $province));
    header("location:../shop/");
  }
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
<link rel="canonical" href="../shop/">
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
                <div class="col">

                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="pseudo">Nom</label>
                            <input type="text" class="form-control" name="pseudo" value="<?= $member->getName(); ?>"
                                placeholder="Rachelle">
                        </div>
                        <div class="form-group">
                            <label for="tel">Telephone</label>
                            <input type="tel" class="form-control" name="phone" value="<?= $member->getPhone(); ?>"
                                placeholder="999-999-9999">
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <textarea class="form-control" name="adress"
                                rows="3"><?= $member->getAdress(); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="zipcode">Code Postal</label>
                            <input type="text" class="form-control" value="<?= $member->getZipCode(); ?>"
                                name="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" value="<?= $member->getCity(); ?>" name="city">
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" name="province"
                                value="<?= $member->getProvince(); ?>">
                        </div>
                        <button type="submit" name="formedit" class="btn btn-primary">Modifier</button>
                    </form>
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