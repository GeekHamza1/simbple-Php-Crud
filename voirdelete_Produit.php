<style>
<?php
//Hamza Khadim
include("css/css1.css");
session_start();
?>
body {
    font-family: 'Open Sans', sans-serif;
    background-image: url(img/img1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<?php
//Hamza Khadim
include("menu.html");
include("config.php");
?>
<html>
<head> </head>
<body>
<h3>Liste de Produits</h3>
<?php
$x=$_REQUEST["Reference"];
$sql="SELECT * from Produit where Code_produit=".$x;
$table=$conn->query($sql);


?>



<?php 

if($table->rowCount()==0)
{ echo'<p class="t1">Ce code n existe pas</p> 
  <a href="index.php">Retour</a>
  ';}
else
//Hamza Khadim
{
while($row=$table->fetch(PDO::FETCH_ASSOC)){?>
<h3>Suppression :Confirmation 2:</h3> 
<p class="t1">Confirmer la suppression</p>
<form method="POST" action="saveDelete_Produit.php" enctype="multipart/form-data">

 code de le produit : <p class="result"> 
  <?php echo $row['Code_produit']?> <br/> </p>
Nom de le produit: <p class="result">
 <?php echo $row['Désignation']?><br/> </p>
 Prix <p class="result">
  <?php echo $row['Prix_unitaire']?><br/> </p>
   Quantity Quantité  <p class="result">
   <?php echo $row['Quantité_stock']?> </p>
la photo: <p class="result"><?php echo'<img src="data:image;base64,' . base64_encode( $row['photo'] ) . '" width=100px/>' ?> </p>

<br/><br/>
<input type='hidden' name='x' value='<?php echo "$x";?>'/> 

<?php
}
// envoi code produit par Session
$_SESSION['x']=$x;

}?>
<!--Hamza Khadim -->

<input type="submit" value="Supprimer" name="Supprimer"/>

</form>
</body>
</html>