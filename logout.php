<?php
  //logout
  //make sure you start session first then destroy it
  session_start();
  session_destroy();
  header("location:dashboard.php");
 ?>
