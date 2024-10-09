<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
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

        <h1>Upcoming Events</h1>
    </header>
    <section>
        <h2>Event Listings</h2>
        <table>
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM events";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>" . $row['date'] . "</td><td>" . $row['location'] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No events found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>
