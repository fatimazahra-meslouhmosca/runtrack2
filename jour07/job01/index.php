
<?php
session_start();

if (isset($_GET["reset"])){
    session_destroy();
    echo "0";
}
else {
    if(isset($_SESSION["nbvisites"])){
        $_SESSION["nbvisites"]++; 
     }
     
     else{
          $_SESSION["nbvisites"]=0;
     }
     
     echo $_SESSION["nbvisites"];

}
?>

<form action="index.php" method="get">

<input type="submit" name="reset" id="reset" value="reset">

</form>


