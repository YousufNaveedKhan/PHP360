<?php
// Function to greet a user
function greetUser($name) {
    // Output a greeting message
    echo "Hello, $name! Welcome to PHPCourse-24.\n";
}

// Call the function with different arguments
greetUser("Yousuf");
greetUser("Muneeb");

// Function to add two numbers and return the result
function add($a, $b) {
    return $a + $b; // Return the sum of two numbers
}

$result = add(10, 20);
echo "The sum of 10 and 20 is $result\n";

// Function to calculate the discount on a price
function calculateDiscount($price, $discountRate) {
    $discount = $price * ($discountRate / 100); // Calculate discount
    $finalPrice = $price - $discount;          // Calculate final price
    return $finalPrice;                        // Return the final price
}

$finalPrice = calculateDiscount(1500, 20);
echo "The price after a 20% discount is $finalPrice\n";

// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width; // Multiply length and width to get the area
}

$area = calculateArea(5, 10);
echo "The area of the rectangle is $area\n";
?>
