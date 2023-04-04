<?php
  //restricting the user
  require("validate_user_inc.php");
 //connect to the database
 require("db_connection.php");

 //lets view the form contents
 /*echo "<pre>";
 print_r($_REQUEST);
 echo "</pre>";*/

 //lets store the form field values in variables
$pid         = $_REQUEST['pid'];
$title       = addslashes($_REQUEST['title']);
$description = addslashes($_REQUEST['description']);
$price       = addslashes($_REQUEST['price']);
$stock_bal   = addslashes($_REQUEST['stock_bal']);

//lets build an SQL cammand dynamically
$sql  = "update product set ";
$sql .= "title='$title',";
$sql .= "description='$description',";
$sql .= "price=$price,";
$sql .= "stock_bal=$stock_bal ";//make sure the space is there
$sql .= " where pid=$pid";

//lets execute the sql command
$x = $mysqli->query($sql);

if($x > 0){
  header("location:edit_product_4.php?status=pass");
}
else{
  header("location:edit_product_4.php?status=fail");
}

 ?>
