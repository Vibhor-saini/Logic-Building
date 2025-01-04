<?php

$string = "Hello Hello Vibhor Saini";
$words = explode(" ", $string);

// Create an empty array to track unique words
$uniqueWords = [];

foreach ($words as $word) {
    if (!in_array($word, $uniqueWords)) {
        $uniqueWords[] = $word;
    }
}

// Convert the unique words back into a string
$uniqueString = implode(" ", $uniqueWords);

// Print the result
echo "Original String: $string\n";
echo "String after removing duplicate words: $uniqueString\n";

?>
