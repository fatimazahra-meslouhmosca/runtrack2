<?php

$str =  "On n est pas le meilleur quand on le croit mais quand on le sait";

$pourcompter =0;
$pourcompter2=0;

$dic = array ( 
  "voyelles" => array ("a", "e", "i", "o", "u", "y", "O"),
  "consonnes"=> array ("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z") 
);

for ($i=0 ;isset($str[$i]); $i++){
    for ($j=0 ;isset($dic["voyelles"][$j]); $j++){
        if ($str[$i]==($dic["voyelles"][$j]) ){
            $pourcompter++;}
    }

    for ($k=0 ;isset($dic["consonnes"][$k]); $k++){
        if ($str[$i]==($dic["consonnes"][$k]) ){
            $pourcompter2++;}
    }

}
?>



<table>
    <thead>
        <th>Voyelles</th>
        <th>Consonnes</th>

</thead>
<tbody>
<td> <?php echo $pourcompter ?> </td>
<td> <?php echo $pourcompter2 ?> </td>

</tbody>

</table>
