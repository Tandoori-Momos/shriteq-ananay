<?php
/*
  @Author: ananayarora
  @Date:   2016-10-21T00:21:52+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T01:31:46+05:30
*/

    require('backend/inc/mysqli.php');
    require('backend/inc/conf.php');
    require('backend/inc/functions.php');

    $f = new Functions();

    $f->session();

    if (isset($_POST['email']) && isset($_SESSION['uid'])) {
        $data = Array(
            'email'=>$f->secure($_POST['email'])
        );
        $f->o->where("id",$_SESSION['uid']);
        $f->o->update("users",$data);
        header("Location: dashboard.php");
    }

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
    </head>
    <body>
        <?php require('header.php'); ?>
        <div class="wrapper">
            <center>
                <h1>Please enter your email</h1>
                <br />
                <form class="" action="addemail.php" method="post">
                    <input type="text" name="email" placeholder="Email" value="">
                    <br /><br />
                    <button style="border:none;-webkit-apperance:none;appearance:none;"class="submit">Add</button>
                </form>
            </center>
        </div>
    </body>
</html>
