<!-- Arithmetic Operators -->

<?php
    $a = 10;
    $b = 3;

    echo $a + $b; // Outputs: 13
    echo $a - $b; // Outputs: 7
    echo $a * $b; // Outputs: 30
    echo $a / $b; // Outputs: 3.3333
    echo $a % $b; // Outputs: 1
    echo $a ** $b; // Outputs: 1000
?>

<!-- Assignment Operators -->
<?php
    $a = 10;
    $a += 5; // $a = $a + 5
    echo $a; // Outputs: 15
?>


<!-- Comparison Operators -->
<?php
    $a = 5;
    $b = 3;

    echo $a > $b;  // Outputs: 1 (true)
    echo $a === $b; // Outputs: (false)
?>

<!-- Logical Operators -->
<?php
    $x = true;
    $y = false;

    echo ($x && $y); // Outputs: (false)
    echo ($x || $y); // Outputs: 1 (true)
    echo !$x; // Outputs: (false)
?>

<!-- Increment/Decrement Operators -->
<?php
    $a = 5;

    echo ++$a; // Outputs: 6
    echo $a++; // Outputs: 6, then $a becomes 7
    echo --$a; // Outputs: 6
    echo $a--; // Outputs: 6, then $a becomes 5
?>


<!-- String Operators -->

<?php
    $a = "Hello";
    $b = " World";

    echo $a . $b; // Outputs: Hello World

    $a .= $b; // $a = $a . $b
    echo $a; // Outputs: Hello World
?>


<!-- Ternary Operator -->
<?php
    $age = 18;
    $status = ($age >= 18) ? "Adult" : "Minor";
    echo $status; // Outputs: Adult
?>
