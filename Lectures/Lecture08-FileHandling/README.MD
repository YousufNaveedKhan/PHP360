# **Lecture 08: File Handling**

### **Overview**
In this lecture, we will learn how to handle files in PHP, a crucial aspect of web development. File handling enables you to read data from files, write data to files, and manage file uploads. These skills are especially useful when creating features like user-generated content uploads, logs, or configuration files.

---

### **Topics Covered**
1. Reading from Files
2. Writing to Files
3. Appending Data to Files
4. Checking if a File Exists
5. Deleting Files
6. Handling File Uploads

--- 

### **Directory Structure**

```
Lecture08_FileHandling/
│
├── readFile.php         // Code for reading files
├── writeFile.php        // Code for writing to files
├── appendFile.php       // Code for appending data to files
├── fileExists.php       // Code for checking if a file exists
├── deleteFile.php       // Code for deleting files
├── fileUpload.php       // Backend code for handling file uploads
├── fileUploadForm.html  // Frontend form for uploading files
└── uploads/             // Directory where uploaded files will be saved
```

---

### **File Descriptions**

1. **readFile.php**
   - **Purpose**: This file contains code to read the content of a file using PHP. It checks if the file exists and then reads and displays its contents.

2. **writeFile.php**
   - **Purpose**: This file demonstrates how to write content to a file in PHP. It overwrites the existing content of the file with new data.

3. **appendFile.php**
   - **Purpose**: This file shows how to append data to an existing file without overwriting the current content. It uses the `FILE_APPEND` flag.

4. **fileExists.php**
   - **Purpose**: This file checks if a file exists on the server before performing operations like reading or writing. It's a simple check using `file_exists()`.

5. **deleteFile.php**
   - **Purpose**: This file handles the deletion of a file from the server. It checks if the file exists and then deletes it using the `unlink()` function.

6. **fileUpload.php**
   - **Purpose**: This file contains the PHP backend logic for handling file uploads. It moves the uploaded file to a specified directory (`uploads/`) after checking for errors.

7. **fileUploadForm.html**
   - **Purpose**: This is the frontend HTML form that allows users to select a file and submit it for upload. The form uses the `enctype="multipart/form-data"` attribute to handle file uploads.

8. **uploads/**
   - **Purpose**: This is the directory where uploaded files are saved. It is important to ensure the directory has proper permissions for storing files securely.

---

### **1. Reading from Files**

To **read content** from a file, you can use the `fopen()` and `fread()` functions or the simpler `file_get_contents()` function. 

- **Real-World Example**: Displaying the content of a log file.

**Example:**

```php
$file = 'example.txt';
if (file_exists($file)) {
    $content = file_get_contents($file);
    echo "File Content: \n" . $content;
} else {
    echo "File does not exist.";
}
```

---

### **2. Writing to Files**

You can use `fopen()` with the mode `w` (write) or the `file_put_contents()` function to **write content** to a file. Writing to a file will overwrite its existing content.

- **Real-World Example**: Saving user-generated feedback to a text file.

**Example:**

```php
$file = 'example.txt';
$data = "This is new content written to the file.\n";
file_put_contents($file, $data);
echo "Data written successfully!";
```

---

### **3. Appending Data to Files**

To **append** data to an existing file without overwriting, use the `a` (append) mode with `fopen()` or `file_put_contents()` with the `FILE_APPEND` flag.

- **Real-World Example**: Adding new entries to a log file.

**Example:**

```php
$file = 'example.txt';
$data = "Appended content.\n";
file_put_contents($file, $data, FILE_APPEND);
echo "Data appended successfully!";
```

---

### **4. Checking if a File Exists**

Before performing file operations, it's good practice to check if the file exists using the `file_exists()` function.

**Example:**

```php
$file = 'example.txt';
if (file_exists($file)) {
    echo "The file exists.";
} else {
    echo "The file does not exist.";
}
```

---

### **5. Deleting Files**

You can use the `unlink()` function to **delete a file** from the server.

- **Real-World Example**: Removing outdated user files.

**Example:**

```php
$file = 'example.txt';
if (file_exists($file)) {
    unlink($file);
    echo "File deleted successfully!";
} else {
    echo "File does not exist.";
}
```

---

### **6. Handling File Uploads**

Uploading files is a common feature in web applications. To handle file uploads in PHP:
1. Use an HTML form with the `enctype="multipart/form-data"` attribute.
2. Use the `$_FILES` superglobal to access uploaded files.

- **Real-World Example**: Allowing users to upload profile pictures.

**HTML Form:**

```html
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select a file to upload:
    <input type="file" name="uploadedFile">
    <input type="submit" value="Upload">
</form>
```

**PHP Handling (upload.php):**

```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["uploadedFile"]["name"]);

    if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetFile)) {
        echo "The file " . basename($_FILES["uploadedFile"]["name"]) . " has been uploaded.";
    } else {
        echo "There was an error uploading your file.";
    }
}
```

---

### **Best Practices**
- Always validate file types and sizes during uploads.
- Use directories with proper permissions to store files securely.
- Avoid overwriting files with the same name by generating unique file names.

---

### **Conclusion**

File handling is a fundamental skill in PHP that opens up many possibilities for dynamic web applications. By understanding file operations and upload handling, you can enable features like content management, user file uploads, and much more. Experiment with these techniques to master file handling!

In the next lecture, we will cover **Forms and User Input**, focusing on handling HTML forms, validating user input, and securing data. This will be an essential skill for building interactive and secure applications.
