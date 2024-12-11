<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConditionalStatement: SwitchCase</title>
</head>
<body>
<?php
// Example 1: Day of the week using switch-case
// Concept: switch-case statement to match a day number to its corresponding weekday.

$day = 3; 

switch ($day) { // Switch on the value of $day
    case 1:
        echo "Monday"; // Execute if $day is 1
        break;
    case 2:
        echo "Tuesday"; // Execute if $day is 2
        break;
    case 3:
        echo "Wednesday"; 
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday"; 
        break;
    case 6:
        echo "Saturday"; 
        break;
    case 7:
        echo "Sunday"; // Execute if $day is 7
        break;
    default:
        echo "Invalid day"; // Execute if $day is not between 1 and 7
}

// Example 2: Menu selection using switch-case
// Concept: switch-case statement to select an option from a menu.

$menuOption = 2; 

switch ($menuOption) { 
    case 1:
        echo "Option 1 selected"; 
        break;
    case 2:
        echo "Option 2 selected"; 
        break;
    case 3:
        echo "Option 3 selected"; 
        break;
    default:
        echo "Invalid option"; 
}

// Example 3: Vowel check using switch-case
// Concept: switch-case statement to check if a character is a vowel.

$char = 'a'; 

switch ($char) { 
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "Vowel"; 
        break;
    default:
        echo "Not a vowel";
}

// Example 4: Calculating the month name based on a number
// Concept: switch-case statement to map a month number to its name.

$monthNumber = 8; 

switch ($monthNumber) { 
    case 1:
        echo "January";
        break;
    case 2:
        echo "February"; 
        break;
    case 3:
        echo "March"; 
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July"; 
        break;
    case 8:
        echo "August";
        break;
    case 9:
        echo "September"; 
        break;
    case 10:
        echo "October"; 
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December"; 
        break;
    default:
        echo "Invalid month number";
}
?>
</body>
</html>