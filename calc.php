<?php

// Define a function that takes two numbers and an operator, and returns the result.
function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 !== 0) {
                return $num1 / $num2;
            } else {
                throw new Exception("Cannot divide by zero");
            }
        default:
            throw new Exception("Invalid operator");
    }
}

// Example usage:
$num1 = 10;
$num2 = 5;
$operator = '*';

try {
    $result = calculate($num1, $num2, $operator);
    echo "$num1 $operator $num2 = $result";
} catch (Exception $error) {
    echo $error->getMessage();
}
?>
