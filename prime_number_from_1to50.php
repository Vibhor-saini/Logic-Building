<?php

// Function to check if a number is prime
function isPrime($num) {
    if ($num < 2) {
        return false; // Numbers less than 2 are not prime
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // If divisible by any number, not prime
        }
    }
    return true; // Number is prime
}

// Range to find prime numbers
$start = 1;
$end = 50;

echo "Prime numbers between $start and $end are:\n";

for ($n = $start; $n <= $end; $n++) {
    if (isPrime($n)) {
        echo $n . " ";
    }
}

?>
