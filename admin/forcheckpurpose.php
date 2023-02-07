<?php include('../config/constant.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


           
<div class="container mt-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-5 order-2 order-lg-1" style="padding-top:50px;">

                <p class="h2 fw-bold col-12 mb-3 mx-1 mx-md-4">Add Cetagory</p>

                <form class="mx-1 mx-md-4" action="" method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="CName" placeholder="Category" required/>
                      <label class="form-label" for="form3Example1c">Category</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg text-white" name="sumbit" value="Add Category">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../assets/images/about-us.jpg"
                  class="img-fluid" alt="Sample image"style="width:90%">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



</body>
</html>


<?php

      // the form Values Save in Database

      // check weather the sumbit button clicked or not

      if(isset($_POST['sumbit']))
      {        
          // button clicked
          // get data from form
          $CName = $_POST['CName'];

          // sql query to save into database
          
          $sql = "INSERT INTO `category`(`Category`) VALUES ('$CName')";

          // Excute the query and save into database
          // Excute the query and save into database (:-) Save in the constants file


          // saving data into database
          $res = mysqli_query($conn, $sql) or die(mysqli_error());

          // check wather the data is inserted

          if($res==TRUE)
          {            
            // redirect to the page
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Category Added Successfully')
                  window.location.href='index-category.php';
                  </script>";
          }
          else{            
            // redirect to the page
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Category Not Added')
                  window.location.href='add-category.php';
                  </script>";
          }
      }
?>