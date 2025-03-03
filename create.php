<?php
include 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];

    $sql = "INSERT INTO CRUD (Firstname, Lastname, Email) VALUES ('$Firstname', '$Lastname','$Email')";
    mysqli_query($conn, $sql);

    header("Location: main.php"); // Redirect to home
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <h2>Add New User</h2>
    <form method="POST">
        <label>Firstname:</label>
        <input type="text" name="Firstname" required><br><br>
        <label>Lastname:</label>
        <input type="text" name="Lastname" required><br><br>

        <label>Email:</label>
        <input type="text" name="Email" required><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <a href="main.php">Back to Home</a>
</body>
</html>
