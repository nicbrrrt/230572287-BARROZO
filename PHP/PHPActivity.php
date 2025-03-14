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

          $number = 5; 

        
        if ($number % 2 == 0) {
            echo "The number $number is even.<br>";
        } else {
            echo "The number $number is odd.<br>";
        }

        
        if ($number > 0) {
            echo $number . " is positive.<br>";
        } elseif ($number < 0) {
            echo $number . " is negative.<br>";
        } else {
            echo $number . " is zero.<br>";
        }

        echo "<h2>Exercise 3: Loops</h2>";

        #Exericse 3: N0.1
        
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
        
        #Exericse 3: N0.2

        function fibonacciEvenNumbers($n) {
            $fib = [0, 1]; 
        
            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
            }
        
            // Print only the even numbers in the sequence
            echo "Even Fibonacci numbers: ";
            foreach ($fib as $num) {
                if ($num % 2 == 0) {
                    echo $num . " ";
                }
            }
        }
        
        // Call the function for the first 10 Fibonacci numbers
        fibonacciEvenNumbers(10);

        echo "<h2>Exercise 4: Function</h2>";

        #Exericse 4: N0.1

        function greet($name) {
            return "Hello, $name! Welcome!";
        }

        function square($num) {
            return $num * $num;
        }

        echo greet("John") . "<br>"; 
        echo "The square of 4 is " . square(4) . "<br>"; 

        echo "<h2>Exercise 4: Form Handling</h2>";

        #Exericse 5: N0.1


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            echo "<p>Hello, $name!</p>";
        }

    ?>  

        <form method="post">
                Name: <input type="text" name="name">
                <input type="submit" value="Submit">
            </form>

</body>
</html>