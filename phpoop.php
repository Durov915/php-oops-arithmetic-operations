<?php

// Define a PHP class named Calculation
class Calculation {
    // Declare public properties $a, $b, and $c
    public $a, $b, $c;

    // Define a method to perform addition
    public function sum() {
        // Add the values of $a and $b and assign the result to $c
        $this->c = $this->a + $this->b;
        // Return the result of addition
        return $this->c; 
    }

    // Define a method to perform subtraction
    public function sub() {
        // Subtract the value of $b from $a and assign the result to $c
        $this->c = $this->a - $this->b;
        // Return the result of subtraction
        return $this->c;
    }
}

// Create a new instance of the Calculation class and assign values to properties $a and $b
$c1 = new Calculation();
$c1->a = 20;
$c1->b = 10;

// Create another instance of the Calculation class and assign values to properties $a and $b
$c2 = new Calculation();
$c2->a = 50;
$c2->b = 35;

// Call the sum() method on the first instance and print the result
echo "Sum Value Of C1 is : " . $c1->sum() . "<br>";

// Call the sub() method on the second instance and print the result
echo "Subtraction Value of C2 is : " . $c2->sub();

?>
