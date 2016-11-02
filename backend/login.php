<?php
/*
  @Author: ananayarora
  @Date:   2016-10-03T14:14:46+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T00:42:31+05:30
*/
    session_start();

    require('inc/mysqli.php');
    require('inc/conf.php');

    $c = new Conf();
    $o = new MysqliDb($c->host, $c->username, $c->password, $c->db);

    $o->where("username",$o->escape(htmlspecialchars($_POST['username'])));
    $o->where("password",md5($_POST['password']));
    $o->get("users");

    if ($o->count) {
        $_SESSION['username'] = $_POST['username'];
        echo "success";
    } 

?>
