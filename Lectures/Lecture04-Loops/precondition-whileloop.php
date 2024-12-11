<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre Condition: While Loop</title>
</head>

<body>
    <?php
    // This is a 'while' loop, another type of pre-condition loop
    // It will continue to execute the block of code as long as the condition is true

    // Initialize the counter
    $counter = 1;

    // While loop condition
    while ($counter <= 5) {
        // Print the current value of $counter
        echo "Current value of counter is: $counter\n";

        // Increment the counter to avoid an infinite loop
        $counter++;
    }
    ?>
</body>

</html>