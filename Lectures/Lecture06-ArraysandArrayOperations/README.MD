# Lecture 06: Arrays and Array Operations

In this lecture, we will explore arrays in PHP, which allow you to store multiple values in a single variable. We'll cover the three main types of arrays: **indexed arrays**, **associative arrays**, and **multidimensional arrays**. Additionally, we'll dive into various array operations, such as accessing, modifying, and looping through arrays, as well as using array methods to manipulate data efficiently.

## What are Arrays?

Arrays are a fundamental data structure in programming that allows you to store multiple values in a single variable. Instead of creating multiple variables for different values, you can use an array to group related data together.

### Types of Arrays in PHP

1. **Indexed Arrays**  
   Indexed arrays are arrays where the elements are indexed with numeric values, starting from 0.

   **Example:**

   ```php
   $fruits = array("Apple", "Banana", "Orange");
   echo $fruits[0]; // Output: Apple
   ```

   Here, the array `$fruits` contains three elements, and you can access each element using its index, such as `$fruits[0]` for "Apple".

2. **Associative Arrays**  
   In associative arrays, each element is associated with a unique key, usually a string, which is used to access the value.

   **Example:**

   ```php
   $person = array("name" => "Yousuf Naveed", "age" => 25, "city" => "Karachi");
   echo $person["name"]; // Output: Yousuf Naveed
   ```

   In this example, `"name"`, `"age"`, and `"city"` are keys, and their corresponding values can be accessed by their keys.

3. **Multidimensional Arrays**  
   Multidimensional arrays are arrays that contain other arrays as elements. This allows you to create more complex data structures, like tables or matrices.

   **Example:**

   ```php
   $students = array(
       array("name" => "Yousuf Naveed", "age" => 25, "city" => "Karachi"),
       array("name" => "Muneeb Hassan", "age" => 22, "city" => "Karachi"),
   );
   echo $students[0]["name"]; // Output: Yousuf Naveed
   ```

   In this example, `$students` is a multidimensional array containing two sub-arrays, each representing a student's details.

## Array Methods in PHP

PHP provides a variety of built-in functions to manipulate arrays. Here are some useful array methods:

1. **`count()`** - Get the number of elements in an array.
   
   ```php
   $fruits = array("Apple", "Banana", "Orange");
   echo count($fruits); // Output: 3
   ```

2. **`array_push()`** - Add one or more elements to the end of an array.

   ```php
   $fruits = array("Apple", "Banana");
   array_push($fruits, "Orange");
   print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange )
   ```

3. **`array_pop()`** - Remove the last element from an array.

   ```php
   $fruits = array("Apple", "Banana", "Orange");
   array_pop($fruits);
   print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana )
   ```

4. **`array_shift()`** - Remove the first element from an array.

   ```php
   $fruits = array("Apple", "Banana", "Orange");
   array_shift($fruits);
   print_r($fruits); // Output: Array ( [0] => Banana [1] => Orange )
   ```

5. **`array_unshift()`** - Add one or more elements to the beginning of an array.

   ```php
   $fruits = array("Banana", "Orange");
   array_unshift($fruits, "Apple");
   print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange )
   ```

6. **`in_array()`** - Check if a value exists in an array.

   ```php
   $fruits = array("Apple", "Banana", "Orange");
   if (in_array("Banana", $fruits)) {
       echo "Banana is in the array."; // Output: Banana is in the array.
   }
   ```

7. **`array_merge()`** - Merge two or more arrays.

   ```php
   $fruits1 = array("Apple", "Banana");
   $fruits2 = array("Orange", "Pineapple");
   $allFruits = array_merge($fruits1, $fruits2);
   print_r($allFruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange [3] => Pineapple )
   ```

8. **`sort()`** - Sort an array in ascending order.

   ```php
   $fruits = array("Banana", "Apple", "Orange");
   sort($fruits);
   print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange )
   ```

## Real-World Example

Let's say we are building an online store in Karachi, and we want to store product details using arrays. Here's how we can organize product data:

```php
$products = array(
    array("name" => "Glasses", "price" => 500, "category" => "Eyewear"),
    array("name" => "Sunglasses", "price" => 1500, "category" => "Eyewear"),
    array("name" => "Contact Lenses", "price" => 1000, "category" => "Eyewear")
);

// Access product name of the second product
echo $products[1]["name"]; // Output: Sunglasses
```

## Key Points

- **Indexed Arrays** use numeric indices.
- **Associative Arrays** use named keys for access.
- **Multidimensional Arrays** are arrays within arrays, allowing you to store complex data structures.
- PHP provides several useful array functions like `count()`, `array_push()`, `array_pop()`, `in_array()`, and more for managing arrays.
  
## Conclusion

Arrays are a powerful feature in PHP, and understanding how to use them effectively is essential for building flexible and dynamic applications. By mastering arrays and their operations, you can work with complex datasets efficiently and improve your programming skills.