<?php
    include('database/connect.php');
    session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tunikhala</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo|Bree+Serif|Questrial|Roboto&amp;subset=devanagari,latin-ext,vietnamese" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/mdb.min.css">
<!--    <link rel="stylesheet" href="basic.css">-->
    <style>      
        html,
        body,
        header,
        .view {
            height: 400px;
            background: #F9F9F9;
        }
        header{
            height:400px;
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
            <?php 
                $page=$_GET['page'];
            ?>
            background: url("asset/service/<?php print $page;?>.jpg")no-repeat center center fixed;
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
        .form{
            border:1px solid green;
        }
        body{
           
            font-family:normal;
        }
        body{
            background:#EDEDED;
        }
        .left{
            background:white;
        }
        .nav-item:hover::after{
            content:"";
            background:red;
            position:absolute;
            height:2px;
            width:100px;
            top:0;
            left:0;
        }
        .ul_li{
            line-height:30px;
            position: sticky;
            padding: 0 35px;
            
        }
        .ul_li a{
            color:gray;
            font-family: 'Roboto' sans-serif;
            font-weight:500;
        }
        body{
            font-family: 'Roboto' sans-serif;
            font-weight: 300px;
            font-size:16px;
            
        }
        .add{
            background:#FF5E00;padding: 7px 12px;color:white;text-transform: uppercase;border-radius: 3px;font-weight: 700;margin-left: -12px;border:none;
        }
        h1,h2,h3,h4,h5,h6{
            color:#404040;
            font-family:'Roboto' sans-serif;
            
            font-weight:700;
        }
        
        p,a{
            color:gray;
            font-family:'Roboto' sans-serif;
            font-weight:500;
            font-size:18px;
        }
        .form-control{
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
        .form_c{
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
        i.btn-default{
            background: #FF5E00;
        }
        .btn{
            background: #FF5E00;
        }
         .bg{
           background:url(asset/service/02_mona.jpg);
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
            height:700px;
             width:100%;
        }
        .select_option option{
            color:black;
        }
    </style>
  </head>
  <body>
       <?php
        
      
      ?>
        <div class="bg">
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="container">
               <form action="" method="post">
                <div class="row">
                   <br><br><br><br><br><b></b>
                    <div class="col-md-4 offset-md-2">
<!--                        <input type="text" class="" style="border:1px solid silver;padding:8px 20px;">-->
                    <select name="location" id="" class="select_option" style="border:1px solid silver;padding:13px 136px;margin-top:-13px;background:none;color:white;font-weigth:700;font-size:22px;">
                        <option value="">Select Location</option>
                        <option value="">Feni</option>
                        <option value="">Feni</option>
                        <option value="">Feni</option>
                        <option value="">Feni</option>
                        <option value="">Feni</option>
                    </select>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <a href="service.php?&page=food_product" style="padding:17px 50px;color:white;background:#FF5E00;border:none;" name="search">Search</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
  </body>
</html>