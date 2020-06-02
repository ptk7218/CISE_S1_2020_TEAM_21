<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
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
            <div class="main-content">
               <h1 class="recent-post-title">Recent Post</h1>
                 <div class ="post">
                     <div class="post-preview">
                         <h2><a href ="single.html">SE Method</a> </h2>
                         <i class="far fa-user"> Shixuan Wang</i>
                         &nbsp;
                         <i class = "far calendar">May 20,2020</i>
                         <p class="preview-text">
                         asdlfas;ldfa;sldfjlkadsf;j
                         </p>
                         <a href = "" class="btn read-more">Read More</a>
                     </div>
                 </div>             
  

            </div>
         
            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search anything!</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">

                    </form>
                
                </div>

                <div class="section topics">
                    <h2 class = "section-title">Topics</h2>
                    <ul>
                        <li><a href ="#">SE Method</a></li>
                        <li><a href ="#">SE Methodology</a></li>

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