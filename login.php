<?php include('partial/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Bloggers">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>BLOGGER SPOT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/authlogin.css">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

  <div class="color">    

    <br><br><br>

    <!-- page content -->

    <div class="content-w3ls">
			<div class="text-center icon">
				<span class="fa fa-html5"></span>
			</div>
			<!---728x90--->
			<div class="content-bottom">
				<form action="" method="POST">
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="Email" id="text1" type="text" value="" placeholder="Email" required="">
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="Password" id="myInput" type="Password" placeholder="Password">
						</div>
					</div>
					<div class="wthree-field">
						<!-- <button type="submit" class="btn">SignIn</button> -->
						<input type="submit" class="btn" id="btn" name="submit" value="SignIn">
					</div>
					<ul class="list-login">
						<li class="switch-agileits">
							<label class="switch">
								<input type="checkbox">
								<span class="slider round"></span>
								keep Logged in
							</label>
						</li>
						<li>
							<a href="auth/forgot.php" class="text-right">forgot password?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
					<ul class="list-login-bottom">
						<li class="#">
							<a href="register.php" class="">Create Account</a>
						</li>
						<li class="">
							<a href="contact.php" class="text-right">Need Help?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
				</form>
			</div>
		</div>

    <!-- page content end -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    </div>
  </body>
</html>


<?php

	  if(isset($_POST['submit']))
	  {
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];

		$sql = "SELECT * FROM `users` WHERE `Email`='$Email' AND `pPassword`='$Password'";

		$res = mysqli_query($conn,$sql);

		$rowIntToArr = mysqli_num_rows($res);		

		if($rowIntToArr>0)
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$_SESSION['UserName'] = $row['UserName'];
				$_SESSION['FullName'] = $row['FullName'];
				$_SESSION['Email'] = $row['Email'];
				$_SESSION['Userpass'] = $row['pPassword'];
				$_SESSION['RoleType'] = $row['RoleType'];
				$_SESSION['Verify'] = $row['Verification'];

				if($_SESSION['Verify']==1){

				
				if($_SESSION['RoleType']=='Admin')
				{
					echo "<script> window.location.href='admin/index.php';</script>";
				}
				elseif($_SESSION['RoleType']=='User'){
					echo "<script> window.location.href='userdashboard/index.php';</script>";
				}
			}
			else
			{
				echo "<script>
				alert('Email Not verified! Please verify your Email Address.')
				window.location.href='index.php';
				</script>";
				session_destroy();
			}
			}
		}
		else{

			echo "<script>
					alert('Email or Password Is Invalid!');
					window.location.href='login.php';
				  </script>";
		}

	  }

?>