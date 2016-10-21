<?php
/*
  @Author: ananayarora
  @Date:   2016-10-21T00:21:52+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T00:45:27+05:30
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign In</title>
        <link rel="stylesheet" href="css/signin.css" media="screen" title="no title">
        <link rel="stylesheet" href="css/sweetalert.css" media="screen" title="no title">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="https://use.fontawesome.com/1ecbda70a5.js"></script>
        <script type="text/javascript" src="js/sweetalert.min.js"></script>
        <script type="text/javascript" src="js/signin.js"></script>
    </head>
    <body>
        <?php require('header.php'); ?>
        <div class="wrapper">
            <center>
                <h1 class="title">Sign in</h1><br /><br /><br />
                <a href="#"><div class="login_with_facebook" onclick="window.location.href='backend/facebook_process.php'"><i class="fa fa-facebook"></i>&nbsp;&nbsp;Facebook</div></a>
                <br /><br />
                <center>
                    <div class="line"></div>
                    <br />
                    <br />
                    <input type="text" id="username" name="username" placeholder="Username / Email"><br />
                    <input type="password" id="password" name="password" placeholder="Password"><br /><br /><br />
                    <div class="submit">Sign In</div>
                </center>
            </center>
        </div>

    </body>
</html>
