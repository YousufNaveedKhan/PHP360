# Lecture01 - Introduction to PHP

In this lecture, we will cover various concepts related to PHP, including what PHP is, its benefits, how to install it, and how to execute PHP code.

## What is PHP?

PHP stands for Hypertext Preprocessor. It is an open-source, interpreted, object-oriented, server-side scripting language. Let's break down these terms:

- **Open Source**: PHP is free to use, and its source code is available for anyone to view and modify. This means there are no costs involved, and the software is freely accessible.
- **Object-Oriented Programming (OOP)**: PHP supports object-oriented programming, which organizes software design around data, or objects, rather than functions and logic. We will explore OOP concepts in more detail in future lectures.
- **Server-Side Scripting**: PHP scripts are executed on the server, which means the server performs tasks such as generating dynamic content, handling user requests, and accessing databases. Server-side scripting is responsible for customizing websites and creating responses to user actions. In the server-side architecture, you'll work with servers, databases, and APIs.
- **Client-Side Scripting**: In contrast, client-side scripting is executed on the user's browser without server intervention. This includes tasks like form validation and content updates based on user input. Web development typically involves a combination of client, server, and database components.
- **Interpreted Language**: PHP is an interpreted language, meaning that the PHP code is executed directly by the interpreter without needing to be compiled into machine code first. The interpreter processes the code line by line.

For a visual explanation of the interpreted language concept, see the diagram below:

![Interpreted](https://qph.cf2.quoracdn.net/main-qimg-75f8b3feebd0bae665b8fcdb5ff90365.webp)

You can learn more about the Zend Engine here: [Zend Engine Documentation](http://php.adamharvey.name/manual/it/internals2.opcodes.php)

## Key Points

- PHP stands for Hypertext Preprocessor.
- PHP is an interpreted language, meaning it does not require compilation.
- PHP is generally faster than other scripting languages like ASP and JSP.
- PHP is a server-side scripting language used to manage dynamic website content.
- PHP can be embedded within HTML.
- PHP supports object-oriented programming.
- PHP is open-source.
- PHP is known for its simplicity and ease of learning.

## Installation

To get started with PHP, it is recommended to install an AMP (Apache, MySQL, PHP) software stack. AMP stacks are available for different operating systems, including:

- **WAMP**: For Windows
- **LAMP**: For Linux
- **MAMP**: For Mac
- **SAMP**: For Solaris
- **FAMP**: For FreeBSD
- **XAMPP**: Cross-platform (includes additional tools like FileZilla, OpenSSL, Webalizer, and Mercury Mail)

For beginners, **XAMPP** is a popular choice because it is cross-platform and includes various useful components.

## Running PHP Code

After installing XAMPP, follow these steps to run PHP code:

1. Navigate to the directory where XAMPP is installed. By default, this is usually `C:\xampp` on Windows.
2. Go to the `htdocs` folder within the XAMPP installation directory.
3. Create a new folder within `htdocs` to store your PHP files. Save your PHP files with the `.php` extension in this folder.
4. Open the XAMPP Control Panel and start the Apache and MySQL services.
5. Open a web browser and access your PHP files by navigating to `http://localhost/foldername`, replacing `foldername` with the name of the folder you created in `htdocs`.

In this program, we will simply use the `echo` statement to display "Hello World!". `echo` is used to output text in PHP. In the next lecture, we will cover variables and more details on printing.

For more in-depth PHP tutorials, visit [Javatpoint](https://www.javatpoint.com/php-tutorial).