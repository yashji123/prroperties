<?php
// Step 1: Connect to the database
$servername = "localhost";
$username = "keval";
$password = "Satyam@123";
$database = "prropnew";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Get the email from the URL parameter
$email = $_GET['email']; // Assuming you get the email from the URL parameter

// Prepare the statement to update email_verify
$stmt = $conn->prepare("UPDATE users SET email_verify = 1 WHERE email = ?");

// Bind parameters
$stmt->bind_param("s", $email);

// Step 3: Execute the query
if ($stmt->execute()) {
    echo "Email verified successfully.";
} else {
    echo "Error updating record: " . $stmt->error;
}
$stmt->close(); // Close statement

// Close connection
$conn->close();
?>
