# **Lecture 07: String Manipulation**

### **Overview**
In this lecture, we will explore **string manipulation** in PHP, which is a key part of handling text-based data. We will learn how to use PHP's built-in string functions to manipulate, process, and format strings in various ways. Whether you are working with user input, displaying content on a webpage, or manipulating data, string manipulation is essential.

---

### **Topics Covered**
- String Declaration
- String Concatenation
- Finding String Length
- Replacing Substrings
- Finding Position of a Substring
- Case Conversion
- Trimming Whitespace
- Extracting Substrings
- Splitting Strings

---

### **1. String Declaration**

In PHP, strings can be declared using **single quotes (' ')** or **double quotes (" ")**.

- **Single Quotes**: Strings inside single quotes are treated literally, meaning special characters (like `\n`) will not be interpreted.
- **Double Quotes**: Strings inside double quotes can interpret special characters, such as new lines (`\n`) and variables.

**Example:**

```php
$string1 = 'Hello, World!';  // Single quotes
$string2 = "Welcome to PHP!"; // Double quotes
```

---

### **2. String Concatenation**

You can combine two or more strings using the **dot (.) operator**. This is useful when you want to create a longer string by joining smaller ones.

**Example:**

```php
$string1 = 'Hello';
$string2 = 'World';
$greeting = $string1 . ' ' . $string2;  // Concatenating strings
echo $greeting;  // Output: Hello World
```

---

### **3. Finding String Length**

The `strlen()` function is used to find the **length** of a string, i.e., the number of characters it contains (including spaces and special characters).

**Example:**

```php
$string = 'Hello, World!';
$length = strlen($string);
echo "Length of string: " . $length;  // Output: Length of string: 13
```

---

### **4. Replacing Substrings**

The `str_replace()` function allows you to **replace** a part of a string with another string.

**Example:**

```php
$string = 'Hello, World!';
$newString = str_replace('World', 'PHP', $string);  // Replaces 'World' with 'PHP'
echo $newString;  // Output: Hello, PHP!
```

In the real world, this function can be useful for replacing certain keywords or updating content on a webpage.

---

### **5. Finding the Position of a Substring**

The `strpos()` function is used to find the **position** of a substring within a string. If the substring is found, it returns the **index** of its first occurrence; otherwise, it returns `false`.

**Example:**

```php
$string = 'Hello, World!';
$position = strpos($string, 'World');
if ($position !== false) {
    echo "Found 'World' at position: " . $position;  // Output: Found 'World' at position: 7
}
```

---

### **6. Case Conversion**

You can convert the case of a string to **lowercase** or **uppercase** using `strtolower()` and `strtoupper()` functions, respectively.

**Example:**

```php
$string = 'Hello, World!';
echo strtolower($string);  // Output: hello, world!
echo strtoupper($string);  // Output: HELLO, WORLD!
```

Case conversion is useful when you need to ensure consistent formatting, such as when handling user input or comparing text.

---

### **7. Trimming Whitespace**

The `trim()` function removes any unnecessary whitespace from the **beginning and end** of a string. This is useful when handling user input, as extra spaces can cause errors when saving data.

**Example:**

```php
$string = "  Hello, PHP!  ";
$trimmedString = trim($string);
echo $trimmedString;  // Output: Hello, PHP!
```

---

### **8. Extracting Substrings**

The `substr()` function allows you to **extract a portion** of a string, starting at a specified position and optionally for a specified length.

**Example:**

```php
$string = 'Hello, World!';
$substring = substr($string, 7, 5);  // Extracts "World"
echo $substring;  // Output: World
```

This function is useful for extracting portions of strings, such as retrieving a specific part of a URL or a text field.

---

### **9. Splitting Strings**

The `explode()` function splits a string into an **array** based on a specified delimiter. It is often used when you need to break down a string into smaller parts, such as a CSV or a sentence into words.

**Example:**

```php
$string = 'Hello, World!';
$array = explode(' ', $string);  // Splits the string by spaces
print_r($array);  // Output: Array ( [0] => Hello, [1] => World! )
```

---

### **Practice**

Try using these functions with your own strings. Modify the examples and experiment with different operations to better understand how each function works. The more you practice, the more comfortable you’ll become with string manipulation in PHP.

---

### **Conclusion**

String manipulation is a powerful and essential skill for PHP developers. By understanding and practicing these functions, you can handle user input, format data dynamically, and create more robust applications. The techniques learned in this lecture will serve as the foundation for many PHP-based tasks, from processing text to building dynamic content.

In the next lecture, we will dive into **File Handling**—learning how to read from and write to files, as well as handling file uploads. This is a crucial topic for managing files in PHP-based applications.