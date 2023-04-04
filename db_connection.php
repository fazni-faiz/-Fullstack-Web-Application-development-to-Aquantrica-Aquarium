<?php
  //database connection to the MariaDB - db_aqua
  $host     = "localhost";
  $username = "root";
  $password = "";
  $db_name  = "db_aqua";

  $mysqli = new mysqli($host, $username, $password, $db_name);

  if($mysqli->connect_errno){
    die('Connection Failed');
  }
  echo "connection successeful";
 ?>
