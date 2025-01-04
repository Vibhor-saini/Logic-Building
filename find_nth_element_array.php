<?php
// 4. Find nth element from an array ========================================
function findNthnumber($array, $n) {
    if (count($array) < $n) {
        echo "Not enough elements to determine the {$n}-th number element.";
        return;
    }

    $number = [];
    foreach ($array as $num) {
        $number[] = $num;
    }

    return $number[$n-1];
}

$array = [20, 30, 10, 40, 70, 60, 50];
// print_r($array);

$n = 6; 
$nth_number = findNthnumber($array, $n);
echo "The {$n}th number from given array is: " . $nth_number;

// $fruits = ["apple", "banana", "cherry"];
// $removedFruit = array_pop($fruits);

// echo $removedFruit; // Output: cherry
// print_r($fruits); 
// // Output: Array ( [0] => apple [1] => banana )

?>

