<?php
function isPalindrome($num) {


    // Convert the number to a string
    $str = (string)$num;

    // Remove spaces and convert to lowercase to handle case-insensitivity
    // $str = strtolower(str_replace(' ', '', $str));

    // Reverse the string
    $reversedStr = strrev($str);

    // Compare the original string with the reversed one
    if ($str === $reversedStr) {
        return true; // It is a palindrome
    } else {
        return false; // It is not a palindrome
    }
}

// Example usage
// $string = "Radar";
$string = 121;
if (isPalindrome($string)) {
    echo "$string is a palindrome.";
} else {
    echo "$string is not a palindrome.";
}
?>
