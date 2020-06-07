<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $radio = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$radio = $row["Affiliation"];
	}
}

?>

<!DOCTYPE html>
<html lang="en">
    <!-- head -->
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
    </head>
    

   <center>
    <h1> Post Article </h1>
    <br>
    <h3>Add New Post</h3>
    <hr>
     <body>
        <form method = "POST" action = "postprocess.php"><p>
    <div class = "post-form">
      <label for = "title">Article Title: </label>
      <input name="title" type="text" placeholder = "title..." required>
    </div>
    <br>
    <div class = "post-form">
        <label for = "author">Author: </label>
      <input name="author" type="text" placeholder = "author..." required>
    </div>
    <br>
    <div class = "post-form">
        <label for ="author2">Second Author: </label>
        <input name = "author2" type="text" placeholder = "author..." > (if applie)
    </div>
    <br>
    <div class = "post-form">
      <label for = "journal">journal: </label>
      <input name="journal" type="text" placeholder = "journal..." required>
    </div>
    <br>
    <div class = "post-form">
      <label for = "page">Article page: </label>
      <input name="page" type="text" placeholder = "page..." required>
    </div>
    <br>
    <div class = "post-form">
      <label for = "year">Article year: </label>
      <input name="year" type="text" placeholder = "year..." required>
    </div>
    <br>
    <div class = "post-form">
      <label for = "month">Article month: </label>
      <input name="month" type="text" placeholder = "month..." required>
    </div>
    <br>
    <div class = "post-form">
      <label for = "date">Article date: </label>
      <input name="date" type="date" id="date" >
    </div>
    <br>
    <div class = "post-form">
      <label for = "volume">Article volume: </label>
      <input name="volume" type="text" placeholder = "volume..." required>
    </div>
    <br>
    <div class = "post-form">
      <label for = "link">Article Link: </label>
      <input name="link" type="link" placeholder = "link..." required>
    </div>
    <br>
    <div class = "post-form">
    <label for = "email">Your Email Adress: </label>
    <input name="email" type="email" placeholder = "email here..." required>
    </div>
  </p>
  
    <br>
     <p>
        <input type="submit" name="postarticle" value="Submit" class="btn btn-big">
    </p>
</form>
</body>
   


    

         
    <!--footer-->

    <?php include("includes/footer.php"); ?>
    
</body>
</html>