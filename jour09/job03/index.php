
<?php

$bdd = mysqli_connect('localhost', 'root', 'root', 'jour08');
mysqli_set_charset($bdd,'utf8');

$requete = mysqli_query($bdd, "SELECT prenom , nom , naissance FROM etudiants WHERE sexe = 'Femme'");

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
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($etudiants as $etudiant){
            echo '<tr><td>'.$etudiant['nom']. '</td>';
            echo '<td>'.$etudiant['prenom']. '</td>';
            echo '<td>'.$etudiant['naissance']. '</td></tr>';
        };
        ?>

    </tbody>
</table>
</body>
</html>
