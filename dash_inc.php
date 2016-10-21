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

    if (!isset($_SESSION['uid'])) {
        header('HTTP/1.1 403 Forbidden');
        die();
    }

    $user = $f->getUser($_SESSION['uid']);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Feed</title>
        <link rel="stylesheet" href="css/dashboard.css" media="screen" title="no title">
    </head>
    <body>
        <?php
            require("header.php");
        ?>
        <div class="wrapper">
            <div class="sidebar">
                <?php if ($user['fbid'] != "") { ?>
                    <img class="profile_pic" src="https://graph.facebook.com/<?php echo $user['fbid']; ?>/picture?type=large" alt="" />

                <?php } else { ?>
                    <img src="profile_pic" src="https://pixabay.com/static/uploads/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" />
                <?php } ?>
                <br />
                <br />
                <p class="name"><?php echo $user['first_name'] . " " . $user['last_name'];?></p>
                <div class="voyage_button" onclick="window.location.href='voyage.php'">VOYAGE!</div>
                <nav>
                    <ul>
                        <li><a href="dashboard.php">Feed</a></li>
                        <li><a href="trips.php">My trips</a></li>
                    </ul>
                </nav>
            </div>
