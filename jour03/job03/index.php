<?php

$str = "I'm sorry Dave I'm afraid I can't do that ";
$i=0;
$voy = "Iaeiouy";
$j=0;

for ($i=0 ;isset($str[$i]); $i++){
    for ($j=0; isset($voy[$j]); $j++){
      if ($str[$i]==$voy[$j]){
        echo $str[$i];  
    }
    
    }

}




?>