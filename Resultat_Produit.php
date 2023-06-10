<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--Hamza Khadim -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
/>
<style>
<?php
include("css/css1.css");

?>
</style>

<?php
include("menu.html");
include("config.php");
?>
<html>
<head> </head>
<body>
<div class="container">
<!--Hamza Khadim -->

<?php
$x=$_POST["txt1"];
$sql="SELECT * FROM Produit WHERE Code_produit=".$x;
$table=$conn->query($sql);



?>

<?php 
if($table->rowCount()==0)
{ echo'<p class="t1">Ce code n existe pas</p> 
    <a href="FormSearch_Produit.php">Retour</a>
    ';}

    else ?>

<?php while($row=$table->fetch(PDO::FETCH_ASSOC)){?>
    <br>
 <br>
 <br>
    <h1 class="form1" >Produit trouvée : <strong style="color: red;" ><?php echo $row['Désignation']?></h1>
   <br>
    <table style="width:70%">
    
    <tr>
        <th>Code De Produit</th>
        <th>Désignation</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Photo</th>
        <th>Code De Catégorie</th>
        <th>Intitulé</th>
        <th>Domaine</th>
      </tr>
      <tr>
<td><strong><?php echo $row['Code_produit']?></strong></td>
<td><strong><?php echo $row['Désignation']?></strong></td>
<td><strong><?php echo $row['Prix_unitaire']?></strong></td>
<td style="color:red"> <strong> <?php echo $row['Quantité_stock']?></strong></td>
<td><?php echo'<img src="data:image;base64,' . base64_encode( $row['photo'] ) . '" width=100px/>' ?> </td> 
<?php
// les donne de table catégorie
$sql2="SELECT * FROM Catégorie ";
$table2=$conn->query($sql2);
$cat=$table2->fetch(PDO::FETCH_ASSOC)
?>
<td> <strong><?php echo $cat['Code_catégorie']?> </strong></td>
<td style="color:blue"><strong><?php echo $cat['intitulé']?></strong></td>
<td style="color:purple"><strong><?php echo $cat['domaine']?></strong></td>
</tr>
<br>
<?php
} ?>
</table>
<!--Hamza Khadim -->

</form>
</div>
</body>
</html>