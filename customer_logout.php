<?php
session_start();

include 'db_connect.php';

// Update date & time
$customer_id = $_SESSION['customer_Id'];
$this_login = $_SESSION['this_login'];

// Prepare the SQL statement with parameterized query to prevent SQL injection
$sql = "UPDATE bank_customers SET Last_Login = ? WHERE Customer_ID = ?";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $this_login, $customer_id);

// Execute the statement
if ($stmt->execute()) {
    // Success
    session_destroy();
    session_unset();
    header('location: customer_login.php');
} else {
    // Error handling
    echo "Error updating record: " . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
