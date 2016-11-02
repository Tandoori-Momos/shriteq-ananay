<?php
/*
  @Author: ananayarora
  @Date:   2016-10-21T00:46:22+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T06:57:34+05:30
*/

    require("dash_inc.php");
?>
           
                    <div class="postC">
  <?php 

  error_reporting( error_reporting() & ~E_NOTICE );


  $con = new mysqli('localhost','root','','voyage');

  if ($con->connect_error) {
    die();
  }

  $table = "CREATE TABLE comments(
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    comment VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    date VARCHAR(16) NOT NULL

    )";
  if ($con->query($table)) {
    echo "Comment Posted";    
  } 


  if (isset($_POST['comment'])) {
    $acc_username = $_SESSION['fullname'];
    $time =  date("h:i:sa");
    $comment = trim($_POST['comment']);

    if ($_POST['comment'] == " ") {
      echo "Not Null!";
    } else {
      $sql = "INSERT INTO comments(comment,username,date)
    VALUES ('$comment','$acc_username','$time')";

    if ($con->query($sql)) {
      echo "comment posted";
    } else {
      echo "Error: " .$con->error;
    }
    }



    
  } 
  $request = "SELECT * FROM comments";

    $res = $con->query($request);

    if ($res->num_rows > 0) {
      while ($row = $res->fetch_assoc()) {

        $comment_data = $row["comment"];
        $user_data = $row["username"];
        $date_data =  $row["date"]; 

        $data = "<div class = 'comment'><div class = 'headingC'>
    <div class = 'profile-name'>Vishrut Malik<br>
    <span style = 'font-size: 10pt;'>Sat, 9:42 PM</span></div>
       <div class = 'profile-pic'><img src='muk.png'></div>

    </div>
     
    <span class = 'comment_data'> " . $comment_data ." </span>
        
    </div>";

    echo $data;


    
      }
    }
   ?>
    
   <form method = "post">
    <textarea name = "comment" required class="area"></textarea><br>
    <input type="submit" value = "Go" class="sub">
  </form>
      </div>


      





      <!-- Text area post end -->

                </div>
            </div>
        </div>
    </body>
</html>