<?php require_once("process.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Upload</title>
  </head>  
  <body>
    <?php 

        if(isset($errors)){
          echo "<div style='color:red'>$errors</div>";
        }

     ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
      <p>Images allowed (.jpg, .jpeg, .png, .gif)</p>
      <input type="file" name="img">
      <input type="submit" name="upload" value="Upload">
    </form>
  </body>
</html>