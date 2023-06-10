<?php


include("config.php");

$CC=$_POST["txt1"];
$it=$_POST["txt2"];
$dm=$_POST["txt3"];
//Hamza Khadim

$sql="UPDATE Catégorie set `Code_catégorie`=".$CC." , `intitulé`='".$it."', `domaine`='".$dm."' WHERE Code_catégorie=".$CC;
echo $sql;
$conn->query($sql);
if ($conn->query($sql)) {
 header("location:index.php");
}
else
echo "Error de Modification ";
?>
