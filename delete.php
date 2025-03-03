<?php
//echo "My delete page";
require "database.php";
$id = $_GET['id'];
$sql = "DELETE FROM CRUD WHERE id= $id";
if(mysqli_query($conn, $sql)){
	echo "Deleted Successfully!";
}else{
	echo "Data not deleted!";
}
?>

