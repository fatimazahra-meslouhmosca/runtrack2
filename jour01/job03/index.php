<?php

$bool = true;

$int = 13;

$str = "Laplateforme!";

$float = 2.2;

?>

<html>

<table>
<caption> Variables de types primitifs </caption>
<thead>
<tr>
    <th>Type</th>
    <th>Nom</th>
    <th>valeur</th>
</tr>
</thead>
<tbody>

<tr>
    <td> <?php echo gettype($bool); ?></td>
    <td> $bool </td>
    <td> <?php echo $bool?></td>
</tr>

<tr>
    <td><?php echo gettype($int); ?></td>
    <td> $int</td>
    <td> <?php echo $int?> </td>

</tr>

<tr>
    <td><?php echo gettype($str); ?></td>
    <td> $str </td>
    <td> <?php echo $str ?></td>

</tr>

<tr>
    <td><?php echo gettype($float); ?></td>
    <td>$float </td>
    <td> <?php echo $float?></td>

</tr>

</tbody>

</table>









</html>