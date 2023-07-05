<?php
session_start();
require_once '../php/db.php';
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM delivers WHERE email = ? AND password = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['email'] = $userinfo['email'];
         $_SESSION['statut'] = "livreur";

         header("Location: ../deliver/dashboard/");
      } else {
         $error = "<div class='alert alert-danger' role='alert'>
         Mauvais mail ou mot de passe !
       </div>";
         $_SESSION['error']=$error;
         header("Location: ../error.php");

      }
   } else {
      $error = "<div class='alert alert-danger' role='alert'>
      Tous les champs doivent être complétés !
    </div>";
      $_SESSION['error']=$error;
      header("Location: ../error.php");

   }

}