<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Option A: Save to database
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!'); window.location.href = 'contact.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Option B: Send via email (replace with your actual email)
    // $to = "your-email@example.com";
    // $subject = "New Contact Form Submission";
    // $headers = "From: $email";
    // mail($to, $subject, $message, $headers);

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
