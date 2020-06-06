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
	else{
		echo "<table border = \"1\">";
		echo "<tr>\n";
		. "<th scope=\"col\">ID</th>\n"
		."<th scope=\"col\">Title</th>\n"
		."<th scope=\"col\">journal</th>\n"
		."<th scope=\"col\">author</th>\n"
		."<th scope=\"col\">second author</th>\n"
		."<th scope=\"col\">pages</th>\n"
		."<th scope=\"col\">year</th>\n"
		."<th scope=\"col\">volume</th>\n"
		."<th scope=\"col\">link</th>\n"
		."<th scope=\"col\">select</th>\n"
		."<th scope=\"col\">delete</th>\n"		
		."</tr>\n";
		while ($row = mysql_fetch_assoc($result)) {
			echo "<tr>";
			echo "<form action="" method = "post" role = "form">";
			echo "<td>", $row['a_id'], "</td>";
			echo "<td>", $row['a_title'], "</td>";
		    echo "<td>", $row['a_journal'],"</td>";
			echo "<td>", $row['a_author'], "</td>";
			echo "<td>", $row['a_author2'], "</td>";
			echo "<td>", $row['a_pages'], "</td>";
			echo "<td>", $row['a_year'], "</td>";
			echo "<td>", $row['a_volume'], "</td>";
			echo "<td>", $row['a_link'], "</td>";
			echo "<td>", "
				<input type = "checkbox" name = "keyToDelete" value="<?php echo $row['id'];?>">",
					"</td>";
			echo "<td>", "
						<input type = "submit" name = "submitDeleteBtn" class="btn btn-big">";
					"</td>";
			echo "</form>";
			echo "</tr>";
		}
	echo "</table>";
	mysqli_free_result($result);
	}
}
?>

</body>
</html>
