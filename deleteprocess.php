<?php
include_once('link.php');
include_once('header1.php');
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

    $sql = "SELECT * from queuearticle where a_id = '$key'"; 

    $check = mysqli_query($conn,$sql);

    if(!$check) {
        echo "<p>not found";
       }else{
    
    $sql2 = "INSERT INTO tbldrop (a_id,a_title,a_author,a_author2,a_journal,a_page,a_year,a_month,a_date,a_volume,a_link,a_email) 
    SELECT a_id,a_title,a_author,a_author2,a_journal,a_page,a_year,a_month,a_date,a_volume,a_link,a_email FROM queuearticle
    WHERE a_id = '$key'";
    

          $del = mysqli_query($conn,$sql2);
          if(!$del) {
             echo "<p>not deletd</p>";
           }
            else{
                $sql3 = "DELETE FROM queuearticle where a_id = '$key'";
                $del2 = mysqli_query($conn,$sql3);

               echo "<p>your record is deleted!</p>";
            }
    }
}
?>

<?php include("includes/footer.php"); ?>

</body>
</html>
