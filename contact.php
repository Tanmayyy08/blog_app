<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar (Include your existing navbar here or include as a separate file) -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">My Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="create_post.php" class="btn btn-primary">Create Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contact Us Content -->
<div class="container mt-5">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">We'd love to hear from you! Feel free to reach out with any questions, feedback, or collaboration opportunities.</p>
    
    <!-- Contact Form -->
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <form action="submit_contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="row mt-5">
        <div class="col-md-4">
            <h5>Our Office</h5>
            <p>5/603, sahana apt,<br>Mumbai, 400013</p>
        </div>
        <div class="col-md-4">
            <h5>Email</h5>
            <p>santoshipale@gmail.com</p>
        </div>
        <div class="col-md-4">
            <h5>Phone</h5>
            <p>+9322438932</p>
        </div>
    </div>
</div>

</body>
</html>
