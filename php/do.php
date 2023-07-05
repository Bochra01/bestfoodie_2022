<?php
session_start();
require_once '../php/db.php';
if(isset($_GET['order'])){
	$order_id=$_GET['order'];
	$deliver_id=$_SESSION['id'];
	$take_order=$bdd->prepare("UPDATE orders set statut = ? , deliver = ? WHERE no=? ");
	$take_order->execute(array('do',$deliver_id,$order_id));
	header('location:../deliver/delivers');
}
?>