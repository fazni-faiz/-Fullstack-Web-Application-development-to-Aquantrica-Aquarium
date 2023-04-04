<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>File Upload Test 1 / Step 1</h1>
    <hr>
    <form action="upload_test2.php" method="post"
    enctype="multipart/form-data">
      <label for="">Title</label>
      <input type="text" name="title" value=""><br />
      <label for="">Price</label>
      <input type="number" name="price" value=""><br />

      <label for="">Picture</label>
      <input type="file" name="picture" value=""
      accept=".jpg,.jpeg" ><br />


      <input type="submit" name="" value="Submit">
    </form>
  </body>
</html>
