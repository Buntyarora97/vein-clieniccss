<?php include_once('header.php'); ?>
	<nav class="navbar navbar-expand fixed-top">
  <ul  class="navbar-nav mr-auto align-items-center">
					<li class="nav-item">
					  <a class="nav-link toggle-menu" href="javascript:void();">
					   <i class="icon-menu menu-icon"></i>
					 </a>
					</li>
					<li class="nav-item">
					    <a class="nav-link active" href="add-Registration.php">
						<button type="button" class="btn btn-primary waves-effect waves-light m-1"><i class="fa fa-save"></i> Add</button></a>
					  </li>
					  <li class="nav-item">
					   <a class="nav-link active" href="show-Registration.php">
						<button type="button" class="btn btn-warning waves-effect waves-light m-1"><i class="fa fa-edit"></i>Update</button></a>
					  </li>
					  
					   
					 
  </ul>
			
  <ul class="navbar-nav align-items-center right-nav-link">
   
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/images/avatars/avatar-13.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
        <li class="dropdown-item"><a href="change-password.php"><i class="icon-settings mr-2"></i>Change Password</a></li>
        
        <li class="dropdown-item"><a href="logout.php"><i class="icon-power mr-2"></i> Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>

<div class="clearfix"></div>
<!-------------------------->
  <div class="content-wrapper"  >
    <div class="container-fluid">
    
     <div class="row pt-2 pb-2">
        <div class="col-sm-12">
		    <h4 class="page-title">Registration Section</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();"> Add Registration</a></li>
          
         </ol>
	   </div>
	  
     </div>
     <div class="row" style="margin-bottom:150px;">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="#" method="POST" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                  Add Registration
                </h4>
                <div class="form-group row">
                  <label for="enqnam" class="col-sm-2 col-form-label"> Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="enqnam" name="enqnam">
                  </div>
                  <label for="enqmob" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" id="enqmob" name="enqmob">
                  </div>
				   
                </div>
                <div class="form-group row">
                  <label for="enqmsg" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" id="enqeml" name="enqeml">
                  </div>
                  <label for="visit" class="col-sm-2 col-form-label">Subject</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="visit" name="visit">
                  </div>
                </div>
				<div class="form-group row">
				
                  <label for="enqmsg" class="col-sm-2 col-form-label">Message</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="4" id="visit" name="enqmsg"></textarea>
                  </div>
                </div>
				
                

             

                <div class="form-footer">
                    <button  style="float:right" type="submit" name="btn2" id="btn2" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
				<?php
					include('connection.php');
											if(isset($_POST['btn2']))
											{
											$enqnam=mysqli_real_escape_string($dbcon,$_POST['enqnam']);
											$enqmob=mysqli_real_escape_string($dbcon,$_POST['enqmob']);
											$enqeml=mysqli_real_escape_string($dbcon,$_POST['enqeml']);
						$visit=mysqli_real_escape_string($dbcon,$_POST['visit']);
											$enqmsg=mysqli_real_escape_string($dbcon,$_POST['enqmsg']);											
				$query="insert into registration(enqnam,enqmob,enqeml,visit,enqmsg,added,date) VALUES ('$enqnam','$enqmob','$enqeml','$visit','$enqmsg','By Admin',CURDATE());";
											if(mysqli_query($dbcon,$query))
											{
											echo "<script> alert('Registration Submitted Successfully');</script>";
											}
											else{
											echo mysqli_error($dbcon);
											}											
											}
											?>	
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    
    </div>
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
   
	<!---<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019  Admin
        </div>
      </div>
    </footer>--->

  <!--- <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
      </ul>
      
     </div>
   </div>=---->
 
   
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>

  <script src="assets/js/sidebar-menu.js"></script>
 
  <script src="assets/js/app-script.js"></script>

    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script>

    $().ready(function() {

    $("#personal-info").validate();

  
    $("#signupForm").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            username: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
             contactnumber: {
                required: true,
                minlength: 10
            },
            topic: {
                required: "#newsletter:checked",
                minlength: 2
            },
            agree: "required"
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            email: "Please enter a valid email address",
            contactnumber: "Please enter your 10 digit number",
            agree: "Please accept our policy",
            topic: "Please select at least 2 topics"
        }
    });

});

    </script>
	 
</body>
</html>
