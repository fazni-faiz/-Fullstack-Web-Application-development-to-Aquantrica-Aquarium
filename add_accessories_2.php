<?php
  //connecting to db server
  require("db_connection.php");

  // debug code
  //lets display all the values we recieve
  //from the unser filled form
/*  echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";*/

  //lets copy the values from $_REQUEST array
  //to variables
  $type  = $_REQUEST['type'];
  $acc_name = $_REQUEST['acc_name'];
  $price = $_REQUEST['price'];
  $quantity = $_REQUEST['quantity'];

  //lets build a dynamic SQL  command to save the
  //record in product table in the database db_aqua

  $sql  = "insert into services (type,acc_name,price,quantity) values(";
  $sql .= "'$type',";
  $sql .= "'$acc_name',";
  $sql .= "$price,";
  $sql .= "$quantity)";

  //echo $sql;

  //lets execute the sql command

  $x = $mysqli->query($sql);

  //making sure the sql command got executed properly
  if($x > 0){
      //echo "record successfully added / created!";
      //lets redirect the user
      header("location:accessories_3.php?status=pass");
  }
  else{
      //echo "sorry saving / creating record failed!";
      //lets redirect the user
      header("location:accessories_3.php?status=fail");
  }





 ?>
