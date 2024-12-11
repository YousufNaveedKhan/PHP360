# **Lecture 09: Forms and User Input**

### **Overview**
In this lecture, we will explore how to handle HTML forms in PHP, validate user input effectively, and secure data to prevent malicious attacks. These concepts form the backbone of web application development, enabling dynamic and user-driven interactions.

---

### **Topics Covered**
1. HTML Form Basics
2. Handling Form Data with PHP
3. Validating User Input
4. Securing Data to Prevent Attacks
5. Real-World Examples and Best Practices

---

### **Directory Structure**

```
Lecture09_FormsAndUserInput/
│
├── basicForm.html        // A simple HTML form
├── formHandler.php       // Handles form submission and validation
├── inputValidation.php   // Validates user input
├── secureForm.php        // Demonstrates secure form handling
├── sanitizedForm.php     // Shows how to sanitize user input
└── README.md             // Explanation of the lecture with examples
```

---

### **File Descriptions**

1. **basicForm.html**
   - Demonstrates how to create a simple HTML form with various input types like text, email, password, and a submit button.

2. **formHandler.php**
   - Handles data sent from an HTML form using `$_POST` and displays the submitted data.

3. **inputValidation.php**
   - Validates user inputs, such as ensuring mandatory fields are filled and specific input types (e.g., email) are correct.

4. **secureForm.php**
   - Demonstrates secure form handling practices, including using `htmlspecialchars()` to prevent XSS attacks.

5. **sanitizedForm.php**
   - Shows how to sanitize user input using PHP functions like `filter_var()` to prevent SQL injection or other attacks.

---

### **Key Concepts and Examples**

#### **1. HTML Form Basics**
HTML forms allow users to input data that can be sent to the server for processing.

**Example: basicForm.html**
```html
<form action="formHandler.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <button type="submit">Submit</button>
</form>
```

---

#### **2. Handling Form Data with PHP**
Use the `$_POST` or `$_GET` superglobals to handle form data submitted to the server.

**Example: formHandler.php**
```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Password: $password";
}
```

---

#### **3. Validating User Input**
Validation ensures the data provided by the user meets the required criteria.

**Example: inputValidation.php**
```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if (empty($name)) {
        echo "Name is required.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.<br>";
    } else {
        echo "Validation passed!<br>";
    }
}
```

---

#### **4. Securing Data to Prevent Attacks**
Prevent XSS attacks by escaping special characters.

**Example: secureForm.php**
```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "Name: $name<br>";
    echo "Email: $email";
}
```

---

#### **5. Sanitizing User Input**
Use PHP functions to sanitize input and prevent SQL injection.

**Example: sanitizedForm.php**
```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Sanitized Email: $email<br>";
    } else {
        echo "Invalid email after sanitization.<br>";
    }
}
```

---

### **Best Practices**
- Always validate and sanitize user input.
- Use HTTPS to encrypt form data.
- Implement CSRF protection for secure form handling.
- Avoid storing plain text passwords—use hashing algorithms like `password_hash()`.

---

Here’s the updated conclusion incorporating your suggestions:  

---

### **Conclusion**  
Understanding forms and user input handling is crucial for building robust and interactive web applications. By validating and securing input, you ensure a safe and efficient user experience.  

With this lecture, we conclude the **Intermediate PHP** section, which included five lectures focusing on practical and essential web development topics:  

1. **Lecture 05: Functions**  
2. **Lecture 06: Arrays and Array Operations**  
3. **Lecture 07: String Manipulation**  
4. **Lecture 08: File Handling**  
5. **Lecture 09: Forms and User Input**  

Together with the **Basic PHP** section, where we covered four foundational lectures, we now have a total of **nine lectures** completed in this course.  

Moving forward, we enter the **Advanced PHP** section, starting with **Lecture 10: Object-Oriented Programming (OOP)**. This section will consist of five lectures covering advanced topics such as:  
- Classes and Objects  
- Inheritance  
- Polymorphism  
- Interfaces  

These topics will take your PHP knowledge to the next level, enabling you to design and develop more scalable and maintainable applications.  

Stay tuned as we dive into the world of OOP in the next lecture!
