# Lecture 02 - Variables and Print Statement

In this lecture, we will cover various methods for handling variables and print statements in PHP.

As we saw in the previous lecture, where we discussed an introduction to PHP and the installation process, we will now delve into the concepts of variables and print statements.

A variable is a storage container that holds a value. In PHP, we use the dollar sign (`$`) to declare a variable, followed by the variable name:
```php
$name = "Uzair";
```

A print statement is used to output variables and other strings. In PHP, we use the `echo` statement for printing. To print the value of the `$name` variable, you would write:
```php
echo $name;
```

If you want to print a string along with a variable, you will use concatenation. Concatenation is used to combine two data types, and in PHP, we use the dot (`.`) operator for this purpose:
```php
echo "Name: " . $name;
```

In PHP, it is essential to terminate each statement with a semicolon (`;`). This semicolon acts as a statement terminator. Without it, your program will not run correctly.

PHP statements are not case-sensitive, but variables are. For example, using `EcHo $name;` or `ECHO $name;` will not produce an error because the `echo` statement is case-insensitive. However, if you use `echo $NaMe;` or `echo $NAME;`, you will encounter an error saying "Undefined variable $NaMe" or "Undefined variable $NAME" because variables in PHP are case-sensitive.

Additionally, if the value of a variable is a string, you can use either double quotes (`"`) or single quotes (`'`) to define the string.

In upcoming lectures, we will cover data types and move on to conditional statements.

For more in-depth PHP tutorials, visit [Javatpoint](https://www.javatpoint.com/php-tutorial).