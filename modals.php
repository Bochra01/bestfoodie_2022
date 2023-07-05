 <!-- Modal of Connection -->
 <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form method="POST" action="./php/login.php">
                     <div class="form-group">
                         <label for="mailConnect">Adresse Email</label>
                         <input type="email" class="form-control" name="mailconnect" aria-describedby="emailHelp"
                             placeholder="Entrez votre email">
                         <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small> -->
                     </div>
                     <div class="form-group">
                         <label for="mdpConnect">Mot de passe</label>
                         <input type="password" class="form-control" name="mdpconnect" placeholder="Mot de passe">
                     </div>
                     <div class="form-check">
                         <input type="checkbox" class="form-check-input" id="saveLogin">
                         <label class="form-check-label" for="exampleCheck1">Sauvegarder pour une prochaine
                             fois</label>
                     </div>
                     <br>
                     <button type="submit" name="formconnexion" class="btn btn-primary">Se Connecter</button>
                 </form>
             </div>

         </div>
     </div>
 </div>
 <!-- Modal of Connection -->



 <!-- Modal of Inscription -->
 <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form method="POST" action="./php/signup.php">
                     <div class="form-group">
                         <label for="nameConnect">Nom complet</label>
                         <input type="texte" class="form-control" name="pseudo" id="nameSignup"
                             placeholder="Entrez votre nom complet" />
                     </div>

                     <div class="form-group">
                         <label for="mailConnect">Votre Courriel El&eacute;ctronique</label>
                         <input type="email" name="mail" class="form-control" id="mailSignup"
                             aria-describedby="emailHelp" placeholder="Entrez votre email" />
                     </div>
                     <div class="form-group">
                         <label for="mailConnect">Confirmez votre Courriel El&eacute;ctronique</label>
                         <input type="email" name="mail2" class="form-control" id="mailSignup"
                             aria-describedby="emailHelp" placeholder="Re-tappez votre email" />
                     </div>

                     <div class="form-group">
                         <label for="mdpConnect">Mot de passe</label>
                         <input type="password" class="form-control" name="mdp" id="mdpConnect"
                             placeholder="Mot de passe">
                     </div>
                     <div class="form-group">
                         <label for="mdpConnect">Confirmation de Mot de passe</label>
                         <input type="password" name="mdp2" class="form-control" id="mdpConnect2"
                             placeholder="Confirmation Mot de passe">
                     </div>

                     <br>
                     <input type="submit" name="forminscription" value="S'inscrire" class="btn btn-primary" />
                 </form>
             </div>

         </div>
     </div>
 </div>

 <!-- Modal of Article -->
 <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="product_title">{title}</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="card">
                     <div class="card-header">
                         <img class="card-img-top" id="product_image" />
                     </div>
                     <div class="card-body">
                         <p class="card-text" id="product_description">{With supporting text below as a natural lead-in
                             to additional content.}
                         </p>
                         <p class="card-text" id="product_category">{With supporting text below as a natural lead-in
                             to additional content.}
                         </p>
                         <p class="card-text" id="product_price">{With supporting text below as a natural lead-in
                             to additional content.}
                         </p>
                         <!-- <a href="#" class="btn btn-primary">Ajouter au Panier</a> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
















 <!-- Modal of Connection for Delivers -->
 <div class="modal fade" id="login_delivers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Connecter en tant que livreur</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form method="POST" action="./php/login_deliver.php">
                     <div class="form-group">
                         <label for="mailConnect">Adresse Email</label>
                         <input type="email" class="form-control" name="mailconnect" aria-describedby="emailHelp"
                             placeholder="Entrez votre email">
                         <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small> -->
                     </div>
                     <div class="form-group">
                         <label for="mdpConnect">Mot de passe</label>
                         <input type="password" class="form-control" name="mdpconnect" placeholder="Mot de passe">
                     </div>
                     <div class="form-check">
                         <input type="checkbox" class="form-check-input" id="saveLogin">
                         <label class="form-check-label" for="exampleCheck1">Sauvegarder pour une prochaine
                             fois</label>
                     </div>
                     <br>
                     <button type="submit" name="formconnexion" class="btn btn-primary">Se Connecter</button>
                     <div>
                         <a class="nav-link" href="#" type="button" data-toggle="modal" data-target="#signup_deliver">
                             Creation compte Livreurs <span class="sr-only">(current)</span></a>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 </div>
 <!-- Modal of for Delivers-->


 <!-- Modal of Inscription for Delivers -->
 <div class="modal fade" id="signup_deliver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form method="POST" action="./php/signup_deliver.php">
                     <div class="form-group">
                         <label for="nameConnect">Nom complet</label>
                         <input type="texte" class="form-control" name="name" id="nameSignup"
                             placeholder="Entrez votre nom complet" />
                     </div>

                     <div class="form-group">
                         <label for="mailConnect">Votre Courriel El&eacute;ctronique</label>
                         <input type="email" name="mail" class="form-control" id="mailSignup"
                             aria-describedby="emailHelp" placeholder="Entrez votre email" />
                     </div>
                     <div class="form-group">
                         <label for="mailConnect">Confirmez votre Courriel El&eacute;ctronique</label>
                         <input type="email" name="mail2" class="form-control" id="mailSignup"
                             aria-describedby="emailHelp" placeholder="Re-tappez votre email" />
                     </div>

                     <div class="form-group">
                         <label for="mdpConnect">Mot de passe</label>
                         <input type="password" class="form-control" name="mdp" id="mdpConnect"
                             placeholder="Mot de passe">
                     </div>
                     <div class="form-group">
                         <label for="mdpConnect">Confirmation de Mot de passe</label>
                         <input type="password" name="mdp2" class="form-control" id="mdpConnect2"
                             placeholder="Confirmation Mot de passe">
                     </div>

                     <br>
                     <input type="submit" name="forminscription" value="S'inscrire" class="btn btn-primary" />
                 </form>
             </div>

         </div>
     </div>
 </div>



 <!-- Modal of Connection  Admin-->
 <div class="modal fade" id="login_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Login Administrateur</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form class="login" method="POST" action="./php/login_admin.php">

                     <p class="form-row form-row-wide">
                         <label class="text">Adresse Email</label>
                         <input title="email" type="email" name="mailconnect" class="form-control">
                     </p>
                     <p class="form-row form-row-wide">
                         <label class="text">Mot de passe</label>
                         <input title="password" type="password" name="mdpconnect" class="form-control">
                     </p>
                     <p class="form-row">
                         <input type="submit" class="btn btn-dark" name="formconnexion" value="Se Connecter">
                     </p>
                 </form>
             </div>

         </div>
     </div>
 </div>
 <!-- Modal of Connection -->