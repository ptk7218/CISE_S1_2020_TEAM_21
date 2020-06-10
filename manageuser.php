<!-- search function at main page -->
<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">

        <!-- Font Awesome kit's code -->
        <script src="https://kit.fontawesome.com/4e6ccfc44a.js" crossorigin="anonymous"></script> 
       
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Lora&display=swap" rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" type="text/css" href = "css/style1.css">
        <title> User Management </title>
</head>
<body>
<?php
	$query = "select * from tbluser";

	$result = mysqli_query($conn, $query);

	if(!$result){
		echo "<p>Something is wrong with", $query, "</p>";

	}
?>
<div class = "container">
	<table border = \"1\">
		<tr>
			<th>ID</th>
			<th>username</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Affiliation</th>
			<th>Email</th>
			<th>Password</th>
			<th>Select</th>
			<th>Delete</th>
		</tr>

		<?php 
		
		while ($row = mysqli_fetch_assoc($result)) {?>
			<tr>
				<form action="deleteuser.php" method = "post" role = "form">
					<td><?php echo $row['ID'];?></td>
					<td><?php echo $row['username'];?></td>
					<td><?php echo $row['Firstname'];?></td>
					<td><?php echo $row['Lastname'];?></td>
					<td><?php echo $row['Affiliation'];?></td>
					<td><?php echo $row['Email'];?></td>
					<td><?php echo $row['Password'];?></td>
					<td>
						<input type = "checkbox" name = "keyToDelete" value="<?php echo $row['ID'];?>" required>
					</td>
					<td>
						<input type = "submit" name = "submitDeleteBtn" value = "delete" class="btn btn-big">
					</td>
				</form>
			</tr>

		<?php } ?>
	</table>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>
