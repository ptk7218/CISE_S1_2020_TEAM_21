<?php
include_once('includes/header2.php');
require_once('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
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
		
</head>

<center>
    <h1> Advance Search </h1>
    <br>
		<h3> Evidence of TDD improve performance list</h3>
		<hr>
<body>
	<form method = "GET" action="dateprocess.php">
        <p>Date Range From
		<input type="date" name="txtStartDate" id="txtStartDate">&nbsp;to
		<input type="date" name="txtEndDate" id="txtEndDate">
    </p>
        <br>
		<p>
            <input type="submit" name="search" value="search" class="btn btn-big">
		</p>
	</form>
    <hr>

    <form method = "GET" action=""><p>
        <label for = "namefield">If: </label>
        <select name = "namefield" id="namefield" placeholder="name&filed">
            <option value="" disabled selected hidden>name&field</option>
            <option value="a_title">article title</option>
            <option value="a_author">article author</option>
            <option value="a_link">article source</option>
            <option value="a_method">SE method</option>
            <option value="a_methodology">SE methodology</option>
        </select>
        <select name = "operator" id="operator" placeholder="operator">
             <option value="" disabled selected hidden>operator</option>
             <option value="contains">contains</option>
             <option value="beginwith">begins with</option>
             <option value="endwith">ends with</option>
             <option value="equal">is equal to</option>
        </select>
        <input type="text" name="freetext" id="freetext" placeholder="text...">

    </p>
    <br>
    <p>
        <input type="submit" name="searchdroplist" value="search" class="btn btn-big">
    </p>
</form>


</center>


    <?php include("includes/footer.php"); ?>
    
</body>
</html>
</body>
</html>