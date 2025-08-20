# Login Database System

This project is a simple PHP application that handles user authentication by storing and managing login information in a database. It provides a login form for users to enter their credentials and processes the login requests.

## Project Structure

```
login-db-system
├── public
│   ├── login.html        # HTML form for user login
│   └── index.php         # Entry point for the application
├── src
│   ├── config
│   │   └── database.php  # Database connection settings
│   ├── controllers
│   │   └── AuthController.php # Handles user authentication
│   ├── models
│   │   └── User.php      # Represents the user entity
│   └── helpers
│       └── functions.php  # Helper functions for the application
├── composer.json          # Composer configuration file
└── README.md              # Project documentation
```

## Setup Instructions

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   cd login-db-system
   ```

2. **Install dependencies**:
   Make sure you have Composer installed, then run:
   ```bash
   composer install
   ```

3. **Configure the database**:
   Update the `src/config/database.php` file with your database connection settings.

4. **Run the application**:
   You can use a local server like XAMPP or MAMP to run the application. Place the project in the server's root directory and access it via your web browser.

## Usage Guidelines

- Open `public/login.html` in your web browser to access the login form.
- Enter your email/phone number and password to log in.
- The application will handle authentication and redirect you accordingly.

## Contributing

Feel free to submit issues or pull requests if you have suggestions or improvements for the project.