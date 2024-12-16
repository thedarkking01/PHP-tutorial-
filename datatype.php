<?php
    $age = 25; // Integer
    echo $age; // Outputs: 25

    $price = 19.99; // Float
    echo $price; // Outputs: 19.99

    $name = "John Doe"; // String
    echo $name; // Outputs: John Doe

    $isLoggedIn = true; // Boolean
    echo $isLoggedIn; // Outputs: 1 (true is represented as 1, false as an empty string)

    $value = NULL;
    echo $value; // Outputs nothing

?>


//Type Casting
<?php
    $number = "123"; // String
    $integer = (int) $number; // Cast to integer
    echo $integer; // Outputs: 123
?>



//Resource
<?php
    $file = fopen("example.txt", "r"); // Resource
    echo $file; // Outputs: Resource id #1
    fclose($file);
?>



//compound type -
//Array --
<?php
    $fruits = array("Apple", "Banana", "Orange"); // Indexed array
    $person = array("name" => "John", "age" => 30); // Associative array

    echo $fruits[0]; // Outputs: Apple
    echo $person["name"]; // Outputs: John
?>

// Object
<?php
    class Car {
        public $make;
        public $model;

        function __construct($make, $model) {
            $this->make = $make;
            $this->model = $model;
        }

        function getCarDetails() {
            return $this->make . " " . $this->model;
        }
    }

    $myCar = new Car("Toyota", "Corolla");
    echo $myCar->getCarDetails(); // Outputs: Toyota Corolla
?>

