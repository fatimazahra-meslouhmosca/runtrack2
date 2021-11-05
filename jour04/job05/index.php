<form action="index.php" method="post">

<label for="username"></label>
<input type="text" name="username" id="username">

<label for="password"></label>
<input type="password" name="password" id="password">

<input type="submit" value = "Soumettre">

</form>


<?php

if (($_POST["username"]== "John") && ($_POST["password"]== "Rambo")){
    echo "C'est pas ma guerre";
}
else {
    echo "Votre pire cauchemar";
}

?>
