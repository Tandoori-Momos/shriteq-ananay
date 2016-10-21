<?php
/*
  @Author: ananayarora
  @Date:   2016-10-21T01:08:12+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T01:08:44+05:30
*/

    session_start();
    unset($_SESSION);
    session_destroy();
    header("Location: index.php");
?>
