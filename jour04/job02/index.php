<form action="index.php" method="get">

<label for="Prénom"></label>
<input type="text" name="Prénom" id="Prénom">

<label for="Nom"></label>
<input type="text" name="Nom" id="Nom">

<label for="Mail"></label>
<input type="email" name="Mail" id ="Mail">

<input type="submit" value = "Soumettre">

</form>

<table>
    <thead>
        <th>Argument</th>
        <th>Valeur</th>
    </thead>
    <tbody>
        <tr>
    <td>Prénom</td>
    <td><?php echo $_GET["Prénom"]."<br>"; ?></td>
        </tr>

        <tr>
        <td>Nom</td>
        <td><?php echo $_GET ["Nom"]."<br>"; ?></td>
        </tr>
   
        <tr>
        <td> Mail </td>
        <td><?php echo $_GET ["Mail"]."<br>"; ?></td>
        </tr>
        
    </tbody>
</table>