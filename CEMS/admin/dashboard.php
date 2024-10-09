<?php include '../includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="../index.php">Home</a>
            <a href="../manage.php">Manage Events</a>
            <a href="dashboard.php">Dashboard</a>
        </nav>
    </header>
    <section>
        <h2>Overview</h2>
        <p>Welcome to the Admin Dashboard. From here, you can view system statistics, manage events, and more.</p>
        
        <h2>System Statistics</h2>
        <?php
        $eventCount = $conn->query("SELECT COUNT(*) AS total FROM events")->fetch_assoc()['total'];
        $participantCount = $conn->query("SELECT COUNT(*) AS total FROM participants")->fetch_assoc()['total'];
        $registrationCount = $conn->query("SELECT COUNT(*) AS total FROM registrations")->fetch_assoc()['total'];
        
        echo "<p>Total Events: $eventCount</p>";
        echo "<p>Total Participants: $participantCount</p>";
        echo "<p>Total Registrations: $registrationCount</p>";
        ?>
    </section>
</body>
</html>
