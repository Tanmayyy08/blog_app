<?php
session_start();
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Check if the username already exists
    $sql = "SELECT * FROM admins WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        // Insert the new admin
        $sql = "INSERT INTO admins (username, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Admin registered successfully!'); window.location.href = 'admin_login.php';</script>";
        } else {
            echo "<script>alert('Error registering admin. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Username already taken. Please choose a different one.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Admin Registration</h2>
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

</body>
</html>
