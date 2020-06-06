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
if(isset($_POST['submitDeleteBtn'])){
    $key = $_POST['keyToDelete'];

    $sql = "SELECT * from article where a_id = '$key'";

    $check = mysqli_query($conn,$sql);
    if(!$check) {
        echo "<p>not found";
    }else{
    $sql2="DELETE FROM article where a_id = '$key'";

    $del = mysqli_query($conn,$sql2);
     if(!$del) {
         echo "<p>not deletd</p>";
     }
     else{
         echo "<p>record deleted!!</p>";
     }
    }
}
?>

<?php include("includes/footer.php"); ?>

</body>
</html>
