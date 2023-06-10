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
<!--Hamza Khadim -->

<?php
include("menu.html");
?>
<html>
<meta charset="utf-8"/>
<body>
<br>
<br>
<br>
<br><br>
<br>
<br>
<h3>Suppression Du Produit :Etap 1:</h3> 
<form method="POST" enctype="multipart/form-data"  action="delete_Produit.php">
saisir le code de  le produit à Supprimer <input type="number" required name="txt1"/><br/>

<input type="submit" value="Rechercher"/>

</form>
</body>
</html>