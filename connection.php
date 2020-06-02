<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("cmslamp14","ptk7218","62217wsxl","ptk7218");

if(!$conn)
{
	echo "Database connection faild...";
}
?>