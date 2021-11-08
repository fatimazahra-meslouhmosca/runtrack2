
<form action="index.php" method="get">
<input type="text" name="str" id="str">
<select name="fonction" id="fonction">
    <option value="gras">Gras</option>
    <option value="cesar">César</option>
    <option value="plateforme">Plateforme</option>
</select>
<input type="submit">

</form>


<?php

/* Créez un formulaire qui contient un input nommé “str” de type text, une liste
déroulante (select) nommée “fonction” et un bouton submit. 

Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option choisie dans la liste déroulante.

Les choix possibles sont :

- “gras” : une fonction qui prend en paramètre “str”. Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.

- “cesar” : une fonction qui prend en paramètre “str” et un nombre
“decalage” (qui vaut 2 par défaut). La chaine est affichée en décalant
chaque caractère d’un nombre égal à “decalage”.
ex : si decalage vaut 1, e devient f. Si décalage vaut 3, z devient c.

- “plateforme”, une fonction qui prend en paramètre “str”. Elle écrit “str”
en ajoutant un “_” aux mots finissant par “me”.*/


$array = array( "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

if ($_GET["fonction"]== "gras"){
    
for ($i=0; isset($str[$i]); $i++){

    for ($j=0; isset($array[$j]); $j++){

        if ($str[$i]== $array[$j]) {
            echo '<b>'. $str.'</b>';

        }
    }
}


}






?>