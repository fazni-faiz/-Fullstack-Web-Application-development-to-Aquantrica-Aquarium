<?php
//1st start the session in order to work with
session_start();

if(isset($_SESSION['user_id'])){
  //nothing to do
}
else{
  //die('not logged in');
  header("location:invalid_login.php");
}
 ?>
