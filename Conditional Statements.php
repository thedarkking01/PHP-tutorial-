<!-- if Statement -->

<?php
    $age = 20;

    if ($age >= 18) {
        echo "You are eligible to vote.";
    }
?>

<!-- if--else Statement -->

<?php
    $marks = 45;

    if ($marks >= 50) {
        echo "You passed!";
    } else {
        echo "You failed!";
    }
?>


<!-- if...elseif...else Statement -->

<?php
    $score = 75;

    if ($score >= 90) {
        echo "Grade: A";
    } elseif ($score >= 75) {
        echo "Grade: B";
    } elseif ($score >= 50) {
        echo "Grade: C";
    } else {
        echo "Grade: F";
    }
?>


<!-- Nested if Statement -->

<?php
    $age = 20;
    $hasID = true;

    if ($age >= 18) {
        if ($hasID) {
            echo "You can enter the club.";
        } else {
            echo "You need to show an ID.";
        }
    } else {
        echo "You are not old enough to enter.";
    }
?>


<!-- Switch Statement -->

<?php
    $day = "Tuesday";

    switch ($day) {
        case "Monday":
            echo "It's the start of the week.";
            break;
        case "Tuesday":
            echo "It's Tuesday!";
            break;
        case "Friday":
            echo "Weekend is near!";
            break;
        default:
            echo "It's a regular day.";
    }
?>


<!-- Ternary Operator -->

<?php
    $age = 17;

    $status = ($age >= 18) ? "Adult" : "Minor";
    echo $status;
?>

