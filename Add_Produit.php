<?php
// Hamza Khadim

include("config.php");

$codep=$_POST["txt1"];
$ds=$_POST["txt2"];
$px=$_POST["txt3"];
$qt=$_POST["txt4"];
$ct=$_POST["txt6"];
$photo= addslashes(file_get_contents ($_FILES['txt5']['tmp_name']));

$sql="INSERT INTO `produit` (`Code_produit`, `Désignation`, `Prix_unitaire`, `Quantité_stock`, `photo`, `Code_catégorie`) VALUES (".$codep." , '".$ds."',".$px." ,".$qt." ,'".$photo."',".$ct.")";
//echo $sql;
if ($conn->query($sql)) {
header("location:index.php");
}
else { echo "Error de saisir";}
?>