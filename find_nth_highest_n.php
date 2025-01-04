<?php
// 4. Find nth highest element from an array ========================================

function findNthHighest($array, $n) {
    if (count($array) < $n) {
        echo "Not enough elements to determine the {$n}-th highest element.";
        return;
    }

    $highest = [];
    foreach ($array as $num) {
        $highest[] = $num;

        // Sort the array in descending order
        rsort($highest); 
        if (count($highest) > $n) {   
            array_pop($highest);
        }
    }

    return $highest[$n - 1];
}

$array = [20, 30, 10, 40, 70, 60, 50];
$n = 2; 
$nth_highest = findNthHighest($array, $n);
echo "The {$n}-th highest element is: " . $nth_highest;
echo "The {$n}-th Smallest element is: " . $nth_highest;

// $fruits = ["apple", "banana", "cherry"];
// $removedFruit = array_pop($fruits);

// echo $removedFruit; // Output: cherry
// print_r($fruits); 
// // Output: Array ( [0] => apple [1] => banana )

?>

