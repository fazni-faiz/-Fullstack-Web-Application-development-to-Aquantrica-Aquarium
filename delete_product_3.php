<?php
  //restricting the user
  require("validate_user_inc.php");

  require("db_connection.php");

  //get the Product ID (pid) the build an SQL command
  $pid = $_REQUEST['pid'];

  $sql =  "insert into product_archive select * from product "; //space must
  $sql .= " where pid=$pid";

  //execute the SQL command
  $x = $mysqli->query($sql);

  if($x > 0){
    //making the backup of the record was successful
    //then lets delete the record permanently from the table product
    $sql_del = "delete from product where pid=$pid";

    //execute the SQL command
    $y = $mysqli->query($sql_del);

    if($y > 0){
      //hooray everything went well lets re direct the user to
      //delete_product_4.php with the status pass
      header("location:delete_product_4.php?status=pass");
    }
    else{
      //delete failed so lets send the user to delete_product_4.php
      //with the status failed
      header("location:delete_product_4.php?status=fail");
    }//end of if - $y part
  }
  else{
    //we should re direct the user to delete_product_4.php
    //with the fail status
    header("location:delete_product_4.php?status=fail");
  }





 ?>
