<?php
//Associative Array=================================
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000"); 
foreach($salary as $k => $v) {  
echo "Key: ".$k."<br/>";  
echo "Value: ".$v."<br/>";  
}


//Switch Statement===================================
$num=20;    
switch($num){
case 10:      
echo("number is equals to 10");      
break; 
case 20:      
echo("number is equal to 20");      
break;      
case 30:      
echo("number is equal to 30");      
break;      
default:      
echo("number is not equal to 10, 20 or 30");    
}  