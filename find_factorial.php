<?php
// Function to calculate factorial
function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result = $result * $i; // Multiply result by $i
    }
    return $result;
}
$num = 6;
echo "Factorial of $num is: " . factorial($num); // Output: 120
?>
