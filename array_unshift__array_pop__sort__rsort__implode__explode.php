<?php

//Array unshift==================================
$originalarray1 = [4, 3, 2, 6, 43, 23];  
echo("Before unshift"); 
echo "</br>";
print_r($originalarray1); 
echo "</br>";

$array2 = array_unshift($originalarray1, 22);
echo("After unshift"); 
echo "</br>";
// print_r($originalarray1); 

//Array Pop==================================
echo "Original Array: ";
print_r($originalarray1); 

echo"</br>";

$array3 = array_pop($originalarray1);
echo "Pop element: ";
print_r($array3); 

echo"</br>";
echo "Array after Pop element: ";
print_r($originalarray1); 


//Array PUSH================================== 
echo"</br>";
echo "Original Array: ";
print_r($originalarray1); 

echo"</br>";

$array2 = array_push($originalarray1 , 23);


echo"</br>";
echo "Array after Push element: ";
// print_r($originalarray1); 

//Array Implode==================================
echo "Original Array: ";
print_r($originalarray1); 

echo"</br>";
$array2 = implode(",", $originalarray1);

echo"</br>";
echo "Array after implode: ";
print_r($array2); 


//Array Explode==================================
// $array2 = "1,2,3,4,5,6,7,8,9";
echo"</br>";
echo "Original String: ";
echo($array2); 

echo"</br>";
$array3 = explode(",", $array2);

echo"</br>";
echo "Array after Explode: ";
print_r($array3); 


$string = "apple,banana,cherry,grape";
$array = explode(",", $string); // Split the string by commas
echo "<pre>";
print_r($array);
?>