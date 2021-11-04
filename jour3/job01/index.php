<?php

$array = [200, 204, 173, 98, 171, 404, 459];

for ($i=0 ;isset($array[$i]); $i++)
{

    if ($array[$i] %2 == 0) {
        echo $array[$i]. " est pair <br/>";
    }
    else {
        echo $array[$i]. " est impair <br/>";
    }
}


