<?php
  //restricting the user
  require("validate_user_inc.php");
  //connect to db
  require("db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product Information</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>

    <!-- top nav bar from include file -->
    <?php
        include("nav_bar.inc.php");
    ?>

    <div class="container" style="padding:0px;">
                <?php
                    //have 4 pics in the images folder, therefore generating a number in between 2-4 and
                    //dynamically generating the filename so the banner image would randomly change at each reload
                    $filename = "banner_pic" . rand(1,5) . ".jpg";
                ?>
                <img src="images/<?php echo $filename;?>" style="max-height:350px;"
                class="img img-fluid col-lg-12" alt="banner image for billboard">
    </div><!-- end of container-->

    <div class="container" style="padding:0px;">
        <div class="row">
            <div class="col-lg-4">
                <div class="card bg-secondary mb-3 mt-3" style="max-width: 20rem;">
                    <div class="card-header">A Short About Us</div>
                    <div class="card-body">
                        <h4 class="card-title">AQUATRINICA</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    Contact Now
                    </a>
                </div>
            </div><!-- end of div col-4 -->

            <div class="col-lg-8 mt-3">

                <h3>Delete Product Info</h3>
                <hr>
                <?php
                  //lets recive the pid and put that to a variable
                  $pid = $_REQUEST['pid'];

                  //lets build a SQL command to search for the record
                  $sql = "select * from product where pid=$pid";

                  //lets execute the sql command, BTW $rs stands for resource
                  $rs = $mysqli->query($sql);

                  //lets see how we can get the records count
                  //$count = mysqli_num_rows($rs);
                  //echo "number of records : $count <br />";
                  //die();

                  if(mysqli_num_rows($rs) > 0){
                    //lets take a record at  a time from the resource $rs
                    //$row = mysqli_fetch_array($rs); //returns both index as well as associated key
                    $row = mysqli_fetch_assoc($rs);
                    /*echo "<pre>";
                    print_r($row);
                    echo "</pre>";
                    die();*/
                    //echo "TITLE : " . $row['title']; //just for your reference only
                ?>
                <form action="delete_product_3.php" method="post" class="form my-5 col-lg-8 col-md-8">
                    <h3 class="text-danger">Are you sure you want to delete this record</h3>
                    <!-- create an inpput field and make it hidden and add the
                    product id  to it so it will be not visible to user
                    but it can be sent to the next page for locating the record
                    and further processing-->
                    <input type="hidden" name="pid" value="<?php echo $row['pid'];?>">
                    <div class="form-group">
                        <label class="form-label mt-4" for="inputValid">Title</label>
                        <input type="text"
                        value="<?php echo $row['title']; ?>" name="title"
                        class="form-control" id="inputValid">
                        <div class="valid-feedback">Title is ok</div>
                    </div><!--end of form group -->

                    <div class="form-group">
                        <label class="form-label mt-4" for="inputValid">
                          Description
                        </label>
                        <textarea name="description" class="form-control"
                        id="inputValid"><?php echo $row['description']; ?></textarea>
                        <div class="valid-feedback">description is ok</div>
                    </div><!--end of form group -->


                    <div class="form-group">
                        <label class="form-label mt-4" for="inputValid">
                          Price</label>
                        <input type="text"
                        value="<?php echo $row['price']; ?>" name="price" class="form-control" id="inputValid">
                        <div class="valid-feedback">price is ok</div>
                    </div><!--end of form group -->

                    <div class="form-group">
                        <label class="form-label mt-4" for="inputValid">
                          Stock Balance</label>
                        <input type="text"
                        value="<?php echo $row['stock_bal']; ?>" name="stock_bal" class="form-control" id="inputValid">
                        <div class="valid-feedback">stock balance is ok</div>
                    </div><!--end of form group -->


                    <div class="form-group" style="margin-bottom:20px;">
                        <label class="form-label mt-4" for="inputValid">
                          Picture</label>
                        <input type="file" value="" name="picture" class="form-control" id="inputValid">
                        <div class="valid-feedback">stock balance is ok</div>
                    </div><!--end of form group -->




                    <button type="submit" class="btn btn-danger">CONFIRM DELETE</button>
                    <button type="reset" class="btn btn-dark">CANCEL</button>
                    <!-- <a href="delete_product_1.php" class="btn btn-dark">BACK</a> -->

                </form>
                <?php
              }//end of if part
              else{
                //echo "NO records were found!";
                ?>
                <!-- failure message -->
                <div class="alert alert-dismissible alert-danger">
                    <h3>Failed</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Sorry</strong>
                    No Records were found for Product ID <?php echo $pid; ?>
                    <br>
                    <a href="delete_product_1.php" class="btn btn-danger mt-5">Try Again</a>
                </div>
                <?php
              }
                 ?>

            </div><!-- end of div col-8 -->

        </div><!-- end of row-->
    </div>



    <div class="footer">
        <?php
            include("footer.inc.php");
        ?>
    </div>



<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
