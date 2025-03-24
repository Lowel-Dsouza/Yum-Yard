<?php include('config/constants.php'); ?>
<?php

if(isset($_SESSION['username'])) {
    header("Location: ".SITEURL."index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/styles1.css">
</head>
<body style="background: url(images/backg.jpg)no-repeat; background-size: cover;">
    <div class="container">
        <h2>Login</h2>
        <form method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        <p>Or <a href="index.php">skip login</a> and explore the food items directly.</p>
    </div>
    <?php
// Database connection
$host = "localhost";
$dbUsername = "root"; // Default XAMPP username
$dbPassword = "";     // Default XAMPP password
$dbName = "user_auth";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user from the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $row['password'])) {
            session_start();
$_SESSION['username'] = $row['username'];
header("Location: index.php"); // Redirect to the food page
            
        } else {
            echo "<center style='color:red; '>Invalid password!</center>";
        }
    } else {
        echo "<center style='color:red; '>User not found!</center>";
    }
}

$conn->close();
?>
</body>
</html>

