<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="assets/css/favicon.png" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/style.css">

  <?php include('header.php');?>


    <!-- ==========Banner Section Start Here========== -->
    <div class="pageheader padding-tb bg-img" style="background-image: url(assets/images/bg/page-header.jpg);">
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>Patient Testimonials</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class=""><a href="index.php">Home / </a></li>
                        <li class="breadcrumb-item active"> Patient Testimonials</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->


   <!-- ==========Team Section start Here========== -->
    <div class="team team--one padding-tb bg-img" style="background-image: url(assets/images/bg/15.jpg);">
        <div class="container">
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4">
                    <?php 
                                     include('admin/connection.php');
                                     $counter = 0;
                                     $sql="select * from tbvideo order by id desc";
                                      $r=mysqli_query($dbcon,$sql);
                                      while($row=mysqli_fetch_array($r))
                                      {
                                     ?> 
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="">
                            <div class="team__thumb">
                               <iframe style="width:100%;height:250px" src="https://www.youtube.com/embed/<?php echo $row['link']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               <!--- <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>---->
                            </div>
                            <!--<div class="team__content">
                                <h5><a href="team-single.html">Amlikso S. Solson</a></h5>
                                <span>Founder</span>
                            </div>--->
                        </div>
                    </div>
                   <!---- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="assets/images/team/02.jpg" alt="rajib raj">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="team__content">
                                <h5><a href="team-single.html">Rosalina D. William</a></h5>
                                <span>Senior Manager</span>
                            </div>
                        </div>
                    </div>--->
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========Team Section Ends Here========== -->

  <?php include('footer.php');?>
</body>
</html>