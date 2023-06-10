<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!--Hamza Khadim -->
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
<h3>Modifier Un  Catégories</h3>
<?php
$x=$_POST["txt1"];
$sql="SELECT * FROM Catégorie WHERE Code_Catégorie=".$x;
$table=$conn->query($sql);



?>
<!--Hamza Khadim -->

<form method="POST" action="saveEdit_Catégorie.php" enctype="multipart/form-data">


<?php 
if($table->rowCount()==0)
{ echo'<p class="t1">Ce code n existe pas</p> 
    <a href="FormEdit_Catégorie.php">Retour</a>
    ';}
else
{
while($row=$table->fetch(PDO::FETCH_ASSOC)){?>
 code de le Catégorie :
 <input type="text" name="txt1" value=" <?php echo $row['Code_catégorie']?>"/> <br/>
saisir le nouveau intitulé de le Catégorie:
 <input type="text" name="txt2" value="<?php echo $row['intitulé']?>"  /> <br/>
 saisir le nouveau domaine de le Catégorie:
 <input type="text" name="txt3" value=" <?php echo $row['domaine']?>" /><br/> 
<!--Hamza Khadim -->

</div>
<?php
} 
?>
<br>
  <input type="submit" value="Sauvegarder" name="Sauvegarder"/>
   </form>

   <?php
            
}?>
<br>
<br>

<!--Hamza Khadim -->

</body>
</html>