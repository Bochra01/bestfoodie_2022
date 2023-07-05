<?php
session_start();
require_once '../php/db.php';

if (isset($_GET["produit"]) && isset($_GET["quantite"]))
    $client_id = $_SESSION['id'];
$produit = htmlspecialchars($_GET['produit']);
$quantite = htmlspecialchars($_GET['quantite']);
$prix = htmlspecialchars($_GET['prix']);
$description = "Nom Du Produit : " . $produit . "<br>  Quantite : " . $quantite . "<br>  Total : " . intval($prix * $quantite);

$order = $bdd->prepare("INSERT INTO orders(statut,customer
    ,description,amount,fees,date_time_publication) 
    VALUES (?,?,?,?,?,?)");
$order->execute(array('toship', $client_id, $description, $prix, 3, date('d-m-y h:i:s')));
$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Commande pass&eacute;e
 avec succees</div>";
header('location:../pages/shop');