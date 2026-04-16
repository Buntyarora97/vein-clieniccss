<?php session_start(); ?>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>DR. RAJA’S VEIN & INTERVENTION CLINIC</title>
 
  <link rel="icon" href="assets/images/favi.ico" type="image/x-icon">
  
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>

  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

  <!--- <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>-->
  
 <div id="wrapper">

 <div class="loader-wrapper">
 <div class="lds-ring">
 
 </div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img style="width:320px; height:50px;" src="assets/images/logo.png" alt="logo icon" >
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign in to your account
		  <p style="font-size:12px;">Please enter your name and password to log in.
					</p>
					</div>
					
					
		    <form class="#" method="POST" action="#">
						 <?php
							include('connection.php');
							if(isset($_POST['btn1']))
							{
								$name=mysqli_real_escape_string($dbcon,$_POST['name']);
								$password=mysqli_real_escape_string($dbcon,$_POST['password']);
							
								$q="select * from tbusr where usrnam='$name' and pwd='$password'";
								$r=mysqli_query($dbcon,$q);
								if(mysqli_num_rows($r)>0)
								{  
								$_SESSION['name']=$name;
								$_SESSION['password']=$password;
								header('location:add-enquiry.php');
								}
								else
								{
									echo "<script> alert('Username and password are invalid');</script>";
									
								}
							}
						?>
			<div class="form-group">
			  <label for="" class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="name" name="name" class="form-control input-shadow" placeholder="Enter Username">
				  <div class="form-control-position">
					  <i class="icon-user" style="line-height: 54px;"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="password" name="password" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock" style="line-height: 54px;"></i>
				  </div>
			   </div>
			  </div>
			 
			 <button type="submit" name="btn1" id="btn1" class="btn btn-light btn-block">Sign In</button>
			  
			 
			 </form>
		   </div>
		  </div>
		
	     </div>
    
   
 
	
	</div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <script src="assets/js/sidebar-menu.js"></script>
  
  <script src="assets/js/app-script.js"></script>
  
</body>
</html>
