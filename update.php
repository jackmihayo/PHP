<?php  
require "database.php";
$id = $_GET['id'];
$sql= "SELECT * FROM CRUD WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Email = $_POST['Email'];
	$sql ="UPDATE CRUD SET Firstname='$Firstname', Lastname='$Lastname', Email='$Email' WHERE id=$id";
	mysqli_query($conn, $sql);

}
?>

<!Doctype html>
<head>
	<title>Edit User</title>
</head>
<body>
	<form method="POST">
		<label>Firstname:</label>
		<input type="text" name="Firstname" value="<?php echo $row['Firstname']; ?>" required><br><br>
		<label>Lastname:</label>
		<input type="text" name="Lastname" value="<?php echo $row['Lastname']; ?>" required> <br><br>
		<label>Email:</label>
		<input type="text" name="Email" value="<?php echo $row['Email']; ?>" required><br><br>
		<input type="submit" name="update">

	</form>
<a href="/CRUD/main.php">Go main!</a>
</body>
</html