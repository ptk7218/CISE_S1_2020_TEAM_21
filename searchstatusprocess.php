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
        <title> Search Page </title>
</head>
<body>
<h1>Search</h1>

<div class="article-container">
<?php
    if(isset($_POST['submit-search'])){
    	$search = $_POST['search'];

    	$sql = " SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%' ";
    	$result = mysqli_query($conn, $sql);
    	
    	if (!$result) {
            echo "<p>Something is Wrong with", $query, "</p>";            
            }
    	else {
    		while($row = mysqli_fetch_assoc($result)){
              echo "<div class='article-box'>
                <h3>".$row['a_title']."</h3>
                <p>".$row['a_text']."</p>
                <p>".$row['a_date']."</p>
                <p>".$row['a_author']."</p>

             </div>";
    	}
     mysqli_free_result($result);
    }
}
?>
</div>



</body>
</html>
