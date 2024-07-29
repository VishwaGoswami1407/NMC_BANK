<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "bnkms") or die("Database Error: " . mysqli_connect_error());

// Get user message from AJAX request
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Query the database for a response
$query = "SELECT response FROM bot WHERE reply = '$message'";
$result = mysqli_query($conn, $query);

if ($result) {
    // Check if a response is found
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $response = $row['response'];
        echo $response;
    } else {
        echo "Sorry, I couldn't understand you.";
    }
} else {
    echo "Error processing your request.";
}

// Close database connection
mysqli_close($conn);
?>
