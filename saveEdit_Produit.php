<?php


include("config.php");

$code=$_POST["txt1"];
$nom=$_POST["txt2"];
$cp=$_POST["txt3"];
$qt=$_POST["txt5"];
$ct=$_POST["txt6"];
if(!empty($_FILES['txt4'])) {
    $sql="UPDATE Produit set `Code_catégorie`=".$ct." , `Code_produit`=".$code." , `Désignation`='".$nom."', `Prix_unitaire`=".$cp.", `Quantité_stock`=".$qt." WHERE Code_produit=".$code;
    echo $sql;

    $conn->query($sql);
    if ($conn->query($sql)) {
     header("location:index.php");
    }
    else
    echo "Error de Modification ";
}
$photo= file_get_contents ($_FILES['txt4']['tmp_name']);
$sql="UPDATE Produit set `Code_catégorie`=".$ct." , `Code_produit`=".$code." , `Désignation`='".$nom."', `Prix_unitaire`=".$cp.", `Quantité_stock`=".$qt." , photo='".addslashes($photo)."' WHERE Code_produit=".$code;
echo $sql;
$conn->query($sql);
if ($conn->query($sql)) {
 header("location:index.php");
}
else
//Hamza Khadim
echo "Error de Modification ";
?>
