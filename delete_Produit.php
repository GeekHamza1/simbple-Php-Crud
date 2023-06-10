<style>
<?php
include("css/css1.css");
?>
</style>
<!-- Hamza Khadim -->

<?php
include("menu.html");
include("config.php");
?>
<html>
<head> </head>
<body>
<h3>Liste de Produits</h3>
<?php
$x=$_POST["txt1"];
$sql="SELECT * from Produit where Code_produit=".$x;
$table=$conn->query($sql);



?>


<!-- Hamza Khadim -->

<?php 

if($table->rowCount()==0)
{ echo'<p class="t1">Ce code n existe pas</p> 
  <a href="Formdelete_Produit.php">Retour</a>
  ';}
else
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
<input type="submit" value="Supprimer" name="Supprimer"/>

<?php
}
// envoi code produit par Session
$_SESSION['x']=$x;

}?>

<!-- Hamza Khadim -->

</form>
</body>
</html>