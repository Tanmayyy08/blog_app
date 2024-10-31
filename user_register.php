<?php
session_start();
include 'includes/db.php'; // Ensure this file connects to your database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get username and hashed password from form submission
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Check if the username already exists
    if ($stmt = $conn->prepare("SELECT * FROM users WHERE username = ?")) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            // Insert the new user
            if ($stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)")) {
                $stmt->bind_param("ss", $username, $password);
                
                // Execute and check for successful insertion
                if ($stmt->execute()) {
                    echo "<script>alert('User registered successfully!'); window.location.href = 'user_login.php';</script>";
                } else {
                    echo "<script>alert('Error registering user: " . $stmt->error . "');</script>";
                }
            } else {
                die("Prepare failed for INSERT: " . $conn->error); // Output error
            }
        } else {
            echo "<script>alert('Username already taken. Please choose a different one.');</script>";
        }

        // Close statement
        $stmt->close();
    } else {
        die("Prepare failed for SELECT: " . $conn->error); // Output error
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>User Registration</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
