# Lecture 05: Functions in PHP

Functions are reusable blocks of code that perform specific tasks. They allow you to write modular, organized, and maintainable code. By defining a function once, you can call it multiple times, saving time and effort.

In this lecture, we’ll cover the fundamentals of PHP functions, including their definition, types, and usage. We’ll also explore how to pass arguments to functions and use return values effectively.

---

## What Are Functions?

A function is a block of code designed to perform a specific task when called. Functions help avoid code duplication and make programs easier to read, debug, and maintain.

### Benefits of Using Functions:
1. **Code Reusability**: Write once, use many times.
2. **Modularity**: Break your program into smaller, manageable parts.
3. **Improved Readability**: Makes code cleaner and easier to understand.
4. **Ease of Maintenance**: Update logic in one place instead of multiple locations.

---

## Defining and Calling Functions

In PHP, you define a function using the `function` keyword, followed by the function name, parentheses, and curly braces.

### Syntax:

```php
function functionName() {
    // Code to execute
}
```

### Example:

```php
function greetUser() {
    echo "Hello, User!";
}

// Call the function
greetUser(); // Output: Hello, User!
```

---

## Function Parameters

Parameters allow you to pass data to a function when calling it. Parameters are defined within the parentheses of a function declaration.

### Example:

```php
function greetUser($name) {
    echo "Hello, $name!";
}

// Call the function with an argument
greetUser("Yousuf"); // Output: Hello, Yousuf!
```

---

## Return Values

Functions can return data to the calling code using the `return` statement.

### Example:

```php
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3);
echo "The sum is $result"; // Output: The sum is 8
```

---

## Types of Functions

1. **Built-In Functions**: PHP provides many pre-defined functions, like `strlen()`, `array_push()`, etc.
2. **User-Defined Functions**: Functions created by the programmer for specific tasks.

---

## Real-World Example: Calculating Discounts

Let’s create a function to calculate the discount on a product's price.

```php
function calculateDiscount($price, $discountRate) {
    $discount = $price * ($discountRate / 100);
    $finalPrice = $price - $discount;
    return $finalPrice;
}

echo "Final Price: " . calculateDiscount(1000, 10); // Output: Final Price: 900
```

---

## Key Points

- **Functions** simplify repetitive tasks and promote clean coding.
- **Parameters** let you pass dynamic data to functions.
- **Return Values** enable functions to send results back to the caller.

---

## Practice and Summary

Practice defining functions, passing parameters, and returning values. Experiment with real-world examples like calculating tax, generating personalized greetings, or finding the area of a rectangle.