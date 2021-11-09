<?php

if (isset($_GET["reset"])){
    unset($_COOKIE["nbvisites"]);
    echo "0";
}
else {
    
if (!isset($_COOKIE)){
    $compteur=1;
}
else {
    $compteur=$_COOKIE["nbvisites"]+1;
}

setcookie("nbvisites", $compteur);

echo $_COOKIE["nbvisites"];

}

?>

<form action="index.php" method="get">

<input type="submit" name="reset" id="reset" value="reset">

</form>


