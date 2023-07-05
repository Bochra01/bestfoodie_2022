<?php
session_start();
require_once '../php/db.php';
if (isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = htmlspecialchars($_POST['mdpconnect']);
   if (!empty($mailconnect) and !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM admins WHERE email = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if ($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['email'] = $userinfo['email'];
         $_SESSION['statut'] = "admin";
         header("Location: ../admin/");
      } else {

         header("Location: ../");
      }
   } else {
      header("Location: ../");
   }
}