<form action="index.php" method="get">

<label for="nombre"></label>
<input type="text" name="nombre" id="nombre">

<input type="submit" value = "Soumettre">

</form>

<?php

if ($_GET["nombre"]%2 ==0){
    echo "Nombre pair";
}

else {
    echo "Nombre impair";
}

?>