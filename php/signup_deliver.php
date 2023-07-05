<?php
session_start();
session_unset();
require_once '../php/db.php';
if(isset($_POST['forminscription'])) {
   $name = htmlspecialchars($_POST['name']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $namelength = strlen($name);
      if($namelength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM delivers WHERE email = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO delivers(name, email, password) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($name, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                     $_SESSION['error']=$erreur;

                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre name ne doit pas dépasser 255 caractères !";
      }
   } else {
   $erreur = "Tous les champs doivent être complétés !";
   

   }
   $_SESSION['error']="<div class='alert alert-info' role='alert'>".$erreur."
 </div>";
   header("Location: ../error.php");


}
?>