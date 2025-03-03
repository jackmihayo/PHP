<?php
//Database connection
$servername = "localhost";
$username = "root";
$password ="";
//$dbname = "CRUD";

$conn = mysqli_connect($servername, $username,$password);
if(!$conn){
	echo"Database not connected!".mysqli_connect_error();
}else{
	echo "Database successful connected! <br><br>";
}
//create database
/*
$sql = "CREATE DATABASE CRUD";

if(mysqli_query($conn, $sql)){
	echo "Database created successful <br><br>";
}else{
	echo "Database not created!";
}
mysqli_close($conn);
*/
//select database to be used
$conn->select_db("CRUD");
//Create table
/*
$sql = "CREATE TABLE CRUD(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname VARCHAR(100) NOT NULL,
Lastname VARCHAR(100) NOT NULL,
Email VARCHAR(100) NULL UNIQUE,
Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if(mysqli_query($conn, $sql)){
	echo "Table created successfully!";
}else{
	echo "Table not created !";
}
*/

//INSERT DATA INTO TABLE 
/*
$sql = "INSERT INTO CRUD(Firstname, Lastname, Email) values
('John','Doe','Doe@gmail.com'),
('Sele','Mihayo','sele@gmail.com'),
('Kibu','Dey','kd@gmail.com'),
('Json','Miho','jacky@gmail.com')";
if(mysqli_query($conn,$sql)){
	echo "Data inserted successful";
}else{
	echo "data not inserted";
}
*/
?>