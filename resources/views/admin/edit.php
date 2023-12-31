<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data and update the database
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "UPDATE user_table SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "User updated successfully";
    } else {
        echo "Error updating user: " . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Display the form with the user details for editing
    $id = $_GET["id"];

    $sql = "SELECT id, name, email FROM user_table WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "User not found";
        exit();
    }
}
?>

<h2>Edit User</h2>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Name: <input type="text" name="name" value="<?php echo $row["name"]; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $row["email"]; ?>" required><br>
    <input type="submit" value="Update User">
</form>

<br>
<a href="allusers.blade.php">Back to User List</a>

</body>
</html>
