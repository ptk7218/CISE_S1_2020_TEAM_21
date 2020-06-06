<!-- search function at main page -->
<?php 
include_once('includes/header2.php');
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
        <title> Moderator Article Management </title>
</head>
<body>
<?php
	$query = "select * from article";

	$result = mysqli_query($conn, $query);

	if(!$result){
		echo "<p>Something is wrong with", $query, "</p>";

	}
?>
<div class = "container">
	<table border = \"1\">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>journal</th>
			<th>author</th>
			<th>second author</th>
			<th>pages</th>
			<th>year</th>
			<th>volume</th>
			<th>link</th>
			<th>Select</th>
			<th>Delete</th>
		</tr>

		<?php 
		
		while ($row = mysql_fetch_array($query)) {?>
			<tr>
				<form action="" method = "post" role = "form">
					<td><?php echo $row['a_id'];?></td>
					<td><?php echo $row['a_title'];?></td>
					<td><?php echo $row['a_journal'];?></td>
					<td><?php echo $row['a_author'];?></td>
					<td><?php echo $row['a_author2'];?></td>
					<td><?php echo $row['a_pages'];?></td>
					<td><?php echo $row['a_year'];?></td>
					<td><?php echo $row['a_volume'];?></td>
					<td><?php echo $row['a_link'];?></td>
					<td>
						<input type = "checkbox" name = "keyToDelete" value="<?php echo $row['id'];?>">
					</td>
					<td>
						<input type = "submit" name = "submitDeleteBtn" class="btn btn-big">
					</td>
				</form>
			</tr>

		<?php } ?>
	</table>
</div>

</body>
</html>
