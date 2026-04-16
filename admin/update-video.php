<?php include_once('header.php'); ?>
	<nav class="navbar navbar-expand fixed-top">
  <ul  class="navbar-nav mr-auto align-items-center">
					<li class="nav-item">
					  <a class="nav-link toggle-menu" href="javascript:void();">
					   <i class="icon-menu menu-icon"></i>
					 </a>
					</li>
					<li class="nav-item">
					    <a class="nav-link active" href="add-video.php">
						<button type="button" class="btn btn-primary  waves-effect waves-light m-1"><i class="fa fa-save"></i>Add</button></a>
					  </li>
					  <li class="nav-item">
					   <a class="nav-link active" href="show-video.php">
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
		    <h4 class="page-title">Form Validation</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
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
                  Add Enquiry
                </h4>
				<?php 
													 include('connection.php');
													 $id=$_GET['id'];
													 $counter = 0;
													 $sql="select * from tbvideo where id='$id'";
													  $r=mysqli_query($dbcon,$sql);
													  while($row=mysqli_fetch_array($r))
													  {
													 ?>
              
               
				
				  <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label"> Title</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="title" name="title" required value="<?php echo $row['title']; ?>">
                  </div>
                  <label for="img" class="col-sm-2 col-form-label">Link</label>
                  <div class="col-sm-4">
				  <input type="text" class="form-control" id="link" name="link" required value="<?php echo $row['link']; ?>">
                  </div>
				  
				 </div>
				 <div class="form-group row">
                 
				  <label for="img" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-4">
				  <span>
                     <input type="file" class="form-control" id="img" name="img">
				  </span>
					<img style="margin-top:15px" src="assets/images/upload/product/video/<?php echo $row['pic1']; ?>" id="prev" name="prev" height="100px" width="100px">
				 </div>
				 </div>
				<?php } ?>
             
				<div class="form-footer">
                    <button  style="float:right" type="submit" name="btn3" id="btn3" class="btn btn-primary"><i class="fa fa-edit"></i> Submit</button>
                </div>
								 <?php 
											include('connection.php');
											if(isset($_POST['btn3']))
											{
											$title=mysqli_real_escape_string($dbcon,$_POST['title']);												
											$link=mysqli_real_escape_string($dbcon,$_POST['link']);	
										   {
											 if(isset($_FILES['img'])){
											$img=$_FILES['img']['name'];
                                            $tmpimg=$_FILES['img']['tmp_name'];
										     } 
											if (empty($_FILES['img']['name']))
												 {
											$query="update tbvideo set title='$title',link='$link' where id='$id'";
											if(mysqli_query($dbcon,$query))
											{
											echo "<script> alert('Updated Successfully');</script>";
                                            echo '<script>window.location.href = "show-video.php";</script>';
											}
											else{
											echo mysqli_error($dbcon);
											} 										 											
											  }								  
											else{												  
											$query="update tbvideo set title='$title',link='$link',pic1='$img' where id='$id'";
																														
											if(mysqli_query($dbcon,$query))
											{
											echo "<script> alert('Updated Successfully');</script>";
											move_uploaded_file($tmpimg,'assets/images/upload/product/video/'.$img);
                                            echo '<script>window.location.href = "show-video.php";</script>';
											}
											else{
											echo mysqli_error($dbcon);
											} 												  
											  } 																		 
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
    </footer>---->

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
