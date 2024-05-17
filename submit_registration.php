<?php
// Change these variables to match your database configuration
$servername = "db";
$username = "root";
$password = "alan1234";
$dbname = "alan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

// Set parameters and execute
$username = $_POST['username'];
$password = $_POST['password'];
$stmt->execute();

echo "Registration successful";

// Close statement and database connection
$stmt->close();
$conn->close();
?>
