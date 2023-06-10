<?php


include("config.php");
session_start();
// recevoi code produit par Session
if(isset($_POST['x'])) $x=$_POST['x'];
$sql="DELETE FROM Produit  WHERE Code_produit=".$x;
$conn->query($sql);
header("location:index.php");
//Hamza Khadim
?>