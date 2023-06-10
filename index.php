
<!-- Hamza Khadim -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
<!-- Hamza Khadim -->

<?php
$sql="SELECT * FROM Produit";
$table=$conn->query($sql);



?>
<form class="form1">
  <br>
  <br>
  
<h3>Liste Du Produit et Catégorie</h3>
<!-- Hamza Khadim -->


<?php if($table->rowCount()==0)
{ echo'<p class="t1">il y a aucun Produit Dans la Base de Donne</p>';}
else ?>
<table style="width:100%">

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
<?php while($row=$table->fetch(PDO::FETCH_ASSOC)){?>

<td><strong><?php echo $row['Code_produit']?></strong></td>
<td><strong><?php echo $row['Désignation']?></strong></td>
<td><strong><?php echo $row['Prix_unitaire']?></strong></td>
<td style="color:red"> <strong> <?php echo $row['Quantité_stock']?></strong></td>
<td><?php echo'<img src="data:image;base64,' . base64_encode( $row['photo'] ) . '" width=100px/>' ?> </td> 
<?php
$codeCat = $row['Code_catégorie'];
// les donne de table catégorie
$sql2="SELECT * FROM Catégorie WHERE Code_catégorie= ".$codeCat;
$table2=$conn->query($sql2);
$cat=$table2->fetch(PDO::FETCH_ASSOC)
?>
<td> <strong><?php echo $cat['Code_catégorie']?> </strong></td>
<td  style="color:blue"> <strong><?php echo $cat['intitulé']?></strong></td>
<td style="color:purple"><strong><?php echo $cat['domaine']?></strong></td>

<td><strong><a href="voirEdit_Produit.php?ref=<?php echo $row['Code_produit']?>" class="btn btn-warning">Modifier</a></strong> </td>
<td><strong><a href="voirdelete_Produit.php?Reference=<?php echo $row['Code_produit']?>" class="btn btn-danger">Supprimer</a></strong> </td>
</tr>
<br>

<?php
} ?>

</table>
<br>
<br>

<a href="FormAdd_Produit.php" class="btn btn-success">Ajouter un Produit</a><br/>

</form>
</div>
<!-- Hamza Khadim -->

</body>
</html>