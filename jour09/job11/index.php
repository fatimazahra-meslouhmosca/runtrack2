
<?php

$bdd = mysqli_connect('localhost', 'root', 'root', 'jour08');
mysqli_set_charset($bdd,'utf8');

$requete = mysqli_query($bdd, "SELECT AVG(capacite) FROM salles ");

$etudiants = mysqli_fetch_all($requete);



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
        <th> Capacité moyenne </th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $etudiants[0][0]?>
        </td>
        </tr>
    </tbody>
</table>
</body>
</html>
