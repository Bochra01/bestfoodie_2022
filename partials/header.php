<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../shop/">BestFoodie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        $category_list = $bdd->query("SELECT * FROM category");
                        while ($cat = $category_list->fetch()) {
                        ?><a class="dropdown-item" href="?cat=<?= $cat['id']; ?>"><?= $cat['title']; ?></a>
                        <?php } ?>
                        <!-- <div class="dropdown-divider"></div> -->
                    </div>
                </li>
            </ul>
            <!-- <form class="form-inline my-10 mr-10 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> -->
            <?php
            if (!isset($_SESSION['id'])) { ?>
            <li class="nav-item active form-inline my-10 mr-10 my-lg-0">
                <a class="nav-link" data-toggle="modal" data-target="#login_admin" href="#">Espace Administration </a>
            </li>
            <li class="nav-item active form-inline my-10 mr-10 my-lg-0">
                <a class="nav-link" data-toggle="modal" data-target="#login_delivers" href="#">Espace Livreurs </a>
            </li>
            <button class="btn btn-success  my-2 my-sm-0" data-toggle="modal" data-target="#login"
                style="margin-left: 20px;">Se connecter</button>
            <button type="button" data-toggle="modal" data-target="#signup" class="btn btn-warning"
                style="margin-left: 10px;margin-right: 10px;">S'inscrire</button>
            <?php } else {
            ?>
            <li class="nav-item dropdown" style="margin-right:100px;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php if (isset($member)) {
                            echo $member->getName();
                        }
                        ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../../logout.php">D&eacute;connexion</a>
                    <a class="dropdown-item" href="../../pages/edit/index.php">Éditer mon profil</a>
                    <!-- <div class="dropdown-divider"></div> -->
                </div>
            </li>

            <?php
            } ?>
            <ul>


        </div>
    </nav>
</header>