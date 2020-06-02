<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$username = $fname = $lname = $radio = $email = $password = $pwd = '';

$username = $_POST['username'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$radio = $_POST['radio'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (username,Firstname,Lastname,Affiliation,Email,Password) VALUES ('$username','$fname','$lname','$radio','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>