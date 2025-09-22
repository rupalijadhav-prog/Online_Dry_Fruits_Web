<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

// Include necessary files or connect to the database if required

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include your CSS styles or use a framework like Bootstrap -->
</head>
<body>

    <header>
        <h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2>
        <a href="logout.php">Logout</a>
    </header>

    <section>
        <!-- Your dashboard content goes here -->
        <h3>Dashboard Overview</h3>
        <p>This is a simple dashboard. Add your widgets, charts, and other content here.</p>
    </section>

    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <!-- Include your JavaScript files if needed -->

</body>
</html>
