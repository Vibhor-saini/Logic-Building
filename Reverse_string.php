<?php
// 2. Reverse a String=======================================================


$string = "VIBHOR"; 
$array = str_split($string); 

// print_r($array);
$len = count($array);
echo $len;

$reversedArray = [];  //  [R,O,H,B,I,V]

for ($i = $len-1; $i >=0; $i--) {
    $reversedArray[] = $array[$i]; 
}

print_r($reversedArray[3]);
echo "</br>";
$reversedString = implode("", $reversedArray); 

echo "Original String: $string\n";
echo "<br>";
echo "Reversed String: $reversedString\n";

?>