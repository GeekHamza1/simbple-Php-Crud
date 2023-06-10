<!-- Hamza Khadim -->

<?php


include("config.php");

$txt7=$_POST["txt7"];
$txt8=$_POST["txt8"];
$txt9=$_POST["txt9"];

$sql="INSERT INTO catégorie values(".$txt7." , '".$txt8."','".$txt9."')";
if ($conn->query($sql)) {
    echo 'La catégorie est bien Ajouter !"';
}
else
{echo"Error de saisir";}
?>