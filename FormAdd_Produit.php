<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- Hamza Khadim -->
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
<!-- Hamza Khadim -->

<body>
    <h2>Ajouter un Produit</h2>
    <?php $sql = "SELECT * FROM catégorie";
    ?>
    <form method="POST" enctype="multipart/form-data" action="Add_Produit.php">
        saisir le code de Produit<input type="text" name="txt1" value="<?php $id = (rand(10, 500));echo $id ?> " /><br />
        <label for="cat">selectionner la Catégorie du Produit </label>
        <select required id="catégorie" name="txt6">
            <?php include_once 'catégorie.php'; ?>
            <option id="1" style="color:green" value="add">Ajouter</option>
            <script src="addcat.js"></script>
            <?php
            echo "</select> ";

            ?>
            <br>
            saisir la Désignation de Produit<input type="text" name="txt2" /><br />
            saisir le Prix unitaire de Produit<input type="number" name="txt3" /><br />
            saisir la Quantité stock de Produit<input type="number" name="txt4" /><br />
            choisir la photo de Produit<input type="file" name="txt5" /><br />
            <input type="submit" value="Ajouter" />

    </form>
</body>
<!-- Hamza Khadim -->

</html>