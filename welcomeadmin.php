<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $radio = '';
$sql = "SELECT * FROM tbladmin WHERE ID='$id'";
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

    <body>



<div class="jumbotron">
	<center>
		<h1>Welcome <?php echo $fname." ".$lname; ?></h1>
	</center>
</div>

 <div class="content clearfix">
            
            <!-- Main Content -->
              <?php include('updateInfo.php'); ?>
  
            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search anything!</h2>
                    <form action="searchstatusprocess1.php" method="GET">
                        <input type="text" name="status" id="status" placeholder="Search..."> 
                        <input type="submit" value = "GO!" class="btn btn-big">
                    </form>
                    <br>
                    <p><a href = "advancesearch.php">More Search option</a></p>
                
                </div>

                <div class="section topics">
                    <h2 class = "section-title">SEER admin management</h2>
                    <ul>
                        <li><a href ="welcomeadmin.php">Home</a></li>
                        <li><a href ="post.php">Post an Article</a></li>
                        <li><a href ="#">Manage Posted Article</a></li>
                        <li><a href ="moderdelete.php">Manage Queue Article</a></li>
                        <li><a href ="manageuser.php">Manage User</a></li>
                        <li><a href ="#">Manage Moderators</a></li>
                        <li><a href ="manageanal.php">Manage Analysts</a></li>



                    </ul>
                </div>

            </div>
           
          <!-- the link with all evidence items-->
          <div class="topic-link">
          <h2>SE Method</h2>  
          <ul>
              <li>TDD</li>
              <li>BDD</li>
              <li>pair programming</li>
              <li>Planning Poker</li>
              <li>Daily standup meetings</li>
              <li>story boards</li>
              <li>user story mapping</li>
              <li>continuous integration</li>
              <li>retrospectives</li>
              <li>burn down chars</li>
              <li>requirements prioritisation</li>
              <li>version control</li>
              <li>code sharing</li>
          </ul>
          <h2>SE Methodology</h2>
          <ul>
          <li>Waterfall</li>
          <li>Spiral</li>
          <li>XP</li>
          <li>Rational Unified Process</li>
          <li>Crystal</li>
          <li>Clean room</li>
          <li>Feature Driven Development</li>
          <li>Model Driven Development</li>
          <li>Domain Driven Development</li>
          <li>Formal methods</li>
          <li>PRoblem Driven Development</li>
          <li>Cloud computing</li>
          <li>Service Oriented Development</li>
          <li>Aspect Oriented Development</li>
          <li>Valuse Driven Development</li>
          <li>Product Driven Development</li>
          <li>Agile</li>
          </ul>
          
         </div>
        
         </div>
         
    <!--footer-->

    <?php include("includes/footer.php"); ?>
    
</body>
</html>