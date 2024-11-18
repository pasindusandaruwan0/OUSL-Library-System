<?php
// Start the session to access the session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="register.css">
    <style>
        /* Error message styling */
.error-message {
    color: red;
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
}

/* Success message styling */
.success-message {
    color: green;
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
}

    </style>
</head>
<body>
    <div class="registration-Form">
        <h1>Registration Form</h1>

        <!-- Display Error or Success Message -->
        <?php if (isset($_SESSION['error'])): ?>
            <div class="error-message">
                <?php
                echo $_SESSION['error']; // Show the error message
                unset($_SESSION['error']); // Unset the session variable to prevent showing it again
                ?>
            </div>
        <?php elseif (isset($_SESSION['success'])): ?>
            <div class="success-message">
                <?php
                echo $_SESSION['success']; // Show the success message
                unset($_SESSION['success']); // Unset the session variable after displaying it
                ?>
            </div>
        <?php endif; ?>

        <form action="register_save.php" method="post" required>
            <p>First Name :</p>
            <input type="text" name="fullname" placeholder="First Name" required>

            <p>Last Name :</p>
            <input type="text" name="lastname" placeholder="Last Name" required>

            <p>Registration Number :</p>
            <input type="number" name="registration_number" placeholder="Registration Number" required>

            <p>Email :</p>
            <input type="email" name="email" placeholder="Email" required>

            <p>Password :</p>
            <input type="password" name="password" placeholder="Password" required>

            <button name="sub" type="submit">Register</button>
        </form>
    </div>
</body>
</html>
