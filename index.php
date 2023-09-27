<?php
$cn = mysqli_connect("localhost", "root", "", "db_admission");


?>



<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

    <title>Training Student List</title>
    <link rel="shourtcut icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
   
    <div class="header-area header-absoulate">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="">
                            <i class="fa fa-home"></i>
                            <span>Saiful Training <span id="na">Center</span></span>
                        </a>
                    </div>
                </div>
   
                <div class="col-md-7">
                    <div class="main-menu">
                        <?php include('menu.php'); ?>
                    </div>
                </div>
                <div class="col-md-1 text-right">
                    <span class="social-icon">
                        <a href="https://www.facebook.com/ability.scientist/"><i class="fa fa-facebook"></i></a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfu6RdKkAt-t-mvXd9FGxjOfSpMSCZ-XawDO1KQNegR4hJuIw/viewform?usp=sharing"><i class="fa fa-google-plus"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    


    <div class="welcome-area">
        <div class="owl-carousel slider-content">
            <div class="single-slider-item slider-bg-1">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>We provide office applicatoin packages</h2>
                                    <p>Here you can learn Microsoft office word,<br>Exel, Powerpoint etc.</br> 
                                        Also you can learn about troobleshooting.</br> 
                                        <i>Saiful Islam</i>
                                    </p>
                                    <a href="" class="boxed-btn">learn more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-2">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>We provide graphics design full packages</h2>
                                    <p>Here you can learn about our graphics course like adobe illustrator,<br>
                                        adobe photoshop, adobe premiere pro and etc. 

                                        <br><i>Saiful Islam</i>
                                    </p>

                                    <a href="" class="boxed-btn">learn more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <?php include ('controller.php'); ?>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="logo">
                            <a href="">
                                <i class="fa fa-home"></i>
                                <span>Training</span>
                            </a>
                            <p> If you want to know more about our offer packages <br>
                                then you can come our training center or more info call us.

                                <br><i>+8801679681640 or 009123456789</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="?a=student_add">admission</a></li>
                                <li><a href="?a=view">students</a></li>
                               
                                <li><a href="https://www.facebook.com/ability.scientist/">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <span class="social-icon">
                        <a href="https://www.facebook.com/ability.scientist/"><i class="fa fa-facebook"></i></a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfu6RdKkAt-t-mvXd9FGxjOfSpMSCZ-XawDO1KQNegR4hJuIw/viewform?usp=sharing"><i class="fa fa-google-plus"></i></a>
                    </span>
              
        </div>
    </footer>




    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
