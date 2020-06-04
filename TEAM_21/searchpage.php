<DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
  </head>
  <body>
    <h1>Search Software Development Article</h1>



  <?php

 //CONNECTING TO DATABASE

   require_once("../../conf/settings.php");


	$conn = @mysqli_connect( $sql_host,$sql_user,$sql_pass, $sql_db);
   //$sql_tble = "clearDB";
    // Checks if connection is successful
    if (!$conn) {
        // Displays an error message
        echo "<p>Database connection failure</p>";
    } else {

        // Create the query
        $author = $_GET['author'];

        if (isset ($author)) {
        //if (!preg_match('[A-Za-z0-9!\?\., ]', $status))
        {
            $query = "SELECT* FROM clearDB WHERE author LIKE '$author'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            //checks for null result set
            if(empty($row["author"]))
            {
                die("<p>No Results</p>" . '<p><button onclick="location.href=\'index.html\'" type="button">Return to Home Page</button></p>'
                    . '<p><button onclick="location.href=\'searchform.php\'" type="button">Search Again</button></p>');
            }


              echo "Article ID: " .$row["id"]. "<br/>"."<br/>";
              echo "Author:  " . $row["author"]. "<br/>"."<br/>";
              echo "Title:   " . $row["title"]."<br/>"."<br/>";
              echo "Text:  " .$row["text"]."<br/>"."<br/>";
              echo "Link:  " .$row["link"];
              echo "<br/>";
              echo "<br/>";

              if($row["id"] == 2){
                echo "<a href='https://softwareengineeringdaily.com/category/all-episodes/exclusive-content/articles/' target='_blank'>Click here to open this link</a>";
               }
              if($row["id"] == 3){
                echo "<a href='https://www.freecodecamp.org/news/how-to-write-a-good-software-design-document-66fcf019569c/' target='_blank'>Click here to open this link</a>";
              }
              if($row["id"] == 1){
                echo "<a href='https://softwareengineeringdaily.com/category/all-episodes/exclusive-content/articles/' target='_blank'>Click here to open this link</a>";
              }

        }

        }




            // Frees up the memory, after using the result pointer
            mysqli_free_result($result);
        // if successful query operation

        // close the database connection
        mysqli_close($conn);
    }
    ?>

<br/><br/><br/><br>
  <a href="searchform.php">Search for another Author</a> <a href="index.html">Return to home page</a>
    </body>
  </html>
