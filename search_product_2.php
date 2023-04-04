<?php
  //restricting the user
  require("validate_user_inc.php");
  //connection to the database here
  require("db_connection.php");
  $search_by = $_REQUEST['search_by'];
  $keywords  = $_REQUEST['keywords'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Product Information</title>
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

                <h3>Search Product Info / Step 2/2</h3>
                <h4 class="text-info">Search for the Product Records</h4>
                <hr>

                <form action="search_product_2.php" method="post" class="form">
                    <div class="row">
                    <div class="form-group col-lg-5 d-inline-block">
                        <label for="" class="form-label">Search By</label>
                        <select name="search_by" class="form-control" style="display:inline-block;width:70%;" id="search_by">
                            <option value="pid">Product ID</option>
                            <option value="title">Title</option>
                            <option value="description">Description</option>
                            <option value="price">Price less than</option>
                        </select>
                    </div><!-- end of form-group -->
                    <div class="form-group col-lg-5">
                        <label for="" class="form-label" style="padding-right:20px;">Keywords </label>
                        <input type="text" name="keywords" class="form-control" style="display:inline-block;width:70%;"  id="keywords" />

                    </div><!-- end of form-group -->

                    <div class="form-group col-lg-2">
                        <input type="submit" value="SEARCH" class="btn btn-success">
                    </div><!-- end of form-group -->

                    </div><!-- end of row-->
                </form>


            </div><!-- end of div col-8 -->

        </div><!-- end of row-->
    </div>

    <div class="container">

      <div class="row">

        <div class="col-lg-12 col-md-12">

          <h1 class="display-6">Search Results</h1>
          <hr>
          <table class="table table-bordered table-striped table-hover">
            <tr>
              <th>PID</th>
              <th>Title</th>
              <th>Description</th>
              <th>Price</th>
              <th>Picture</th>
              <th>Actions</th>
            </tr>
            <!-- lets search for the records then display then bellow -->
            <?php
                //lets recieve the values from the form (user)
                //to variables

                /*echo "<pre>";
                print_r($_REQUEST);
                echo "</pre>";*/

                //following 2 line were moved before the form part
                //to make the selection of the combo box item and keywords sections
                //appear properly
                /*$search_by = $_REQUEST['search_by'];
                $keywords  = $_REQUEST['keywords'];*/

                //lets build an SQL command dynamically
                $sql = "";
                switch($search_by){
                  case "pid":
                    $sql = "select * from product where pid=$keywords";
                    break;
                  case "title":
                    $sql  = "select * from product where title='$keywords'";
                    $sql .= " or title like '%$keywords%'";
                    break;
                  case "description":
                    $sql = "select * from product where description='$keywords' or description like '%$keywords%'";
                    break;
                  case "price":
                   $sql = "select * from product where price <= $keywords";
                   break;
                }

                // echo "<pre>";
                // echo $sql;

                //lets execute the sql command
                $rs = $mysqli->query($sql);

                //lets see whether we have got any records matching..
                if(mysqli_num_rows($rs) > 0){
                  while($row = mysqli_fetch_assoc($rs)){
                    ?>
                    <tr>
                      <td><?php echo $row['pid'];?></td>
                      <td><?php echo $row['title'];?></td>
                      <td><?php echo $row['description'];?></td>
                      <td><?php echo $row['price'];?></td>
                      <td><?php echo $row['picture'];?></td>
                      <td style="width:15%">
                        <a href="edit_product_2.php?pid=<?php echo $row['pid']; ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="delete_product_2.php?pid=<?php echo $row['pid'];?>" class="btn btn-danger btn-sm  ">Del</a>
                      </td>
                    </tr>
                    <?php
                  }//end of while
                }
                else{
                  //sorry no records found so lets display an error message
                  ?>
                  <tr>
                    <td colspan="6">
                      <h3 class="display-6 text-danger">Sorry No Matching Recods Were Found!</h3>
                    </td>
                  </tr>
                  <?php
                }



             ?>
          </table>


        </div><!-- end of div col-12 -->


      </div><!-- end of row-->


    </div><!-- end of container-->




    <div class="footer">
        <?php
            include("footer.inc.php");
        ?>
    </div>



<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
