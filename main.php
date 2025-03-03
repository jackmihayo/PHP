<?php 
require "database.php";
$sql = "SELECT *FROM CRUD";
$result = mysqli_query($conn, $sql);

?>

<!Doctype html>

<head>
	<title>CRUD Applications</title>
</head>
<body>
	<a href="/CRUD/create.php">Create New User</a>
<table border= 1>
	<tr>
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Reg Date</th>
	</tr>
	<?php
	while($row = mysqli_fetch_assoc($result)){
	?>
    <tr>
    	<td><?php echo $row['id']; ?></td> <td><?php echo $row['Firstname']; ?></td>  <td><?php echo $row['Lastname']; ?></td> <td><?php echo $row['Email']; ?></td> <td><?php echo $row['Reg_date']; ?></td> <td><a href="/CRUD/update.php?id=<?php echo $row['id']; ?>">Edit</a></td> <td><a href="/CRUD/delete.php?id=<?php echo $row['id']; ?>" onclick="return comfirm('Are you sure ?')">Delete</a></td>
    </tr>
<?php } ?>
</table>
</table>

</body>
</html>