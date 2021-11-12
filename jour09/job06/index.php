
<?php

$bdd = mysqli_connect('localhost', 'root', 'root', 'jour08');
mysqli_set_charset($bdd,'utf8');

$requete = mysqli_query($bdd, "SELECT COUNT(*) AS 'nb_etudiants' FROM etudiants ");

$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);




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
        <th>nb_etudiants</th>
            
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($etudiants as $etudiant){
            echo '<tr><td>'.$etudiant['nb_etudiants']. '</td></tr>';
        };
        ?>

    </tbody>
</table>
</body>
</html>
