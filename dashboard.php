<?php
  //restricting the user
  require("validate_user_inc.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            <div class="col-lg-12 col-md-12">
              <h3>Welcome : <span class="text-success">
                <?php
                    $user =  $_SESSION['user_id'];
                    $arr  = explode("@",$user);
                    echo $arr[0];
                 ?>
              </span> </h3>
            </div>
        </div><!-- end of row-->

        <div class="row">

          <div class="col-lg-3 col-md-3">
            <h3 class="text-center mt-3">Add New Products</h3>
            <hr>
            <p>Use this option to create a new product record. fill in the
            necessary fields</p>
            <a href="add_product_1.php" class="btn btn-success d-block m-auto
            col-5 mb-3">CREATE</a>
          </div><!-- end of col-3 -->

          <div class="col-lg-3 col-md-3">
            <h3 class="text-center mt-3">Update Products</h3>
            <hr>
            <p>Use this option to update product records. fill in the
            necessary fields<br />&nbsp;</p>
            <a href="edit_product_1.php" class="btn btn-info d-block m-auto
            col-5 mb-3">UPDATE</a>
          </div><!-- end of col-3 -->

          <div class="col-lg-3 col-md-3">
            <h3 class="text-center mt-3">Delete Products</h3>
            <hr>
            <p>Use this option to delete product records. fill in the
            necessary fields<br />&nbsp;</p>
            <a href="delete_product_1.php" class="btn btn-danger d-block m-auto
            col-5 mb-3">DELETE</a>
          </div><!-- end of col-3 -->


          <div class="col-lg-3 col-md-3">
            <h3 class="text-center mt-3">Search Products</h3>
            <hr>
            <p>Use this option to locate product records. fill in the
            necessary fields<br />&nbsp;</p>
            <a href="search_product_1.php" class="btn btn-dark d-block m-auto
            col-5 mb-3">SEARCH</a>
          </div><!-- end of col-3 -->


        </div><!-- end of row-->

        <div class="row">
          <div class="col-12">
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3">
            <h3 class="text-center mt-3">Logout</h3>
            <hr>
            <p>Use this option to safely sign off / logout from your account
            <br />&nbsp;</p>
            <a href="logout.php" class="btn btn-dark d-block m-auto
            col-5 mb-3">Log Out</a>
          </div><!-- end of col-3 -->
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
