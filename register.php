<?php 
include('partial/header.php');

include('config/constant.php');

 ?>
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

    

    <br>

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
							<input name="UserName" id="myInput" type="text" placeholder="UserName">
						</div>
					</div>
                    <div class="field-group">
						<span class="fa fa-id-card-alt" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="FullName" id="myInput" type="text" placeholder="FullName">
						</div>
					</div>
                    <div class="field-group">
						<span class="fa fa-user-circle" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="Email" id="myInput" type="email" placeholder="Email">
						</div>
					</div>
                    <div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="Password" id="myInput" type="Password" placeholder="Password">
						</div>
					</div>                    
					<div class="wthree-field">
						<!-- <button type="submit" class="btn">SignUp</button> -->
						<input type="submit" class="btn" id="btn" name="submit" value="SignUp">
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
							<a href="#" class="text-right">forgot password?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
					<ul class="list-login-bottom">
						<li class="">
							<a href="login.php" class="">Login</a>
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

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


        function sendMail($Email,$V_code)
        {
            //Load Composer's autoloader
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
            require 'PHPMailer/Exception.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            
        try {
            //Server settings            
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'abdullahkhanstft@gmail.com';           //SMTP username
            //Gmail account Password: (vdufjyyjwjdymzag)
            $mail->Password   = 'vdufjyyjwjdymzag';                     //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('abdullahkhanstft@gmail.com','Bloggers Spot');
            $mail->addAddress($Email);     //Add a recipient
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email Verification from Bloggers Spot';
            $mail->Body    =  "<span style='font-size:large; font-family:Cursive; font-weight:400px; color:#427BCB;'>Thanks for Registration click the link below to verify the Email Address</span>
                              <a href='http://localhost/blog/emailverify.php?Email=$Email&V_Code=$V_code' style='font-size:25px;'>Verify</a>
                              ";
            $mail->send();
            return true;

            }
        catch (Exception $e) {
                  
                return false;

          }
        } 



if(isset($_POST['submit'])){

		$UserName = $_POST['UserName'];
		$FullName = $_POST['FullName'];
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		$V_code = bin2hex(random_bytes(3));
		$type = 'User';

		$select = "SELECT * FROM `users` WHERE `Email`= '$Email' OR `UserName`='$UserName'";

		$res = mysqli_query($conn,$select);

		$checkrow = mysqli_num_rows($res);

		if($checkrow>0)
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$UserName = $row['UserName']==$_POST['UserName'];
				$Email = $row['Email']==$_POST['Email'];

				if($UserName==TRUE)
				{
					echo "<script>
							alert('This username already taken')
							window.location.href='register.php';
				  		  </script>";
				}
				if($Email==TRUE)
				{
					echo "<script>
							alert('This Email is already taken')
							window.location.href='register.php';
						</script>";
				}
			}			
		}
		else
			{
				$sql = "INSERT INTO `users`(`UserName`, `FullName`, `Email`, `RoleType`, `V_Code`,`pPassword`) VALUES ('$UserName','$FullName','$Email','$type','$V_code','$Password')";				

				if( mysqli_query($conn,$sql) && sendMail($_POST['Email'],$V_code))
				{
					echo "<script>
							alert('User register Seccuesfully')
							window.location.href='login.php';
				  		  </script>";
				}

			}
		
		
		
		
		
		
		
		
		
		
		
		// {

		// 	echo "<script>
		// 			alert('User register Seccuesfully')
		// 			window.location.href='login.php';
		// 		  </script>";
		// }
		// else
		// {
		// 	echo "<script>
		// 			alert('User not register')
		// 			window.location.href='register.php';
		// 		  </script>";
		// }



}


?>