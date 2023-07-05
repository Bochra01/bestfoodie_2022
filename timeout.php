<?php 
session_start();
if(!isset($_SESSION['id'])){
    header('location:./');
}
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>BestFoodie</title>

    <link rel="canonical" href="index.html">
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./assets/style.css" rel="stylesheet">
    <script>
    function logout() {
        location.href = "./logout.php";
    }
    </script>
</head>

<body>
    <div>
        <div class="modal-dialog" role="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Continuer en tant que client </h5>
                    <button type="button" class="close" onClick="reload()">
                        <span aria-hidden="false">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="./php/login.php">
                        <div class="form-group">
                            <label for="email">Adresse Couriel</label>
                            <input type="email" name="mailconnect" class="form-control" aria-describedby="emailHelp"
                                placeholder="Enter email" value="<?=$_SESSION['email']?>">
                            <small id="emailHelp" class="form-text text-muted">L'adrresse email avec lequel vous etes
                                connect&eacute; en ce moment.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="mdpconnect" class="form-control" autocomplete="false"
                                placeholder="Password">
                        </div>

                        <button type="submit" name="formconnexion" class="btn btn-primary">Continuer</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onClick="logout()">D&eacute;connection</button>
                </div>
            </div>
        </div>
    </div>

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