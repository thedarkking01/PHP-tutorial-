<!-- while Loop -->

<?php
    $i = 1;

    while ($i <= 5) {
        echo "Number: $i <br>";
        $i++; // Increment
    }
?>

<!-- do...while Loop -->
 <?php
    $i = 1;

    do {
        echo "Number: $i <br>";
        $i++; // Increment
    } while ($i <= 5);
?>

<!-- for Loop -->
 <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i <br>";
    }
?>

<!-- foreach Loop -->
 <?php
    $numbers = array(1, 2, 3, 4, 5);

    foreach ($numbers as $number) {
        echo "Number: $number <br>";
    }
?>

<?php
    $ages = array("John" => 25, "Alice" => 22, "Bob" => 28);

    foreach ($ages as $name => $age) {
        echo "$name is $age years old.<br>";
    }
?>


<!-- Nested Loops -->
 <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Outer Loop: $i <br>";
        for ($j = 1; $j <= 3; $j++) {
            echo "Inner Loop: $j <br>";
        }
    }
?>

<!-- Break and Continue -->
 <?php
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            break; // Terminate the loop
        }
        echo "Number: $i <br>";
    }
?>

<?php
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            continue;
        }
        echo "Number: $i <br>";
    }
?>
