<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Condition: Do While Loop</title>
</head>

<body>
    <?php
    // This is a 'do-while' loop, a type of post-condition loop
    // The loop executes the block of code first and then checks the condition

    // Initialize the number
    $number = 1;

    // Do-while loop condition
    do {
        // Print the current value of $number
        echo "Current value of number is: $number\n";

        // Increment the number
        $number++;
    } while ($number <= 5);
    ?>
</body>

</html>