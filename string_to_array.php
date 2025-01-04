<?php

// 3. Use of Explode[Convert string to Array]=================================

$string = "apple,banana,cherry,grape";
$array = explode(",", $string); 
echo "<pre>";
print_r($array);


$string = "apple";
$array1 = str_split($string); 
echo "<pre>";
print_r($array1);

?>