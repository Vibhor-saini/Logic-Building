<?php
// $array1 = [12,13,14, 15];
// $array2 = [15,16,17];
// $array3 = array_merge($array2 , $array1);
// echo "<pre>";
// print_r($array3);


$array1 = ["a"=>"apple", "b"=>"Banana", "c"=>"Cat"];
$array2 = ["d"=>"Dog", "e"=>"Elephant", "f"=>"fish"];

$array3 = array_combine($array1 , $array2);
echo "<pre>";
print_r($array3);


