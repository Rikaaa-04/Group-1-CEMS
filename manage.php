<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Events</title>
    <link rel="stylesheet" href="css/updated_style_with_image.css">
</head>
<body>
    
<header>
    <img src="images/image.png" alt="Logo" class="logo">
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

        <h1>Manage Events</h1>
    </header>
    <section>
        <h2>Event Management</h2>
        <form method="post" action="manage.php">
            <label for="event_name">Event Name:</label>
            <input type="text" id="event_name" name="event_name" required>

            <label for="event_description">Description:</label>
            <textarea id="event_description" name="event_description" required></textarea>

            <label for="event_date">Date:</label>
            <input type="date" id="event_date" name="event_date" required>

            <label for="event_location">Location:</label>
            <input type="text" id="event_location" name="event_location" required>

            <button type="submit" name="add_event">Add Event</button>
        </form>

        <?php
        // Handle adding a new event to the database
        if (isset($_POST['add_event'])) {
            $name = $_POST['event_name'];
            $description = $_POST['event_description'];
            $date = $_POST['event_date'];
            $location = $_POST['event_location'];

            $sql = "INSERT INTO events (name, description, date, location) VALUES ('$name', '$description', '$date', '$location')";
            
            if ($conn->query($sql) === TRUE) {
                echo "<p>New event added successfully</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Display existing events
        echo "<h2>Current Events</h2>";
        $sql = "SELECT * FROM events";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><thead><tr><th>ID</th><th>Name</th><th>Description</th><th>Date</th><th>Location</th><th>Actions</th></tr></thead><tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['event_id']}</td><td>{$row['name']}</td><td>{$row['description']}</td><td>{$row['date']}</td><td>{$row['location']}</td>";
                echo "<td><a href='manage.php?delete={$row['event_id']}'>Delete</a></td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>No events found.</p>";
        }

        // Handle deletion of an event
        if (isset($_GET['delete'])) {
            $event_id = $_GET['delete'];
            $sql = "DELETE FROM events WHERE event_id=$event_id";
            if ($conn->query($sql) === TRUE) {
                echo "<p>Event deleted successfully</p>";
                header("Location: manage.php"); // Refresh the page after deletion
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }
        ?>
    </section>
</body>
</html>
