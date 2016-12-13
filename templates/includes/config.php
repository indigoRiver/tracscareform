<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $host = "localhost";
  $user = "root";
  $pass = "root";
  $db = "tracscare";

  $connection = mysqli_connect($host, $user, $pass) or die;

  mysqli_select_db($connection, $db);

?>
