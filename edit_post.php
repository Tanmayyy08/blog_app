<?php
include 'includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the post from the database
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $post = $result->fetch_assoc();
    } else {
        echo "<p>Post not found.</p>";
        exit();
    }
} else {
    echo "<p>No post specified.</p>";
    exit();
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $image_url = $_POST['image_url'];
    $content = $_POST['content'];

    $sql = "UPDATE posts SET title = '$title', image_url = '$image_url', content = '$content' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Post updated successfully!'); window.location.href = 'view_post.php?id=$id';</script>";
    } else {
        echo "Error updating post: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Post</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title']; ?>" required>
        </div>
        <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="text" name="image_url" id="image_url" class="form-control" value="<?php echo $post['image_url']; ?>" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="5" required><?php echo $post['content']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Update Post</button>
        <a href="view_post.php?id=<?php echo $id; ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>
