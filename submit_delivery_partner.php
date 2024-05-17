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
$stmt = $conn->prepare("INSERT INTO delivery_partners (name, age, shift, licence) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $name, $age, $shift, $licence);

// Set parameters and execute
$name = $_POST['name'];
$age = $_POST['age'];
$shift = $_POST['shift'];
$licence = $_POST['licence'];
$stmt->execute();

echo "New record inserted successfully";

// Close statement and database connection
$stmt->close();
$conn->close();
?>
