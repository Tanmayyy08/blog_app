<?php 
include 'includes/db.php'; 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "<p>Post not found.</p>";
        exit();
    }
} else {
    echo "<p>No post specified.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2><?php echo $row['title']; ?></h2>
    <img src="<?php echo $row['image_url']; ?>" class="img-fluid" alt="<?php echo $row['title']; ?>">
    <p><?php echo $row['content']; ?></p>

    <!-- Action Buttons -->
    <div class="mt-4">
        <a href="index.php" class="btn btn-secondary">Back to Blog</a>
        <a href="edit_post.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit Post</a>
        <form action="delete_post.php" method="post" style="display:inline-block;">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?');">Delete Post</button>
        </form>
    </div>
</div>

</body>
</html>
