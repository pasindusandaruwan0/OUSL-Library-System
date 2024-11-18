<?php
// Start the session at the beginning
session_start();

// Include the database connection
include('conn.php');

// Check if the form is submitted
if (isset($_POST['sub'])) {
    // Sanitize and retrieve the form data
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $registration_number = mysqli_real_escape_string($conn, $_POST['registration_number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role="user";
    
    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email or registration number already exists
    $checkQuery = "SELECT * FROM users WHERE email = '$email' OR registration_number = '$registration_number'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // If user exists with the same email or registration number
        $_SESSION['error'] = "Email or Registration Number already exists. Please try again.";
        header("Location: register.php");
        exit();
    }

    // Prepare the SQL query to insert data into the database
    $sql = "INSERT INTO users (full_name, last_name, registration_number, email, password,role)
            VALUES ('$fullname', '$lastname', '$registration_number', '$email', '$hashed_password','$role')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // If registration is successful
        $_SESSION['success'] = "Registration successful! You can now <a href='login.php'>login</a>.";
        header("Location: register.php");
        exit();
    } else {
        // If there is a database error
        $_SESSION['error'] = "There was an error with the database. Please try again later.";
        header("Location: register.php");
        exit();
    }

    // Close the database connection
    $conn->close();
}
?>
