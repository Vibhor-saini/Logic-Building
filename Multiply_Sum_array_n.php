<?php
// // 6. Multiply of elements from an array ========================================
// $array = [10, 20, 30, 40, 50];
// $multiply = 1;

// // Loop through the array and add each element to $sum
// foreach ($array as $num) {
//     // $multiply *= $num;
//     $multiply = $multiply*$num;

// }

// echo "The multiply of the array elements is: " . $multiply;


// 6. Sum of elements from an array ========================================
$array = [10, 20, 30, 40, 50];
$sum = 0;

foreach ($array as $num) {
    $sum = $sum+$num;

}

echo "The sum of the array elements is: " . $sum;
?>