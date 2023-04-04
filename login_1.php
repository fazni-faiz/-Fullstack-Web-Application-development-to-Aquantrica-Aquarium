<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css" />

    <!--  -->
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

    <!--  -->

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
        <div class="col-lg-4 col-md-4 d-block m-auto p-5" style="background-color:#e4e4e4;">

          <h1 class="display-5 mt-3">Sign In</h1>
          <h5 class="h5 text-dark">Authorized Access Only</h5>
          <form class="" action="login_2.php" method="post">
            <div class="form-group">
              <label for="" class="form-label mt-4">Username</label>
              <input type="text" class="form-control"
              name="user_id" value="">
            </div><!-- end of form group-->

            <div class="form-group">
              <label for="" class="form-label mt-4">Password</label>
              <input type="password" class="form-control"
              name="access_code" value="">
            </div><!-- end of form group-->

            <div class="form-group">
              <label for="" class="form-label mt-4 mb-4"></label>
              <input type="submit" class="btn btn-success" value="Login">
              <input type="reset" class="btn btn-danger" value="Cancel">
            </div><!-- end of form group-->
          </form>
        </div><!-- end of col-4 -->
    </div><!-- end of container -->



    <div class="footer">
        <?php
            include("footer.inc.php");
        ?>
    </div>



<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
