
<?php

$bdd = mysqli_connect('localhost', 'root', 'root', 'jour08');
mysqli_set_charset($bdd,'utf8');

$requete = mysqli_query($bdd, "SELECT salles.nom, etage.nom FROM `salles` INNER JOIN `etage` ON etage.id = salles.id_etage");

$recup = mysqli_fetch_all($requete);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table>
    <thead>
        <tr>
        <th> Noms salles</th>
        <th>Noms étages </th>
            
        </tr>
    </thead>
    <tbody>

    <?php 

for($i=0; isset($recup[$i]);$i++){
    echo "<tr>";
    foreach ($recup[$i] as $e){
        echo '<td>'.$e.'</td>';}
        echo "</tr>";
};

        ?>
    


    </tbody>
</table>
</body>
</html>
  <?php  