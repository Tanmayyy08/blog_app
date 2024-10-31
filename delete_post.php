<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM posts WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Post deleted successfully!'); window.location.href = 'index.php';</script>";
    } else {
        echo "Error deleting post: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>

