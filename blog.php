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
                <h2>Blog</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrum"><a href="index.php">Home / </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->

    
      
    <!-- ==========Team Section Start Here========== -->
    <div class="team team--two padding-tb">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
              
                <h2>Blog</h2>
            </div>
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4">
                      <?php 
                                     include('admin/connection.php');
                                     $counter = 0;
                                     $sql="select * from tbblog order by id desc";
                                      $r=mysqli_query($dbcon,$sql);
                                      while($row=mysqli_fetch_array($r))
                                      {
                                     ?>
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="team__item">
                            <div class="team__thumb">
                                 <img style="width:100%;" src="admin/assets/images/upload/event/<?php echo $row['photo'];?>" alt="Event">
                            </div>
                            <div class="team__content">
                                <h5><a href="blog.php"><?php echo $row['heading']; ?></a></h5>
                               
                                <p><?php echo $row['description']; ?></p>
                                <!---<ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>--->
                            </div>
                        </div>
                    </div>
                   <!---- <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="assets/images/team/02.jpg" alt="rajib raj">
                            </div>
                            <div class="team__content">
                                <h5><a href="team-single.html">Rosalina D. William</a></h5>
                                <span>Senior Manager</span>
                                <p>Big advsed her not to do so becau qetswere of bad comen devou but blind and text listen</p>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>---->
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Team Section Ends Here========== -->

<?php include('footer.php');?>



</div>
</body>

</html>