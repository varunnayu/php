<?php
// index.php - Personal Portfolio Homepage

$title = "My Portfolio";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to My Personal Portfolio</h1>
        <p>Hi, I'm John Doe, a passionate web developer.</p>
    </header>

    <section id="about">
        <h2>About Me</h2>
        <img src="assets/images/profile.jpg" alt="Profile Picture" class="profile-img">
        <p>I'm a web developer with a strong foundation in HTML, CSS, JavaScript, and PHP.</p>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="contact.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 John Doe. All rights reserved.</p>
    </footer>
</body>
</html>
