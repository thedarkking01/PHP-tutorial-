<?php
function greet() {
    echo "Hello, World!";
}

greet(); // Calling the function
?>


<!-- Function with Parameters -->
<?php
function greet($name) {
    echo "Hello, $name!";
}

greet("sourabh"); // Passing an argument
?>


<!-- Function with Default Parameters -->
<?php
function greet($name = "Guest") {
    echo "Hello, $name!";
}

greet(); // Uses default value
greet("sourabh"); // Overrides default value
?>


<!-- Function with Return Value -->
<?php
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 10); // Store the returned value
echo "The sum is: $result";
?>


<!-- Passing Arguments by Reference -->
<?php
function addTen(&$num) {
    $num += 10;
}

$value = 5;
addTen($value); // Pass by reference
echo $value; // Original variable is modified
?>

<!-- Anonymous (Lambda) Functions -->
<?php
$greet = function($name) {
    return "Hello, $name!";
};

echo $greet("sourabh");
?>


<!-- Arrow Functions (PHP 7.4+) -->
<?php
$multiply = fn($a, $b) => $a * $b;

echo $multiply(4, 5);
?>


<!-- Recursive Functions -->
<?php
function factorial($n) {
    if ($n === 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(5); // 5 * 4 * 3 * 2 * 1
?>



<!-- Nested Function -->
<?php
function calculator($a, $b) {
    echo "Outer function: Calculating sum and product.<br>";

    // Define a nested function to calculate the sum
    function sum($x, $y) {
        return $x + $y;
    }

    // Define a nested function to calculate the product
    function product($x, $y) {
        return $x * $y;
    }

    // Call nested functions
    echo "Sum: " . sum($a, $b) . "<br>";
    echo "Product: " . product($a, $b) . "<br>";
}

// Call the outer function
calculator(4, 5);
?>
