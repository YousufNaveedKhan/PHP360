# User Authentication System

This project is a **User Authentication System** built with **PHP** and **MySQL**. The system allows users to register, log in, and log out securely. It includes features such as user login, registration, and session management. This project is a great example of implementing a secure authentication system using PHP and MySQL.

## Project Features

- **User Registration**: Users can register with an email and password. The password is hashed for security.
- **User Login**: Registered users can log in using their credentials (email and password). Login sessions are created to keep users authenticated.
- **User Dashboard**: After logging in, users are redirected to a dashboard where they can view their information.
- **Logout Functionality**: Users can log out from the system, terminating their session and redirecting them to the login page.

## Directory Structure

```
UserAuthenticationSystem/
├── dashboard.php             // User dashboard, displays user info after login
├── index.php                 // Home page, redirects to login page if not logged in
├── login.php                 // Login page for users to authenticate
├── register.php              // Registration page for new users
├── README.md                 // Documentation for the project
└── assets/                   // Folder for assets
    ├── css/                  // Folder for stylesheets
    │   └── style.css         // Main stylesheet
    ├── database/             // Folder for database backup
    │   └── backup.sql        // SQL file for database structure and data
    ├── php/                  // Folder for PHP backend files
    │   ├── authFunctions.php // File for handling authentication functions
    │   └── logout.php        // File to handle logout functionality
    └── config/               // Folder for configuration files
        └── connection.php    // Database connection configuration file
```

## Setup Instructions

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   ```

2. **Configure the database**:
   - Create a MySQL database named `auth_system`.
   - Import the `assets/database/backup.sql` file into the database.
   - Update the `assets/php/configs/connection.php` file with your database connection details.

3. **Access the application**:
   - Open `login.php` in your browser to start the login process.
   - Register a new account or use an existing one to log in.

## Technologies Used

- **PHP**: For server-side scripting and handling user authentication logic.
- **MySQL**: For storing user data (email and hashed passwords) and managing user sessions.
- **HTML/CSS**: For the layout and styling of the application.
- **JavaScript**: For interactive functionality and form validation.

## Key Features and Practices Demonstrated

This application demonstrates the following techniques:

- **Session Management**: Using PHP sessions to manage user login and authentication status.
- **Password Hashing**: Using `password_hash()` and `password_verify()` functions for secure password storage and verification.
- **Prepared Statements**: Preventing SQL injection attacks by using prepared statements to interact with the database.
- **Form Handling**: Managing user input through forms for login and registration.
- **Redirection**: Redirecting users to different pages based on their authentication status.

## Future Improvements

While this is a basic authentication system, there are several ways to enhance its functionality:

- **User Roles**: Implement different roles (e.g., admin, user) with varying access levels and permissions.
- **Password Reset**: Add functionality for users to reset their passwords via email.
- **Email Verification**: Send an email verification link after registration to ensure the user’s email address is valid.
- **Two-Factor Authentication**: Implement two-factor authentication (2FA) for enhanced security.
- **Rate Limiting**: Add rate limiting to protect against brute-force login attacks.
- **Improved UI/UX**: Enhance the design and user experience of the login, registration, and dashboard pages.

## Conclusion

The **User Authentication System** provides a solid foundation for building secure user login systems. It can be further extended with additional features like user roles, password recovery, and more. This project serves as a great learning resource for PHP and MySQL beginners, demonstrating essential concepts in web application security.