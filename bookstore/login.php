<?php
// Start session to store error/success messages
session_start();

// Include the database connection file
include('conn.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Query to check if the user exists with the provided username
    $sql = "SELECT * FROM users WHERE email = '$username' LIMIT 1";
    $result = $conn->query($sql);
    
    // If a user is found
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Store user info in session and redirect to dashboard
            $_SESSION['email'] = $user['email'];
            $_SESSION['full_name'] = $user['full_name'];
            // header("Location: user/dash.php"); // Redirect to dashboard
            exit();
        } else {
            // Password is incorrect
            $_SESSION['error'] = 'Invalid password. Please try again.';
        }
    } else {
        // User does not exist
        $_SESSION['error'] = 'No user found with that username. Please check again.';
    }
    
    // Redirect to login page with error message
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">    <!-- Custom CSS (Optional) -->
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .login-container h1 {
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            width: 100%;
        }

        .text-center a {
            text-decoration: none;
        }

        .form-text {
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="login-container">
            <h1>Ousl Library</h1>
            <h2>Login</h2>
            
            <!-- Display Error Message if Login Fails -->
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']); // Clear the error message after displaying
                    ?>
                </div>
            <?php endif; ?>

            <form action="checklogin.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username (Email)</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <!-- <div class="form-text">
                        Your password must be at least 8 characters long.
                    </div> -->
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
            </form>
            <div class="text-center mt-3">
                <a href="register.php">Don't have an account? Register</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (Optional for some components like dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
