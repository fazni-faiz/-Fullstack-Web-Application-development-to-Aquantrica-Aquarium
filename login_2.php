<?php
//start the session feature must be done 1st
 session_start();
//connecting to the DB
  require("db_connection.php");

  /*echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";*/

  //lets copy the user entered values (credentials)
  $user_id     = $_REQUEST['user_id'];
  $access_code = $_REQUEST['access_code'];

  //lets search the database table logs for the username
  $sql = "select * from logs where user_id='$user_id'";

  //lets execute the sql command and see whether the user is exitisting
  $rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    //horray username was correct OR found
    //now lets check wether the password also matches
    $row = mysqli_fetch_assoc($rs);
    if($row['access_code'] === crypt($access_code,$row['access_code'])){
      //echo "awesome - username and password both matched";
      header("location:dashboard.php");
      //lets store the credentials (username password and group)
      $_SESSION['user_id']  = $user_id;
      $_SESSION['user_grp'] = $row['user_grp'];
    }
    else{
      //echo "password is not matching";//don't comment like this
      header("location:invalid_login.php");
    }

  }
  else{
    //username not found
    //echo "username not found.!";//never give error messages like this
    header("location:invalid_login.php");
  }




 ?>
