<?php
// Database configuration
$host = "localhost"; // Database host
$dbname = "assignment"; // Database name
$username = "root"; // Database username
$password = ""; // Database password

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['email'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $confirm_password = $_POST['confirm-password'];

    // // Check if passwords match
    // if ($password != $confirm_password) {
    //     echo "Passwords do not match!";
    //     exit;
    // }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, username, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $username, $email, $hashed_password);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>
