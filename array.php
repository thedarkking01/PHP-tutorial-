<!-- Indexed Arrays -->
<?php
$fruits = array("Apple", "Banana", "Cherry");

// Accessing array elements
echo $fruits[0]; 
echo $fruits[1]; 

// Adding an element
$fruits[] = "Orange"; // Adds "Orange" at the next index
print_r($fruits);  // Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange )
?>
