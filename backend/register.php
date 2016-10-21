<?php
/*
  @Author: ananayarora
  @Date:   2016-10-12T14:54:07+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T00:54:26+05:30
*/
    require('inc/mysqli.php');
    require('inc/conf.php');
    require('inc/functions.php');

    $f = new Functions();

    if (!isset($_POST['username'])) {
        header("HTTP/1.1 403 Forbidden");
        die();
    }

    if ($f->checkEmail($f->secure($_POST['email']))) {
        die("Email is already in use.");
    }

    if ($f->checkUsername($f->secure($_POST['username']))) {
        die("Username is already in use.");
    }

    if ($_POST['password'] != $_POST['confirm_password']) {
        die("Both Password fields do not match.");
    }

    if (!$f->validateEmail($_POST['email'])) {
        die("Invalid Email");
    }

    foreach ($_POST as $key => $value) {
        $signup[$key] = $f->secure($value);
    }
    $signup['password'] = md5($signup['password']);
    $signup['ip'] = $_SERVER['REMOTE_ADDR'];
    $signup['timestamp'] = time();
    unset($signup['confirm_password']);
    $f->o->insert("users",$signup);

    echo "success";

?>
