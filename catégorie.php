<?php
include("config.php");
// Hamza Khadim
$sql="SELECT * FROM catégorie"; 
echo "<option ></option>";
foreach ($conn->query($sql) as $row) {
echo '<option id="id-cat" value="'.$row["Code_catégorie"].'">'.$row["intitulé"].'</option>';
}
?>