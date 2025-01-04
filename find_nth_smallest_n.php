<?php
// 4. Find nth smallest element from an array ========================================

function findNthsmallest($array, $n) {
    if (count($array) < $n) {
        echo "Not enough elements to determine the {$n}-th smallest element.";
        return;
    }

    $smallest = [];
    foreach ($array as $num) {
        $smallest[] = $num;
        // Sort the array in ascending order
        sort($smallest); 

        if (count($smallest) > $n) {   
            array_pop($smallest);
        }
    }

    return $smallest[$n - 1];
}

$array = [20, 30, 10, 40, 70, 60, 50];
$n = 2; 
$nth_smallest = findNthsmallest($array, $n);
echo "The {$n}-th Smallest element is: " . $nth_smallest;
?>

