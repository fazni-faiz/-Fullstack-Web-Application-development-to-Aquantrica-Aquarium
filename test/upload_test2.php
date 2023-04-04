<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>File Upload Test 1 / Step 2</h1>
    <hr>
    <?php
      //lets handle the data
      echo "<pre>";
      print_r($_REQUEST);
      print_r($_FILES);
      echo "</pre>";

      if(($_FILES['picture']['error']==0) && ($_FILES['picture']['type']=="image/jpeg")){
        $filename = $_FILES['picture']['tmp_name'];
        //$destination = $_FILES['picture']['name'];
        $destination = "aqw_" . rand().rand().rand().".jpg";
        $path = "pictures/large/";
        $x = move_uploaded_file($filename,$path.$destination);
        if($x>0){
          echo "file upload was succssfull";
          $y = copy($path.$destination,"pictures/thumbs/".$destination);
          if($y>0){
            echo "file copy also successfull";
          }
          else{
            echo "file copy part failed.!";
          }
        }
        else{
          echo "uploading - moving file failed";
        }
      }
      else{
        echo "Sorry uploading Failed";
      }



     ?>


  </body>
</html>
