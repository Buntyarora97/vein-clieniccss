<?php session_start(); ?>
<?php include('connection.php');
if(!isset($_SESSION['name']))
{
    header('location:index.php');
}?>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>DR. RAJA’S VEIN & INTERVENTION CLINIC-Admin</title>
  <link rel="icon" href="assets/images/favi.ico" type="image/x-icon">
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <link href="assets/css/app-style.css" rel="stylesheet"/>
   <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  
</head>

<body class="bg-theme bg-theme1">
 
 <div id="wrapper">
 
 
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   <div class="brand-logo">
     <a href="index.html">
       <img src="assets/images/logo.png" class="logo-icon" alt="logo icon" style="width:100%;">
       <h5 class="logo-text"> </h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="assets/images/admin.png" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name">Admin</h6>
      </div>
       </div>
      </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
	 <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Enquiry Section</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="add-enquiry.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Enquiry</a></li>
          <li><a href="show-enquiry.php"><i class="zmdi zmdi-long-arrow-right"></i> Update Enquiry</a></li>
         
		</ul>
      </li>
     
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-file-image-o"></i> <span>Gallery Section</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="add-gallery.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Gallery</a></li>
          <li><a href="show-gallery.php"><i class="zmdi zmdi-long-arrow-right"></i> Update Gallery</a></li>
         
		</ul>
      </li>
     <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-file-image-o"></i> <span>Event Section</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
      <li><a href="add-eve.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Event</a></li>
          <li><a href="show-eve.php"><i class="zmdi zmdi-long-arrow-right"></i> Update Event</a></li>
         
    </ul>
      </li>--->
      <!--- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-file-image-o"></i> <span>Wall Of Fame</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
      <li><a href="add-fame.php"><i class="zmdi zmdi-long-arrow-right"></i> Add New</a></li>
          <li><a href="show-fame.php"><i class="zmdi zmdi-long-arrow-right"></i> Update Fame</a></li>
         
    </ul>
      </li>--->
	  <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-bars"></i> <span>Testimonial Section</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="add-video.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Patient Testimonial</a></li>
          <li><a href="show-video.php"><i class="zmdi zmdi-long-arrow-right"></i> Update Testimonial</a></li>
         
		</ul>
      </li>
	   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-bars"></i> <span>Blog Section</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
      <li><a href="add-blog.php"><i class="zmdi zmdi-long-arrow-right"></i> Add Blog</a></li>
          <li><a href="show-blog.php"><i class="zmdi zmdi-long-arrow-right"></i> Update Blog</a></li>
         
    </ul>
      </li>
	   
	 
    </ul>
   
   </div>
  
<header class="topbar-nav">
 