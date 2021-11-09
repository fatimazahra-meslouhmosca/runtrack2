<?php
/*Créez un formulaire qui contient un input de type de text nommé “prenom”
et un bouton submit. Lorsque l’on valide le formulaire, le prénom est ajouté
dans une variable de session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.*/

session_start();

if (isset($_POST["prenom"])){
    $_SESSION["prenom"] .= ' ' . $_POST["prenom"];
    echo $_SESSION["prenom"];
}

if (isset($_POST["reset"])){
    unset ($_SESSION["prenom"]);
}
?>

<form action="index.php" method ="post">
    <input type="text" name="prenom">
    <input type="submit" name="submit">
    <input type="submit" name="reset" >
</form>