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
 <!-- Modal of Error -->



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
                 <form>
                     <div class="form-group">
                         <label for="nameConnect">Nom complet</label>
                         <input type="texte" class="form-control" id="nameSignup"
                             placeholder="Entrez votre nom complet" />
                     </div>
                     <div class="form-group">
                         <label for="mailConnect">Numero de telephone</label>
                         <input type="tel" class="form-control" id="telSignup"
                             placeholder="Entrez votre numero de t&eacute;l&eacute;phone" />
                     </div>
                     <div class="form-group">
                         <label for="mailConnect">Votre Courriel El&eacute;ctronique</label>
                         <input type="email" class="form-control" id="mailSignup" aria-describedby="emailHelp"
                             placeholder="Entrez votre email" />
                     </div>

                     <div class="form-group">
                         <label for="mdpConnect">Mot de passe</label>
                         <input type="password" class="form-control" id="mdpConnect" placeholder="Mot de passe">
                     </div>
                     <div class="form-group">
                         <label for="mdpConnect">Confirmation de Mot de passe</label>
                         <input type="password" class="form-control" id="mdpConnect2"
                             placeholder="Confirmation Mot de passe">
                     </div>
                     <div class="form-check">
                         <input type="checkbox" class="form-check-input" id="saveLogin">
                         <label class="form-check-label" for="exampleCheck1">Sauvegarder pour une prochaine
                             fois</label>
                     </div>
                     <br>
                     <button type="submit" class="btn btn-primary">Submit</button>
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
                         <a href="#" data-toggle="modal" data-target="#modCommander" class="btn btn-primary">Acheter</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <!-- Modal of Commander -->
 <div class="modal fade" id="modCommander" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="cmd_titre">{title}</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="card">
                     <div class="card-body">
                         <form method="GET" action="../../php/commander.php">
                             <div class="form-group">
                                 <label>Nom de produit</label>
                                 <input class="form-control" name="produit" id="cmd_produit" />
                             </div>

                             <div class="form-group">
                                 <label>Quantit&eacute;</label>
                                 <input class="form-control" type="number" value="1" name="quantite" />
                             </div>
                             <div class="form-group">
                                 <!-- <label>Prix du produit</label> -->
                                 <input class="form-control" hidden name="prix" id="cmd_prix" />
                             </div>
                             <div class="form-group">
                                 <input class="btn btn-dark" type="submit" name="btnCommander" />
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>