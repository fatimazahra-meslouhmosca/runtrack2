<?php

Function calcule($a, $operation, $b){
    if ($operation == "+"){
        return $a+$b;
    }
    elseif ($operation == "-"){
        return $a-$b;
    }
    elseif ($operation == "*"){
        return $a*$b;
    }
    elseif ($operation == "/"){
        return $a/$b;
    }
    elseif ($operation == "%"){
        return $a%$b;
    }
    else return "ceci n'est pas un opérateur";

}

echo calcule(3, "/", 2);
 

?>

