<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mystory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is DELETE
if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    // Process the delete request and delete the user from the database
    $id = $_GET["id"];

    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM users WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // assuming id is an integer

    if ($stmt->execute()) {
        echo "User deleted successfully";
    } else {
        error_log("Error deleting user: " . $stmt->error);
        echo "An error occurred while processing your request.";
    }

    $stmt->close();
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    header("Allow: DELETE");
    echo "Invalid request method. Only DELETE requests are allowed.";
}

// Close the database connection
$conn->close();
?>
