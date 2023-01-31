<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "database_name";

// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }


// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','database_name');

// include('connection.php');
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

// echo $sql;

// die();

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}



// if (mysqli_query($connection, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($connection);
// }


mysqli_close($con);
