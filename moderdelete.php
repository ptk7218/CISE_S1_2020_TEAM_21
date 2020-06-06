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


    	$sql = " SELECT * FROM article ";

    	$result = mysqli_query($conn, $sql);
    	
    	if (!$result) {
            echo "<p>Something is Wrong with", $query, "</p>";            
            }
    	else {
    		while($row = mysqli_fetch_assoc($result)){
              echo "<div class='article-box'>
                <h3>".$row['a_method']."</h3>
                <p>".$row['a_author'].".,& ".$row['a_author2'].". (".$row['a_year']."). ".$row['a_title'].". ".$row['a_journal']. ", ".
                $row['a_volume']."(".$row['a_id']."), ".$row['a_pages'].". ".$row['a_link']. "</p>
			 </div>";
			 echo "<input type = 'checkbox' name = 'keyToDelete' value=" .$row['id']. "required>" ;
			 echo "<input type = 'submit' name = 'submitDeleteBtn' class='btn btn-big'>";
    	}
     mysqli_free_result($result);
    }
  mysqli_close($conn);
?>

</div>

 <?php include("includes/footer.php"); ?>

</body>
</html>