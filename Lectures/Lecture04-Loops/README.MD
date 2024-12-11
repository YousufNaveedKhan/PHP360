# Lecture 04: Loops in PHP

Loops are a fundamental concept in programming used to execute a block of code repeatedly based on a specified condition. In PHP, loops help automate repetitive tasks, improving code efficiency and readability. In this lecture, we'll cover the two main types of loops supported by PHP: Pre-Condition Loops and Post-Condition Loops.

## Types of Loops in PHP

### 1. Pre-Condition Loops

Pre-Condition Loops check the condition before executing the loop body. This means the code block inside the loop may not execute at all if the condition is false from the start.

#### 1.1 `while` Loop

The `while` loop is a pre-condition loop that repeatedly executes a block of code as long as the specified condition remains true.

**Syntax:**

```php
while (condition) {
    // Code to be executed
}
```

**Example:**

```php
$counter = 1;

while ($counter <= 5) {
    echo "Counter is $counter\n";
    $counter++;
}
```

In this example, the loop will continue to run as long as `$counter` is less than or equal to 5. Once `$counter` exceeds 5, the loop stops.

#### 1.2 `for` Loop

The `for` loop is another pre-condition loop with a more concise syntax for initializing variables, setting conditions, and updating variables.

**Syntax:**

```php
for (initialization; condition; increment/decrement) {
    // Code to be executed
}
```

**Example:**

```php
for ($i = 1; $i <= 5; $i++) {
    echo "Number is $i\n";
}
```

In this example, the loop starts with `$i` initialized to 1 and increments `$i` by 1 on each iteration until `$i` is greater than 5.

### 2. Post-Condition Loops

Post-Condition Loops check the condition after executing the loop body. This ensures that the loop body is executed at least once before the condition is evaluated.

#### 2.1 `do-while` Loop

The `do-while` loop guarantees that the block of code will run at least once, even if the condition is initially false.

**Syntax:**

```php
do {
    // Code to be executed
} while (condition);
```

**Example:**

```php
$number = 1;

do {
    echo "Number is $number\n";
    $number++;
} while ($number <= 5);
```

In this example, the loop will print the number and then check if `$number` is less than or equal to 5. Even if `$number` starts greater than 5, the loop will execute at least once.

## Choosing the Right Loop

- **Use `while`** when you need to execute a block of code as long as a condition remains true, and you are not sure if the loop body should run at least once.
- **Use `for`** when you know in advance how many times you want the loop to execute.
- **Use `do-while`** when you need to ensure that the loop body runs at least once regardless of the condition.

## Conclusion

Loops are an essential feature in PHP that allow you to automate repetitive tasks and control the flow of your programs. Understanding the difference between pre-condition and post-condition loops helps in selecting the most appropriate loop type for different scenarios. Practice using these loops to gain a deeper understanding and improve your programming efficiency.

Feel free to experiment with different loop types and conditions to get a better grasp of how they work!