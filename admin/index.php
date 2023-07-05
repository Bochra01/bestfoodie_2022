<?php
include './bdd.php';
if (isset($_POST['formAddProduct'])) {
    if (!empty($_POST['titre']) and !empty($_POST['description']) and !empty($_POST['prix'])) {
        $titre = htmlspecialchars($_POST['titre']);
        $description = htmlspecialchars($_POST['description']);
        $category = htmlspecialchars($_POST['category']);

        $prix = htmlspecialchars($_POST['prix']);
        $ins = $bdd->prepare('INSERT INTO products (title,description,price,date_time_publication,category) VALUES (?, ?,?,NOW(),?)');
        $ins->execute(array($titre, $description, $prix, $category));
        $lastid = $bdd->lastInsertId();
        header('location:./index.php');
        if (isset($_FILES['miniature']) and !empty($_FILES['miniature']['name'])) {
            if (exif_imagetype($_FILES['miniature']['tmp_name']) == 2) {
                $chemin = 'miniatures/' . $lastid . '.jpg';
                move_uploaded_file($_FILES['miniature']['tmp_name'], $chemin);
            } else {

                $err = 'Votre image doit être au format jpg';
            }
        }
    } else {
        $err = "tous les champs doivents etre remplis";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Panel D'administration
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Deconnection</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row" style="margin:20px">

        <div class="col-md-6 ">
            <form method="POST" action="" enctype="multipart/form-data">
                <br>
                <h3 class="title-box">Ajouter un nouveau produits</h3>
                <?php if (isset($err)) {
                    echo "<div class='alert alert-danger' role='alert'>" . $err . "</div>";
                }
                ?>

                <div class="form-group">
                    <label for="inputEmail4">Titre</label>
                    <input type="text" name="titre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Description</label>
                    <textarea type="text" name="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="inputEmail4">Categories</label>
                    <select class="form-control" name="category">
                        <?php $cat = $bdd->query("SELECT * FROM category");
                        while ($c = $cat->fetch()) {
                        ?>
                        <option value="<?= $c['id'] ?>"><?= $c['title'] ?></option>
                        <?php
                        } ?>
                    </select>
                </div>

                <div class="form-group ">
                    <label for="inputEmail4">Photo de couverture</label>
                    <input type="file" name="miniature" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Prix</label>
                    <input type="number" name="prix" class="form-control">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <input type="submit" class="btn btn-primary" value="Publier" name="formAddProduct">
                    </div>
                </div>
            </form>
        </div>







        <div class="col-md-6">
            <table class="table">
                <h3>Gestion des produits</h3>
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">photo</th>
                        <th scope="col">prix</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $produits = $bdd->query("SELECT * FROM products");
                    while ($p = $produits->fetch()) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $p['title']; ?>
                        </th>
                        <td><img width="30px" src="./miniatures/<?= $p['id']; ?>.jpg"></td>
                        <td><?= $p['price'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>