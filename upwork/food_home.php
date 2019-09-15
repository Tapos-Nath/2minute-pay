<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tunikhala</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/mdb.min.css">
    <style>      
        html,
        body,
        header,
        .view {
            height: 400px;
            background: #F9F9F9;
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
        .view {
            background: url("asset/img/b.png")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

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
            border:1px solid orangered;
            
        }
        .border_bottom{
            border-bottom: 1px solid orangered;
        }
        .border_right{
            border-right: 1px solid orangered;
        }
        
        p,a{
            color:#222;
            font-size:20px;
        }
/*
.con {
    position: relative;
    width: 50%;
}
.con_p{
    position:relative;            
    
}
.image {
  opacity: 1;
  
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.con:hover .image {
  opacity: 0.3;
}

.con:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
        
*/
/*        overly */
        .con {
  position: relative;
  width: 50%;
}

.image {
  display: block;
    margin-left:70px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: rgba(0,0,0,.9);
}

.con:hover .overlay {
  opacity: 5;
}
        .height_top{
            height:186px;
            padding-top:24px;
        }
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
    </style>
  </head>
  <body>
<!--=====================================header area start========================================-->

<!--Navigation & Intro-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="home.php" target="">tunikhala</a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <!--Navbar icons-->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="job_profile.html">Create Your Job Profile</a>
                    </li>
                    <li class="nav-item">
                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item">Account</a>
                            <a class="dropdown-item">Login</a>
                            <a class="dropdown-item">logout</a>
                            <a class="dropdown-item">Profile</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div class="view hm-black-light">
        <div class="full-bg-img flex-center">
            <div class="container">
                <div class="row" id="home" style="background:white;padding:8px;">

                    <!--First column-->
                    <div class="col-lg-5">
                        <div class="card wow fadeInRight">
                            <div class="card-block">

                                <!--Body-->
                                <div class="md-form">
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Skill</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.First column-->
                    <!--Second column-->
                    <div class="col-lg-5">
                        <!--Form-->
                        <div class="card wow fadeInRight">
                            <div class="card-block">
                                <!--Body-->
                                <div class="md-form">
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Location</label>
                                </div>
                            </div>
                        </div>
                        <!--/.Form-->
                    </div>
                    <!--/Second column-->
                    <!--/thaird column-->
                    <div class="col-lg-2">
                        <!--Form-->
                        <div class="text-center" style="margin-top: 8px;">
                                    <button class="btn btn-primary btn-lg">search</button>
                        </div>
                        <!--/.Form-->
                    </div>
                    <!--/thaird column-->
                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

</header>
<!--/Navigation & Intro-->

<!-- ===================================== header area end=========================================-->


<!--footer area start -->
    
<!--Footer-->
<footer class="page-footer center-on-small-only">
<br><br>
    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title" style="border:3px solid gray;padding:15px 12px;">Tunikhala</h5>
                <p class="text-center" style="line-height:40px;">Tunikhala is a online plantrom.
                    You Became a usely find your job.
                    
                </p>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title" style="border-bottom:4px solid gray;padding-bottom:19px;">Quick Link</h5>
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
                <h5 class="title" style="border-bottom:4px solid gray;padding-bottom:19px;">Help And Support</h5>
                <ul>
                    <li style="line-height:40px;"><a href="contact.php">Contact</a></li>
                    <li style="line-height:40px;"><a href="create_your_job_profile.php">Create Your job profile</a></li>
                    
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title" style="border-bottom:4px solid gray;padding-bottom:19px;">Address</h5>
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