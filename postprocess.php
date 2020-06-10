<?php
require_once('connection.php');
$title = $author = $author2 = $journal = $page = $year = $month = $date = $volume = $link = $email = '';

$title = $_POST['title'];
$author = $_POST['author'];
$author2 = $_POST['author2'];
$journal = $_POST['journal'];
$page = $_POST['page'];
$year = $_POST['year'];
$month = $_POST['month'];
$date = $_POST['date'];
$volume = $_POST['volume'];
$link = $_POST['link'];
$email = $_POST['email'];

$sql = "INSERT INTO tblequeue (a_title,a_author,a_author2,a_journal,a_pages,a_year, a_month, a_volume, a_link, a_email) VALUES ('$title','$author','$author2','$journal','$page','$year','$month','$volume','$link','$email')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: afterpost.php");
}
else
{
	echo "Error :".$sql;
}
?>