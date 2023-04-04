<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding a new Service</title>
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

                <h3>Add New Service</h3>
                <hr>
                <!-- insert thte action part mention the file to accept form data from this page -->
                <form action="add_product_2.php" method="post" class="form my-5 col-lg-8 col-md-8">
                    <div class="form-group">
                        <label class="form-label mt-4" for="inputValid">Customer Name</label>
                        <input type="text"
                        value="" name="title"
                        class="form-control" id="inputValid">
                        <div class="valid-feedback">Customer Name is ok</div>
                    </div><!--end of form group -->

                    <div class="form-group">
                        <label class="form-label mt-4" for="inputValid">
                          Service Type
                        </label>
                        <textarea name="description" class="form-control"
                        id="inputValid"></textarea>
                        <div class="valid-feedback">Service Type is ok</div>
                    </div><!--end of form group -->


                    <div class="form-group">
                        <label class="form-label mt-4" for="inputValid">
                          Date</label>
                        <input type="text" value="" name="price" class="form-control" id="inputValid">
                        <div class="valid-feedback">Date is ok</div>
                    </div><!--end of form group -->

                    <div class="form-group">
                        <label class="form-label mt-4" for="inputValid">
                          Amount</label>
                        <input type="text" value="" name="stock_bal" class="form-control" id="inputValid">
                        <div class="valid-feedback">Amount is ok</div>
                    </div><!--end of form group -->



                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>

                </form>


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
