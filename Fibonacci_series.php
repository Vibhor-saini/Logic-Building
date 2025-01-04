<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="num">Enter your number</label>
    <input type="text" name="num" id="num" placeholder="Enter your Number">
    <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["num"];
    
    if ($n <= 0) {
        echo "<h3>Please enter a positive number greater than 0.</h3>";
    } else {
        $n1 = 0;
        $n2 = 1;

        echo "<h3>Fibonacci series for first " . $n . " numbers: </h3>";
        echo $n1; // Print the first number

        for ($i = 1; $i < $n; $i++) { // Loop starts at 1 since $n1 is already printed
            echo ' ' . $n2;
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;
        }
    }
}
?>
