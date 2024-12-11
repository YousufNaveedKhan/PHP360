# Lecture 03 - PHP Conditional Statements

Conditional statements are essential for decision-making in programming. They allow your code to execute different actions based on different conditions.

## 1. Conditional Statements

Conditional statements are constructs in programming that execute different code blocks based on certain conditions. In PHP, the primary conditional statements are `if-else` and `switch-case`.

## 2. `if-else` Statements

The `if-else` statement is one of the most commonly used conditional constructs. It allows you to execute code based on whether a condition evaluates to true or false.

### Syntax

```php
if (condition) {
    // Code to execute if the condition is true
} else {
    // Code to execute if the condition is false
}
```

### Example in PHP

```php
$age = 18;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
```

### Real-World Example

Consider a simple application that checks if a person is eligible for a senior citizen discount.

```php
$age = 65;

if ($age >= 65) {
    echo "Eligible for senior citizen discount.";
} else {
    echo "Not eligible for senior citizen discount.";
}
```

### Types of `if-else` Statements

1. **Simple `if-else`**
   - Executes one block of code if the condition is true, and another block if it is false.

2. **`if-elseif-else`**
   - Allows multiple conditions to be checked in sequence.

   ```php
   $score = 85;

   if ($score >= 90) {
       echo "Grade: A";
   } elseif ($score >= 80) {
       echo "Grade: B";
   } elseif ($score >= 70) {
       echo "Grade: C";
   } else {
       echo "Grade: D";
   }
   ```

3. **Nested `if-else`**
   - Includes `if-else` statements inside another `if-else` statement.

   ```php
   $num = 15;

   if ($num > 0) {
       if ($num % 2 == 0) {
           echo "Positive even number.";
       } else {
           echo "Positive odd number.";
       }
   } else {
       echo "Non-positive number.";
   }
   ```

## 3. `switch-case` Statements

The `switch-case` statement is used when you need to compare a variable against multiple values. It is often used as a cleaner alternative to multiple `if-else` statements.

### Syntax

```php
switch (expression) {
    case value1:
        // Code to execute if expression == value1
        break;
    case value2:
        // Code to execute if expression == value2
        break;
    // More cases...
    default:
        // Code to execute if no case matches
}
```

### Example in PHP

```php
$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Weekend";
}
```

### Real-World Example

Imagine you are developing a simple menu system where the user selects an option.

```php
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
```

## 4. Differences Between `if-else` and `switch-case`

1. **Use Case**
   - **`if-else`**: Best for checking different conditions that may not be related. Useful when conditions are complex or when dealing with ranges.
   - **`switch-case`**: Best for checking a single variable against multiple discrete values. Ideal for when you have multiple potential values for the same variable.

2. **Readability**
   - **`if-else`**: Can become less readable with many conditions. Nested `if-else` statements can make the code harder to follow.
   - **`switch-case`**: Generally more readable and maintainable for scenarios where one variable is compared against many values.

3. **Performance**
   - **`if-else`**: Evaluates conditions sequentially, which may be less efficient if there are many conditions.
   - **`switch-case`**: Often optimized for performance, especially when dealing with many discrete values.

## 5. Why Use `switch-case`?

The `switch-case` statement provides a more organized and readable way to handle multiple conditions based on a single variable. It is particularly useful when you have a limited number of potential values for a variable, making the code cleaner and often more efficient than a long series of `if-else` statements.

In summary, `switch-case` is designed to simplify the handling of multiple potential values for a single variable, whereas `if-else` is more flexible for handling complex conditions or ranges.