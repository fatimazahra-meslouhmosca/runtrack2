<form action="index.php" method="post">

<label for="Prénom"></label>
<input type="text" name="Prénom" id="Prénom">

<label for="Nom"></label>
<input type="text" name="Nom" id="Nom">

<label for="Mail"></label>
<input type="email" name="Mail" id ="Mail">

<input type="submit" value = "Soumettre">

</form>

<?php
$compteur = 0;

foreach ($_POST as $value){
$compteur++;
}

echo "le nombre d’arguments POST est ". $compteur;

?>