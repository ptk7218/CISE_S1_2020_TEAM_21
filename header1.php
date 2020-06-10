<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
session_start();
$username = $_SESSION['username'];
$fname = $_SESSION['firstname'];
$lname = $_SESSION['lastname'];
$radio = $_SESSION['radio'];
$email = $_SESSION['email'];
?>



<nav class="navbar navbar-default">

<div class ="logo">
            <img src = "img/SEER.png" alt = "Profile pic" width = "135" height = "67">
            
</div>
		
<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
	</div>
</nav>