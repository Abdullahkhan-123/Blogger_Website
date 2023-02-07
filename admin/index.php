<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php include('../partial/admin-header.php') ?>
      <!-- content start -->

            <h1>
              <?php                                      
                echo 'Welcome ', $_SESSION['UserName'];                
              ?>
            </h1>

      <!-- content end -->
      
    <?php include('../partial/admin-footer.php') ?>
  
</body>
</html>