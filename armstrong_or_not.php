<?php
//Armstrong or not=================================

$number = 153;   
$a = $number;  //153
$sum  = 0;  
while( $a != 0 )  //153 , 15 , 1
{  
 $rem   = $a % 10;  //3  ,  
 $sum   = $sum + ( $rem * $rem * $rem ); 
 $a   = $a / 10; 
}  

if( $number == $sum )  
{  
 echo "Yes $number an Armstrong Number";  
}else  
{  
 echo "$number is not an Armstrong Number";  
}  

?>