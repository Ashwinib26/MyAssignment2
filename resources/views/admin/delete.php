<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Process the delete request and delete the user from the database
    $id = $_GET["id"];

    $sql = "DELETE FROM user_table WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}
?>

<br>
<a href="allusers.blade.php">Back to User List</a>
