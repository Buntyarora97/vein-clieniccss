<?php session_start(); ?>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Change-password</title>
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
 
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
 
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
  
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		  <div class="card-title text-uppercase pb-2">Reset Password</div>
		  
		  
		<form action="#" method="POST" enctype="multipart/form-data">
								<?php 
        $uid1=$_SESSION['name'];
        include_once("connection.php");
   
    		if(isset($_POST['btnreset']))
    		{
    		$oldpwd=$_POST['oldpwd'];
    		$newpwd=$_POST['newpwd'];
			
    		$repwd=$_POST['repwd'];
			$q="select * from tbusr where usrnam='$uid1'";
    		$chg_pwd=mysqli_query($dbcon,$q);
    		$chg_pwd1=mysqli_fetch_array($chg_pwd);
    		$data_pwd=$chg_pwd1['pwd'];
    		if($data_pwd==$oldpwd){
    		if($newpwd==$repwd){
				$q1="update tbusr set pwd='$newpwd' where usrnam='$uid1'";
    			$update_pwd=mysqli_query($dbcon,$q1);
    			echo "<script>alert('Password Updated Sucessfully'); window.location='logout.php'</script>";
    		    }
    		else{
    			echo "<script>alert('Your new and Retype Password does not match'); window.location='change-password.php'</script>";
    		    }
    		}
    		else
    		{
    		echo "<script>alert('Your old password is wrong'); window.location='change-password.php'</script>";
    		}
			}
			
    	?>			
											
			  <div class="form-group">
			  <label for="oldpwd" class="">Old Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="oldpwd" name="oldpwd" class="form-control input-shadow" placeholder="Old Password">
				  <div class="form-control-position">
					  <i class="fa fa-lock"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="newpwd" class=""> New Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="newpwd" name="newpwd" class="form-control input-shadow" placeholder="New Password">
				  <div class="form-control-position">
					  <i class="fa fa-lock"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label for="repwd" class="">Confirm Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="repwd" name="repwd" class="form-control input-shadow" placeholder="Confirm Password">
				  <div class="form-control-position">
					  <i class="fa fa-lock"></i>
				  </div>
			   </div>
			  </div>
			  <button type="submit" name="btnreset" id="btnreset" class="btn btn-light btn-block mt-3">Reset Password</button>
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
