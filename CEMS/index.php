<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Event Management System</title>
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
  <main>
        <section>
            <h2>Upcoming Events</h2>
            <p>Check out the latest community events happening near you!</p>
            <a href="events.php">View Events</a>
        </section>
        <section>
            <h2>Event Management</h2>
            <p>Organizers can manage events efficiently through our admin dashboard.</p>
            <a href="manage.php">Manage Events</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Community Event Management System</p>
    </footer>
</body>
</html>
