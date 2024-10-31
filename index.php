<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!-- Navbar -->
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
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="create_post.php" class="btn btn-primary">Create Post</a>
                </li>

                <?php if (isset($_SESSION['user'])): ?>
                    <!-- User Dropdown for logged-in users -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                <?php elseif (isset($_SESSION['admin'])): ?>
                    <!-- Admin Dropdown for logged-in admins -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="adminDropdown">
                            <a class="dropdown-item" href="admin_dashboard.php">Dashboard</a>
                            <a class="dropdown-item" href="logout.php">Logout (Admin)</a>
                        </div>
                    </li>
                <?php else: ?>
                    <!-- Guest Dropdowns for User and Admin registration and login -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="user_register.php">User Register</a>
                            <a class="dropdown-item" href="user_login.php">User Login</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="adminDropdown">
                            <a class="dropdown-item" href="admin_login.php">Admin Login</a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5 pt-5">
    <h1 class="text-center">My Blog</h1>
    <div class="row">
        <?php
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="' . $row['image_url'] . '" class="card-img-top" alt="' . $row['title'] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['title'] . '</h5>
                            <p class="card-text">' . substr($row['content'], 0, 100) . '...</p>
                            <a href="view_post.php?id=' . $row['id'] . '" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<p>No posts available.</p>";
        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer class="bg-light text-center text-lg-start mt-5">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 My Blog. All Rights Reserved.
    </div>
</footer>

</body>
</html>
