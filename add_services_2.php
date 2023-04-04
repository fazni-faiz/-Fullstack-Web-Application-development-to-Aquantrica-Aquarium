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
  $customer_name  = $_REQUEST['customer_name'];
  $service_type = $_REQUEST['service_type'];
  $ser_date = $_REQUEST['ser_date'];
  $amount = $_REQUEST['amount'];

  //lets build a dynamic SQL  command to save the
  //record in product table in the database db_aqua

  $sql  = "insert into services (customer_name,service_type,ser_date,amount) values(";
  $sql .= "'$customer_name',";
  $sql .= "'$service_type',";
  $sql .= "$ser_date,";
  $sql .= "$amount)";

  //echo $sql;

  //lets execute the sql command

  $x = $mysqli->query($sql);

  //making sure the sql command got executed properly
  if($x > 0){
      //echo "record successfully added / created!";
      //lets redirect the user
      header("location:services_3.php?status=pass");
  }
  else{
      //echo "sorry saving / creating record failed!";
      //lets redirect the user
      header("location:services_3.php?status=fail");
  }





 ?>
