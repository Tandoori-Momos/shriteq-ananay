<?php
/*
  @Author: ananayarora
  @Date:   2016-10-20T21:56:38+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T01:49:44+05:30
*/


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Voyage</title>
        <link rel="stylesheet" href="css/home.css" media="screen" title="no title">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
    </head>
    <body>
        <?php
            require("header.php");
        ?>
        <div class="intro">
            <video src="img/timelapse.mp4" muted autoplay loop></video>
            <div class="overlay"></div>
            <div class="text">Where would you go today?</div>
            <input type="text" class="textbox" placeholder="Enter a Location"/>
        </div>
    </body>
</html>
