<?php

function isPrime($num) {
    if ($num < 2) {
        return false; // Numbers less than 2 are not prime
    }
    for ($i = 2; $i <= sqrt($num); $i++) {  //36 = 6
        if ($num % $i == 0) {
            return false; // If divisible by any number, not prime
        }
    }
    return true; // Number is prime
}

$n = 36;
    if (isPrime($n)) {
        echo "$n is a prime number.";
    } else{
        echo "$n is not a prime number.";
    }


?>
