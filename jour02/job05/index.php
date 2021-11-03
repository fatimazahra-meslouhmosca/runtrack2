<?php

for ($var= 2; $var<= 1000; $var=$var+1){
   $mybool = true;

    for ($var2=2; $var2<=$var; $var2++){
        
        if ( ($var%$var2 == 0) && ($var2 != $var) ){
            $mybool = false;
        }
       
    }
    if ($mybool == true) {
        echo $var."<br/>";
    }
}

?>