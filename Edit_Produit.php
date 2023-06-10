<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
/><style>
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
<h3>Modifier Un  Produits</h3>
<?php
$x=$_POST["txt1"];
$sql="SELECT * FROM Produit WHERE Code_produit=".$x;
$table=$conn->query($sql);



?>
<form method="POST" action="saveEdit_Produit.php" enctype="multipart/form-data">


<?php 
if($table->rowCount()==0)
{ echo'<p class="t1">Ce code n existe pas</p> 
    <a href="FormEdit_Produit.php">Retour</a>
    ';}
else
{
while($row=$table->fetch(PDO::FETCH_ASSOC)){?>
 code de le produit :
 <input type="text" name="txt1" value=" <?php echo $row['Code_produit']?>"/> <br/>
saisir le nouveau nom de le produit:
 <input type="text" name="txt2" value="<?php echo $row['Désignation']?>"  /> <br/>
 saisir le nouveau domaine de le produit:
 <input type="text" name="txt3" value=" <?php echo $row['Prix_unitaire']?>" /><br/> 

 saisir le nouveau Stock de ce Produit:
 <input type="text" name="txt5" value=" <?php echo $row['Quantité_stock']?>" /><br/> 
la photo  de le produit :<?php echo'<img src="data:image;base64,' . base64_encode( $row['photo'] ) . '" width=100px/>' ?> 

<br/><br/>
 Modifer la Photo ? &nbsp; <input type="checkbox" id= "UpdatePhoto">
<div id="delivery" style="display:none;">
<br/>Choisir une autre photo :<input type="file" name="txt4"/> 
<script>
 var checkbox = document.getElementById('UpdatePhoto');
var delivery_div = document.getElementById('delivery');
checkbox.onclick = function() {
   if(this.checked) {
     delivery_div.style['display'] = 'block';
   } else {
     delivery_div.style['display'] = 'none';
   }
}; 
</script>
</div>
<?php
} 
?>
<br>
 <label for="cat">selectionner Le Nouveau  la Catégorie du Produit </label>
        <select required id="catégorie" name="txt6">
        <option ></option>

    <?php

            $sql2="SELECT * FROM catégorie"; 

            foreach ($conn->query($sql2) as $row) {
            echo '<option id="id-cat" value="'.$row["Code_catégorie"].'">'.$row["intitulé"].'</option>';
            }
            ?>            <option id="1" style="color:green" value="add">Ajouter</option>
            <script src="addcat.js"></script>
            <?php
            echo "</select> ";

            ?>
            <br>
            <input type="submit" value="Sauvegarder" name="Sauvegarder"/>
            </form>

            <?php
            
}?>
<br>
<br>


</body>
</html>