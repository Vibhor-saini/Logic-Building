<?php
$string = "vibhorr";

// Convert the string into an array of characters
$characters = str_split($string);

// Create an empty array to track unique characters
$uniqueChars = [];

foreach ($characters as $char) {
    // Add the character to the array only if it's not already in it
    if (!in_array($char, $uniqueChars)) {
        $uniqueChars[] = $char;
    }
}

// Convert the unique characters back to a string
$uniqueString = implode('', $uniqueChars);

// Print the result
echo "Original String: $string\n";
echo "String after removing duplicates: $uniqueString\n";
?>
