
<?php
/*Créez un formulaire de connexion qui contient un input de type de text
nommé “prenom” et un bouton submit nommé “connexion”. Lorsque l’on
valide le formulaire, le prénom est ajouté dans un cookie. Si un utilisateur a
déjà entré son prénom n'affichez plus le formulaire de connexion. 
A la place, écrivez et ajouter un bouton “Déconnexion” nommé “deco”. 
Lorsque l’utilisateur se déconnecte, il faut à nouveau afficher le formulaire de connexion.*/

if (isset($_POST["prenom"])){
  setcookie("prenom", $_POST["prenom"]);  
}


if(isset ($_COOKIE["prenom"])){
    echo 'Bonjour ' . $_COOKIE["prenom"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
  <?php if (isset($_COOKIE["prenom"])){
      echo "<div class= 'invisible'>" ;
  }
  else {
     echo  "<div>";}
   ?>
<form action="index.php" method="post">
<input type="text" name="prenom" id="prenom"> 
<input type="submit" name ="connexion"  value="connexion" id="connexion">
</div> 
<input type="submit" name ="deco"  value="deconnexion" id="déconnexion">
</form>
</body>
</html>


 

 

