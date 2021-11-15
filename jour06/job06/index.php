<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if ($_POST['style'] == "style1"){
        echo '<link rel="stylesheet" href="style1.css">';
    }
    elseif ($_POST['style']== "style2"){
        echo '<link rel="stylesheet" href="style2.css">';
    }
    elseif ($_POST['style']== "style3"){
        echo '<link rel="stylesheet" href="style3.css">';
    }
    else{};
    echo "<pre>"; var_dump($_POST); echo "</pre>";
    ?>

    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        
        <select name ="style" id="style">
            <option value="style1">Style1</option>
            <option value="style2">Style2</option>
            <option value="style3">Style3</option>

        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>