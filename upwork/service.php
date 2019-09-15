<?php
    
include('database/connect.php');
session_start();
$he=$_GET['he'];

$page=$_GET['page'];
    $faq=$_GET['faq'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tunikhala</title>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inconsolata|Maven+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Bree+Serif|Questrial|Roboto&amp;subset=devanagari,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Bree+Serif|Questrial|Roboto&amp;subset=devanagari,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/mdb.min.css">
    <style>      
        html,
        body,
        header,
        .view {
            height: 400px;
            background:;
        }
        /* Navigation*/

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background: #222;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #222;
            }
        }
        /*Intro*/
        <?php
                if($page=='food_product_info'){
                  ?>
        .view {
            
                
            height:100px;
        
            
            background: url("asset/img/bg.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        <?php  
                }
            
            ?>
        @media (max-width: 768px) {
            .full-bg-img,
            .view {
                height: auto;
                position: relative;
            }
        }

        .description {
            padding-bottom: 3rem;
            color: #fff
        }

        @media (max-width: 992px) {
            .description {
                padding-top: 7rem;
                text-align: center;
            }
        }

        .full-bg-img .card {
            background-color: rgba(255, 255, 255, 0.8);
        }
        .card-block{
            padding: 0;
        }
        .card{
            box-shadow: none;
        }
/*        .cat::after{*/
            content: "";
            position: absolute;
            background: red;
            height: 3px;
            width: 250px;
            bottom: 44px;
            left: 93px; 
        }
        
        .cat i{
               font-size: 33px;
                font-weight: 500;
                color: orangered;
        }
        .navbar-toggleable-md .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: 3.5rem;
            font-weight: 700;
        }
        .navbar.navbar-dark .breadcrumb a, .navbar.navbar-dark .navbar-nav .nav-item a {
            color: white;
            transition: .35s;
        }
        .top-nav-collapse nav-item nav-link {
            color: green;
        }
        .border_all{
            border-left: 1px solid orangered;
            padding: 38px 0px;
            border-top: 1px solid orangered;
            transition: .6s;
            
        }
        .border_bottom{
            border-bottom: 1px solid orangered;
        }
        .border_right{
            border-right: 1px solid orangered;
        }
        .border_all:hover{
            transform: scale(.9);
            transition: 0.6s;
            padding: 30px 0;
            border: 1px solid green;
            background: #F9F9F9;
        }
        .form{
            border:1px solid green;
        }
        body{
            color:silver;
            font-family:normal;
        }
        h1{
            color:white;font-family: 'Bree Serif', serif;color:#fff;font-size:24px;font-weight:700;

        }
        .style:hover{
            background-color:none;
            color:none;
            border:0px;
        }
        h1,h2,h3,h4,h5,h6{
            color:white;
        }
    </style>
  </head>
  <body>
<!--=====================================header area start========================================-->

<!--Navigation & Intro-->
<?php 
    if(!$faq=='abc')
                {
?>
<header>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="home.php" target="">tunikhala</a>
<!--            <a href="">Logout</a>-->
            <div class="collapse navbar-collapse" id="navbarNav1">
                <!--Navbar icons-->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
           
                <?php
                    
                        if($page=='food_product')
                        {
                            if($_SESSION['loginfo']==true)
                            {
                    ?>
                    <li class="nav-item">
                        
                         <a class="nav-link" href="service.php?&page=signin">Logout</a>
                    </li>
                    <?php }
                    else {
                    ?>
                    <li class="nav-item">
                       <a class="nav-link style" href="service.php?&page=signin">LogIn / Sign In</a>
                    </li>
                    <?php } } ?>
                    <?php
                    
                        if($page=='food_product_info')
                        {
                            if($_SESSION['loginfo']==true)
                            {
                    ?>
                    <li class="nav-item">
                        
                         <a class="nav-link" href="service.php?&page=signin">Logout</a>
                    </li>
                    <?php }
                    else {
                    ?>
                    <li class="nav-item">
                       <a class="nav-link style" href="service.php?&page=signin">LogIn / Sign In</a>
                    </li>
                    <?php } } ?>
                     <?php
                    
                        if($page=='signup'){
                            if($_SESSION['loginfo']==true)
                            {
                    ?>
                    <li class="nav-item">
                        
                         <a class="nav-link" href="service.php?&page=signin">Logout</a>
                    </li>
                    <?php }else {?>
                    <li class="nav-item">
                       <a class="nav-link style" href="service.php?&page=signin">LogIn / Sign In</a>
                    </li>
                    <?php } } ?>
                    
                    
                     <?php
                    
                        if($page=='signin')
                        {
                      ?>
                    <li class="nav-item">
                       <a class="nav-link style" href="service.php?&page=">LogIn / Sign In</a>
                    </li>
                    <?php } 
                    ?>
                    
                    
                </ul>
            </div>
        </div>
    </nav>

    <!--/.Navbar-->
<?php
            

    
//if($page=='contact_teacher'){    
?>
    <!--Mask-->
    <div class="view hm-black-light">
        <div class="full-bg-img flex-center">
            <div class="container">
                 <ul>
                <li>
                   <?php
                        if($page=='home_worker'){
                        $home_worker='HOME WORKER';
                }else if($page=='home_teachers'){
                    $home_worker='HOME TEACHER SERVICE';
                }else if($page=='food'){
                    $home_worker='FOOD SERVICE';
                }else if($page=='food'){
                    $home_worker='FOOD SERVICE';
                }else if($page=='electrician'){
                    $home_worker='ELECTRICAL SERVICE';
                }
                    ?>
                    <h1 class="h1-responsive wow fadeInUp" style="color:white;"><?php print $home_worker;?></h1></li>
                <li>
                
            </ul>
            </div>
        </div>
    </div>
    <?php
             //   }
    ?>
    <!--/.Mask-->

</header>
<!--/Navigation & Intro-->
<?php
                
}
else
{
    ?>
    
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
        
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="home.php">Tunikhala</a>
            <a class="navbar-brand waves-effect waves-light" href="home.php">Home</a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <!--Navbar icons-->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    
                   <li class="nav-item">
                        
                         <a class="nav-link" href="service.php?&page=signin">Logout</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <?php
}
?>
<!-- ===================================== header area end=========================================-->



<?php
      
switch($page){
        case'food_product':
    include("food_product.php");
    break;
        case'order_food':
    include("order_food.php");
    break;
    case'food_product_info':
    include("food_product_info.php");
    break;
    case'food_location':
    include("food_location.php");
    break;
    case'home_teachers':
    include("teacher.php");
    break;
    case'home_worker':
    include("home_worker1.php");
    break;
    case'plumbing':
    include("plumbing.php");
    break;
    case'electrician':
    include("electrician.php");
    break;
    case'doctor':
    include("doctor.php");
    break;
    case'driver1':
    include("driver1.php");
    break;
    case'tv_servicing':
    include("tv_servicing.php");
    break;
    case'ac_servicing':
    include("ac_servicing.php");
    break;
    case'computer_service':
    include("computer_service.php");
    break;
    case'loundry':
    include("loundry.php");
    break;
    case'vedio_editor':
    include("vedio_editor.php");
    break;
    case'car_servicing':
    include("car_servicing.php");
    break;
    case'painter':
    include("painter.php");
    break;
    case'food_menu':
    include("food_menu.php");
    break;
    case'powerpoint':
    include("power_point.php");
    break;
    case'android':
    include("android.php");
    break;
    case'web_developing':
    include("web_developing.php");
    break;
    case'graphics_design':
    include("graphics_design.php");
    break;
    case'networking':
    include("networking.php");
    break;
    case'teacher_profile':
    include("teacher_profile.php");
    break;
    case'home_worker_profile':
    include("home_worker_profile.php");
    break;
    case'food':
    include("food.php");
    break;
    case'contact_teacher':
    include("contact_teacher.php");
    break;
    case'doctor_profile':
    include("doctor_profile.php");
    break;
    case'nurse':
    include("narse.php");
    break;
    case'contact_home_worker':
    include("contact_home_worker.php");
    break;
    case'contact_driver':
    include("contact_driver.php");
    break;
    case'contact_electrician':
    include("contact_electrician.php");
    break;

    case'contact_ac_servicing':
    include("contact_ac_servicing.php");
    break;
    case'contact_computer_servicing':
    include("contact_computer_servicing.php");
    break;
    case'contact_tv_servicing':
    include("contact_tv_servicing.php");
    break;
    case'contact_doctor':
    include("contact_doctor.php");
    break;
    case'contact_car_service':
    include("contact_car_service.php");
    break;
    case'contact_loundry_service':
    include("contact_loundry_service.php");
    break;
    case'contact_plumbing_service':
    include("contact_plambing_service.php");
    break;
    case'contact_paint_service':
    include("contact_painter_service.php");
    break;
    case'signup':
    include("signup.php");
    break;
    case'signin':
    include("signin.php");
    break;
    default:
    
    break;
}
?>



<!--footer area start -->
    
<!--Footer-->
<footer class="page-footer center-on-small-only" style="margin-top:0px;">
<br><br>
    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title" style="border:1px solid gray;padding:15px 12px;color:white;">Tunikhala</h5>
                <p class="text-center" style="line-height:40px;">Tunikhala is a online plantrom.
                    You Became a usely find your job.
                    
                </p>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title" style="border-bottom:2px solid gray;padding-bottom:19px;color:white;">Quick Link</h5>
                <ul>
                    <li style="line-height:40px;"><a href="home.php">Home</a></li>
                    <li style="line-height:40px;"><a href="how_it_work.php">How it Work</a></li>
                    <li style="line-height:40px;"><a href="about.php">About</a></li>
                    <li style="line-height:40px;"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title" style="border-bottom:2px solid gray;padding-bottom:19px;color:white;">Help And Support</h5>
                <ul>
                    <li style="line-height:40px;"><a href="contact.php">Contact</a></li>
                    <li style="line-height:40px;"><a href="create_your_job_profile.php">Create Your job profile</a></li>
                    
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title" style="border-bottom:2px solid gray;padding-bottom:19px;color:white;">Address</h5>
                <ul>
                    <li style="line-height:40px;"><a href="#!">Mobile : 01811954314</a></li>
                    <li style="line-height:40px;"><a href="#!">Address : feni,Bangaldesh</a></li>
                    <li style="line-height:40px;"><a href="#!">Email : tunikhala@gmail.com</a></li>
                    
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <ul>
            <li>
                <h5>Register for free</h5></li>
            <li><a href="" class="btn btn-danger">Sign up!</a></li>
        </ul>
    </div>
    <!--/.Call to action-->

    <hr>

    
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2015 Copyright: <a href="home.php">Tunikhala</a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>

<!--/.Footer-->

<!--footer area end-->
    <script src="asset/js/jquery-3.1.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/mdb.min.js"></script>
      <script src="asset/js/tether.min.js"></script>
  </body>
</html>