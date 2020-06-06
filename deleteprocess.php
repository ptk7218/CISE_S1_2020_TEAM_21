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