
<?php

function leetspeak($str) {
    $new_string = "";
    for ($i=0; isset($str[$i]);$i++){
        
        if ($str[$i]== "A" or $str[$i]== "a"){
             $str[$i]= 4;
        }
        
        elseif ( $str[$i]== "B" or $str[$i]== "b"){
        $new_string .=  $str[$i]= 8;

        }
        
        elseif ( $str[$i]== "E" or $str[$i]== "e"){
        $new_string .=  $str[$i]= 3;

        }
        
        elseif ( $str[$i]== "G" or $str[$i]== "g"){
        $new_string .=  $str[$i]= 6;

        }
        
        elseif ( $str[$i]== "L" or $str[$i]== "l"){
        $new_string .=  $str[$i]= 1;

        }
        
        elseif ( $str[$i]== "S" or $str[$i]== "s"){
        $new_string .=  $str[$i]= 5;

        }
        
        elseif ( $str[$i]== "T" or $str[$i]== "t"){
        $new_string .=  $str[$i]= 7;

        }
        else{
            $new_string .= $str[$i];
        }
    }
        
        return $new_string;
}


echo leetspeak("Je n'en peux plus de cet exercice. A bientot!");

?>