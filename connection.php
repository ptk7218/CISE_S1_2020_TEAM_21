<!--
in this file we write code for connection with database and check if
it is connect with the database
-->
<?php
$conn = mysqli_connect("us-cdbr-east-05.cleardb.net","be11fd0b4d6c79","b8b197d2","heroku_8da37fa6c7415cc");

if(!$conn)
{
	echo "Database connection faild...";
}
?>