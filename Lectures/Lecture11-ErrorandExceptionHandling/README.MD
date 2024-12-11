### **Lecture 11: Error and Exception Handling**

#### **Overview**  
This lecture delves into **Error and Exception Handling** in PHP. Proper error management ensures your application is robust, secure, and user-friendly, even in the face of unexpected issues. By mastering these concepts, you can handle runtime errors effectively and provide meaningful feedback to users while keeping your code maintainable.

---

#### **Topics Covered**  
1. Types of Errors in PHP (Parse, Fatal, Warning, Notice)  
2. Using `error_reporting()` to Control Error Visibility  
3. Custom Error Handling with `set_error_handler()`  
4. Understanding Exceptions and the `try-catch` Block  
5. Throwing Custom Exceptions  
6. Logging Errors for Debugging  

---

### **Directory Structure**  

```  
Lecture11_ErrorAndExceptionHandling/  
│  
├── errorBasics.php           // Demonstrates basic error handling  
├── customErrorHandler.php    // Implements a custom error handler  
├── exceptionHandling.php     // Explains try-catch blocks  
├── customException.php       // Demonstrates custom exceptions  
├── errorLogging.php          // Example of error logging in PHP  
├── errorConcepts.md          // Detailed explanation of error and exception handling  
```  

---

### **Detailed Explanation of Topics**

#### **1. Types of Errors in PHP**  
Errors in PHP are broadly categorized into:  
- **Parse Errors**: Structural issues in code (e.g., missing a semicolon).  
- **Fatal Errors**: Critical issues that stop script execution (e.g., calling an undefined function).  
- **Warnings**: Non-fatal issues; the script continues but needs attention.  
- **Notices**: Minor issues, like accessing undefined variables.

**Example:**  
```php  
// Trigger a notice  
echo $undefinedVariable;  

// Trigger a warning  
include('nonexistentFile.php');  

// Trigger a fatal error  
nonExistentFunction();  
```  

---

#### **2. Using `error_reporting()` to Control Error Visibility**  
PHP allows developers to control which error levels are displayed using `error_reporting()`.

**Example:**  
```php  
// Show all errors except notices  
error_reporting(E_ALL & ~E_NOTICE);  

// Trigger a notice (will not display)  
echo $undefinedVariable;  

// Trigger a warning (will display)  
include('nonexistentFile.php');  
```  

---

#### **3. Custom Error Handling with `set_error_handler()`**  
Customize error handling logic by defining your own handler function.  

**Example:**  
```php  
function customErrorHandler($errno, $errstr) {  
    echo "Custom Error: [$errno] $errstr";  
}  

set_error_handler("customErrorHandler");  

// Trigger an error  
echo 10 / 0;  
```  

---

#### **4. Understanding Exceptions and the `try-catch` Block**  
Exceptions provide a structured way to handle runtime errors.  

**Example:**  
```php  
try {  
    $file = fopen("nonexistentFile.txt", "r");  
    if (!$file) {  
        throw new Exception("File not found.");  
    }  
} catch (Exception $e) {  
    echo "Caught Exception: " . $e->getMessage();  
}  
```  

---

#### **5. Throwing Custom Exceptions**  
You can define your own exceptions for more specific error handling.  

**Example:**  
```php  
class CustomException extends Exception {}  

try {  
    $value = -1;  
    if ($value < 0) {  
        throw new CustomException("Value cannot be negative.");  
    }  
} catch (CustomException $e) {  
    echo "Caught Custom Exception: " . $e->getMessage();  
}  
```  

---

#### **6. Logging Errors for Debugging**  
Error logging is critical for debugging and monitoring application issues. Use `error_log()` to log custom error messages.  

**Example:**  
```php  
error_log("A critical error occurred in the script.", 3, "errors.log");  
```  

---

### **Best Practices**  
- Use `error_reporting()` wisely to manage error visibility.  
- Implement custom error handlers for better control over application-specific scenarios.  
- Use exceptions for structured error handling.  
- Always log errors instead of displaying them in production environments.  

---

### **Conclusion**  
This lecture equips you with the skills to effectively manage errors and exceptions, ensuring your applications are robust and user-friendly. By mastering these techniques, you can debug efficiently, enhance user experience, and build maintainable applications.

In the next lecture, we will explore **PHP and MySQL Integration**, where you'll learn how to connect to databases and perform CRUD operations (Create, Read, Update, Delete) to manage data seamlessly.