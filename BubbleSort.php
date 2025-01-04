<?php
// 1. Sort an array[Bubble sort]==============================================

$array = array(1, 16, 15, 14, 13, 2, 3, 4);  // 8 element
$count = count($array);

for ($i = 0; $i < $count - 1; $i++) {
    for ($j = 0; $j < $count - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j + 1];
            $array[$j + 1] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

echo "<pre>";
print_r($array);
?>