<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Exercise 1: Variable and Operators</h2>";
        
        #Exercise 1: N0.1
        $a = 15;
        $b = 7;

        #Exercise 1: N0.2
        echo "<p>Sum: " . ($a + $b) . "</p>";
        echo "<p>Difference: " . ($a - $b) . "</p>";
        echo "<p>Product: " . ($a * $b) . "</p>";
        echo "<p>Quotient: " . ($a / $b) . "</p>";

        echo "<h2>Exercise 2: Conditional Statements</h2>";
        
        #Exericse 2: N0.1
        if ($number % 2 == 0) {
            echo "The number $number is even.<br>";
        }
        else {
            echo "The number $number is odd.<br>";
        }

        #Exercise 2: NO.2
        if ($number > 0) {
            echo $number . "is positive.<br>";
        }
        elseif ($number < 0) {
            echo $number . "is negative.<br>";
        }
        else {
            echo $number . "is zero.<br>";
        }

        echo "<h2>Exercise 3: Loops</h2>";

        #Exercise 3: NO.1
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz\n";
            } elseif ($i % 3 == 0) {
                echo "Fizz\n";
            } elseif ($i % 5 == 0) {
                echo "Buzz\n";
            } else {
                echo $i . "\n";
            }
        }
    ?>  
</body>
</html>