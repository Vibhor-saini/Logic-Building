<?php


//====================Reverse array using foreach loop=====================

$array = [4, 3, 2, 6, 43, 23];  // Original array
$reversedArray = [];  
$len = count($array);

// Reverse the array manually using foreach loop
foreach ($array as $element) {
    array_unshift($reversedArray, $element);  
}

echo "Original Array: ";
print_r($array); 
echo"</br>";
echo "Reversed Array: ";
print_r($reversedArray); 



//====================Reverse array using loop=====================

$array = [4, 3, 2, 6, 43, 233];  // Original array
$reversedArray = [];  // Array to hold the reversed elements

for ($i = count($array) - 1; $i >= 0; $i--) {
    $reversedArray[] = $array[$i];  
}

echo "Original Array: ";
print_r($array); 
echo "Reversed Array: ";
print_r($reversedArray); 
?>