<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/updated_style_with_image.css">
</head>
<body>
    
<header>
    <img src="images/image.png" alt="Logo" class="logo">
    <h1>Community Event Management System (CEMS)</h1>
    <nav>
        <div class="dropdown">
            <button class="dropbtn">Home</button>
            <div class="dropdown-content">
                <a href="index.php">Main</a>
                <a href="about.php">About Us</a>
                <a href="events.php">Events</a>
                <a href="register.php">Register</a>
                <a href="contact.php">Contact Us</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">About</button>
            <div class="dropdown-content">
                <a href="about.php">Our Story</a>
                <a href="about.php">Team</a>
                <a href="about.php">Careers</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Events</button>
            <div class="dropdown-content">
                <a href="events.php">Upcoming Events</a>
                <a href="events.php">Past Events</a>
                <a href="events.php">Event Gallery</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Register</button>
            <div class="dropdown-content">
                <a href="register.php">Sign Up</a>
                <a href="register.php">Login</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Contact</button>
            <div class="dropdown-content">
                <a href="contact.php">Contact Form</a>
                <a href="contact.php">Find Us</a>
            </div>
        </div>
    </nav>
</header>

        <h1>Contact Us</h1>
    </header>
    <section>
        <h2>We'd love to hear from you!</h2>
        <form method="post" action="contact.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" name="send_message">Send Message</button>
        </form>

        <?php
        if (isset($_POST['send_message'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            echo "<p>Thank you, $name! Your message has been received. We'll get back to you at $email.</p>";
        }
        ?>
    </section>
</body>
</html>
