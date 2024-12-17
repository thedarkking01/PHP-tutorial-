<?php
    echo "Line 1<br>";
    goto jump_here; // Jump to the label below

    echo "This line will be skipped.<br>";

    jump_here:
    echo "Line 2 - Jumped here!";
?>


<!-- example with loops -->

<?php
    $i = 1;

    while ($i <= 5) {
        if ($i == 3) {
            goto exit_loop; // Jump out of the loop when $i equals 3
        }
        echo "Number: $i <br>";
        $i++;
    }

    exit_loop:
    echo "Exited the loop!";
?>
