<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConditionalStatement: IfElse</title>
</head>
<body>
<?php
// Example 1: Checking if a person is an adult or minor
// Concept: Basic if-else statement to evaluate age and determine adulthood.

$age = 18; // Define the age variable

if ($age >= 18) { // Check if age is 18 or older
    echo "You are an adult."; // Execute if the condition is true
} else {
    echo "You are a minor."; // Execute if the condition is false
}

// Example 2: Calculating grades based on a score
// Concept: if-elseif-else statement to categorize scores into grades.

$score = 85; 

if ($score >= 90) { 
    echo "Grade: A"; 
} elseif ($score >= 80) { 
    echo "Grade: B"; // 
} elseif ($score >= 70) { 
    echo "Grade: C"; // 
} else {
    echo "Grade: D"; 
}

// Example 3: Leap year check
// Concept: Nested if-else statement to determine if a year is a leap year.

$year = 2024; 

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "Leap year"; 
} else {
    echo "Not a leap year"; 
}

// Example 4: Nested if-else to determine positive, negative, or zero number
// Concept: Nested if-else statement to categorize a number as positive, negative, or zero.

$num = 15; 

if ($num > 0) { // Check if the number is positive
    if ($num % 2 == 0) { 
        echo "Positive even number.";
    } else {
        echo "Positive odd number."; 
    }
} else {
    echo "Non-positive number."; 
}
?>

</body>
</html>