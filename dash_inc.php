<?php
/*
  @Author: ananayarora
  @Date:   2016-10-21T00:46:22+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T02:24:09+05:30
*/

    $loaded = 1;
    include_once('backend/inc/mysqli.php');
    include_once('backend/inc/conf.php');
    include_once('backend/inc/functions.php');

    $f = new Functions();
    $f->session();

    error_reporting(0);

  
    $user = $f->getUser($_SESSION['uid']);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Feed</title>
        <link rel="stylesheet" href="css/dashboard.css" media="screen" title="no title">
        <link rel="stylesheet" type="text/css" href="css/feed.css">
        <link rel="stylesheet" type="text/css" href="css/css.css">
    </head>
    <body>
        <?php
            require("header.php");
        ?>
        <div class="wrapper">
            <div class="sidebar">
                <?php if ($user['fbid'] != "") { ?>
                    <img class="profile_pic" src="muk.png" alt="" />

                <?php } else { ?>
                    <img class ="profile_pic" src="muk.png" alt="" />
                <?php } ?>
                <br />
                <br />
                <p class="name">Vishrut Malik</p>
                <br>
                <br>
                <div class="voyage_button" onclick="window.location.href='voyage.php'">VOYAGE!</div>
                <nav>
                    <ul>
                        <li><a href="dashboard.php">Feed</a></li>
                        <li><a href="trips.php">My trips</a></li>
                    </ul>
                </nav>
            </div>
