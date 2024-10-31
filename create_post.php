<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Create a New Post</h2>
    <form action="create_post.php" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="text" name="image_url" id="image_url" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $image_url = $_POST['image_url'];
    $content = $_POST['content'];
    $sql = "INSERT INTO posts (title, image_url, content) VALUES ('$title', '$image_url', '$content')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Post created successfully!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>
