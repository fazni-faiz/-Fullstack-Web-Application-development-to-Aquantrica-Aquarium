<?php
  //restricting the user
  require("validate_user_inc.php");

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
  $title       = addslashes($_REQUEST['title']);
  $description = addslashes($_REQUEST['description']);
  $price       = addslashes($_REQUEST['price']);
  $stock_bal   = addslashes($_REQUEST['stock_bal']);

  //lets build a dynamic SQL  command to save the
  //record in product table in the database db_aqua

  $sql  = "insert into product (title,description,price,stock_bal) values(";
  $sql .= "'$title',";
  $sql .= "'$description',";
  $sql .= "$price,";
  $sql .= "$stock_bal)";

  //echo $sql;

  //lets execute the sql command

  $x = $mysqli->query($sql);

  //making sure the sql command got executed properly
  if($x > 0){
      //echo "record successfully added / created!";
      //lets redirect the user
      header("location:add_product_3.php?status=pass");
  }
  else{
      //echo "sorry saving / creating record failed!";
      //lets redirect the user
      header("location:add_product_3.php?status=fail");
  }





 ?>
