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
    <link rel="stylesheet" href="basic.css">
    
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
            background: url("asset/img/bg.jpg")no-repeat center center fixed;
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
         .skill span{
                background:#E0E0E0;
                padding:5px 5px;
                border-radius: 3px;
                color:black;
                font-size: 12px;
                font-weight: 500;
                line-height: 40px;  
            }
            .img img{
                margin-left: 70px;
                margin-top: 25px;
                margin-bottom: 18px;
                padding: 5px;
            }
            .pdg{
               margin-left:11px;
            }
            @media (min-width: 768px)
            .col-md-3{
                max-width: 23%;
            }
        .col-md-3{
           max-width:23%;
        }
        .contnr{
            width:1300px;
            margin-right:0px;
        }
        .card{
            box-shadow:0px 3px 3px 2px silver;
        }
        .fa-angle-double-right{
            font-size:30px;
            font-weight:700;
            margin-right:20px;
        }
        .form{
            border:2px solid green;
        }
        .plum{
            position:relative;
        }
        .plum::after{
            position:absolute;
            background:green;
            content:"";
            width:200px;
            height:3px;
            left:0;
            bottom:0;
        }
         body{
            color:silver;
            font-family:normal;
        }
    </style>
  </head>
  <body>
       <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center" style="border-bottom:1px solid silver;padding-bottom:30px;color:green;">Our Avaiable Vedio Editor</h1>
                </div>
            </div>
        </div>
        <br>  <br>  <br>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="plum" style="padding-bottom:20px;color:green;"> Vedio Editor</h1>
                    
                    
                    <div class="content">
                       <br><br>
                        <p>
                            Water Tap, Kitchen Sink, Basin Clog, Water Line Jam, Shower
                             Head, Push Shower, Hand Shower, Commode Low Down, Commode Jam,
                              Complete New Sanitary Setup, GAS stove Installation-- 
                              for any kind of plumbing dysfunction, you need the best plumber
                               to fix it right away. Hire HandyMama for any kinds of plumbing fixing work
                                in just 1 minute!
                        </p>
                    </div>
                    <br><br>
                    <div class="feature">
                        <h3  class="plum" style="padding-bottom:20px;color:green;">Features</h3>
                       
                        <br>
                        <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>Verified Plumbers with 10+ Years of Experience.</p>
                        <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shows Up at Your Place in Just 30 Minutes.</p>
                        <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>Transparent Pricing. No Hidden Charge.</p>
                        <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>All Kinds of Local and Foreign Sanitary Parts Available.</p>
                    </div>
                    <br><br>
                    <div class="sub_feature">
                        <h3  class="plum" style="padding-bottom:20px;color:green;">Sub Service</h3>
        
                        <br>
                        <p>You can specify your booking by selecting one or more sub services from the drop down.</p>
                    </div>
                </div>
                
                <div class="col-md-4 offset-md-1" style="">
                    <br><br><br>
                    <h1 class="text-center" style="background:green;color:white;padding:10px 10px;">Book Now</h1>
                    <div class="form-group">
                        <label for="" style="font-size:20px;">Area </label>
                        <input type="text" class="form-control form" style="border:2px solid green;padding:4px 0;">
                    </div>
                    <div class="form-group">
                        <label for="" style="font-size:20px;">Sub Service of Plumbing </label>
                       <input type="text" class="form-control form" style="border:2px solid green;padding:4px 0;">
                    </div>
                    <div class="form-group">
                        <label for="" style="font-size:20px;">Street address</label>
                        <input type="text" class="form-control form" style="border:2px solid green;padding:4px 0;">
                    </div>
                    <input type="submit" class="btn btn-success" value="Next">
                </div>
            </div>
        </div>
    <script src="asset/js/jquery-3.1.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/mdb.min.js"></script>
      <script src="asset/js/tether.min.js"></script>
  </body>
</html>