<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Events</title>
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

        <h1>Register for Events</h1>
    </header>
    <section>
        <h2>Event Registration</h2>
        <form method="post" action="register.php">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="contact">Contact Number:</label>
            <input type="text" name="contact" id="contact" required>
            <label for="event">Select Event:</label>
            <select name="event" id="event">
                <?php
                $sql = "SELECT * FROM events";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['event_id'] . "'>" . $row['name'] . "</option>";
                }
                ?>
            </select>
            <button type="submit" name="register">Register</button>
        </form>
    </section>
</body>
</html>
