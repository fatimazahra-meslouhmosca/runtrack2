
<form action="index.php" method="get">

<label for="largeur"></label>
<input type="text" name="largeur" id="largeur">

<label for="hauteur"></label>
<input type="text" name="hauteur" id="hauteur">

<input type="submit" value = "Soumettre">

</form>

<?php

$h = $_GET["hauteur"];
$l = $_GET["largeur"];

for ($si=0; $h >= 0; $i++){
    echo "<br>";
    echo "//";
}


?>