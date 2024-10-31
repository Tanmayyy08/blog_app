<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="create_post.php" class="btn btn-primary">Create Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- About Us Content -->
<div class="container mt-5">
    <h1 class="text-center">About Us</h1>
    <p class="mt-4">
        Welcome to My Blog! Our blog is dedicated to sharing insights, stories, and ideas that inspire, educate, and entertain. 
        We cover a range of topics from technology, lifestyle, health, and travel to food, business, and beyond.
    </p>
    <p>
        Our mission is to provide valuable and engaging content to our readers, helping them stay informed and entertained.
        Whether you’re looking for practical advice, the latest industry trends, or just an interesting read, you’re in the right place.
    </p>
    <p>
        Thank you for being a part of our community. We hope you enjoy our posts and find value in the content we share.
        Feel free to reach out to us with any questions, feedback, or just to say hello!
    </p>

    <!-- Team Section (Optional) -->
    <h2 class="mt-5">Meet Our Team</h2>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card">
                <img src="assets/images/team1.jpg" class="card-img-top" alt="Team Member 1">
                <div class="card-body">
                    <h5 class="card-title">Alex Johnson</h5>
                    <p class="card-text">Founder & Lead Editor</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="assets/images/team2.jpg" class="card-img-top" alt="Team Member 2">
                <div class="card-body">
                    <h5 class="card-title">Jamie Lee</h5>
                    <p class="card-text">Content Strategist</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="assets/images/team3.jpg" class="card-img-top" alt="Team Member 3">
                <div class="card-body">
                    <h5 class="card-title">Taylor Smith</h5>
                    <p class="card-text">Social Media Manager</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
