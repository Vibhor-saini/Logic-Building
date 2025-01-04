<?php

//==================Found particular character================

// $string = "vibhor";
// $array = str_split($string);
// // Loop through each character of the string
// foreach ($array as $char) {
//     if ($char === 'r') {
//         echo "Character found: $char\n";
//         break; 
//     }
// }

// echo "</br>";
//==================Found particular word================


$string = "vibhor vibhor";
// Split the string into words
$array = explode(" ", $string);

foreach ($array as $word) {
    if ($word === 'vibhor') {
        echo "Word found: $word\n";
        break; 
    }
}

?>

