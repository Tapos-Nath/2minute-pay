<?php
    include("database/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tunikhala</title>
        <link href="https://fonts.googleapis.com/css?family=Baloo|Bree+Serif|Questrial|Roboto&amp;subset=devanagari,latin-ext,vietnamese" rel="stylesheet">
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
/*                background:#E0E0E0;*/
/*                padding:5px 5px;*/
/*                border-radius: 3px;*/
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
            padding-left:60px;
        }
         body{
            color:silver;
            font-family:normal;
        }
        .address{
            color:#222;
            line-height:10px;
             font-family: 'Maven Pro', sans-serif;color:#222;font-size:18px;font-weight:500;
        }
    </style>
  </head>
  <body>
       <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center" style="border-bottom:1px solid silver;padding-bottom:30px;border-bottom:1px solid silver;padding-bottom:30px;color:#FF5E00;font-family: 'Bree Serif', serif;">Our Avaiable Home Doctor</h1>
                </div>
            </div>
        </div>
        
        
     <div class="container contnr">
         <div class="row">
            <?php
                if(isset($_POST['book_now'])){
                    $_SESSION['id']=$book_now;
                }
             $select_doctor=mysql_query("SELECT * FROM home_doctor");
            while($fetch_doctor=mysql_fetch_array($select_doctor)){
             
             ?>
            <div class="col-md-3 pdg" style="border:2px solid silver;">
                <div class="img">
                    <img src="image/home_doctor/<?php print $fetch_doctor[0]?>.jpg" alt="" style="height:120px;width:120px;border-radius:100%;border:2px solid gray">
                </div>
                <div class="address">
                    <h3 class="text-center"><?php print $fetch_doctor[1];?></h3>
                    
                    <p class="text-center">Consultant : </p>
                    <p class="text-center">MBBS, PGT in Dermatalogy </p>
                    <p class="text-center">General Physician </p>
                    
                </div>
                <hr>
                <p class="text-center" style="color:red;font-size:18px;font-weight:700;">Fee : 500Tk</p>
                <hr>
                <div class="skill">
                    <p class="text-center" style="font-size:18px;color:black;">Location : Feni Sodor Hospital </p>
                    
                </div>
<!--                <a href="service.php?&page=doctor_profile&id=<?php print $fetch_doctor[0];?>" style="padding:10px 10px;background:orangered;color:white;text-align:center;margin-left: 20px;line-height: 80px;border-radius: 3px;font-family: 'Bree Serif', serif;">View Profile</a>-->
               <a href="service.php?&page=contact_doctor&id=<?php print $fetch_doctor[0];?>" style="padding:10px 85px;background:orangered;color:white;text-align:center;margin-left: 10px;line-height: 80px;border-radius: 3px;font-family: 'Bree Serif', serif;">Book Now</a>
             </div>
             
             <?php } ?>
             
             <!-- Button trigger modal -->
<!--
<button type="button" class="" data-toggle="modal" data-target="#myModal" style="background:#FF5E00;padding:10px 75px;border:none;border-radius:3px;color:white;font-weight:700;">
  Check Out Your Proccess
</button>
-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border:none;padding:0;">
        
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-right" style="margin-left:481px;">&times;</span></button>
<!--
        <h4 class="modal-title text-center" id="myModalLabel">Order Delevary Details</h4>
        <p>Please Provide Your some detailes in order to compelete your order !!</p>
-->
      </div>
      <div class="modal-body">
        <div class="row">
                       <div class="col-md-6">
<!--                            <img src="asset/img/avatar-5.jpg" alt="" style="height:130px;width:130px;border-radius:100%;margin-left: 178px;margin-top: -33px;padding: 5px;">-->
                        <h3 style="font-size:20px;color:gray;padding:0;margin:0;margin-top:-28px;font-weight:700;border-bottom:1px solid silver;padding:10px;">Teacher Details</h3>
                            <div class="details">
                                <p style="">ID : </p>
                                <p>NAME : </p>
                                <p>STUDYING : </p>
                                <p>ADDRESS : </p>
                            </div>
                       </div>
                        <div class="col-md-6">
                            <img src="asset/img/avatar-5.jpg" alt="" style="height:130px;width:130px;border-radius:100%;margin-left: ;margin-top: -33px;padding: 5px;float:right">
<!--
                        <h3>Teacher Details</h3>
                        <p>ID : </p>
                        <p>NAME : </p>
                        <p>STUDYING : </p>
                        <p>ADDRESS : </p>
-->
                       </div>
                   </div>
                   
                  <form action="" method="post">  
                    <div class="form-group">
                       <input type="text" class="form-control" placeholder="Enter Your Name" style="height:34px;border: 2px solid #FF5E00;padding: 4px 0;border-radius: 4px;box-shadow: inset 0 1px 1px rgba(0,0,0,.075);font-weight:700;" required>
            <!--            <input type="text" class="form-control form_c">-->
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Phone" style="height:34px;border: 2px solid #FF5E00;padding: 4px 0;border-radius: 4px;box-shadow: inset 0 1px 1px rgba(0,0,0,.075);font-weight:700;" required>
            <!--            <input type="text" class="form-control form_c">-->
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Area" style="height:34px;border: 2px solid #FF5E00;padding: 4px 0;border-radius: 4px;box-shadow: inset 0 1px 1px rgba(0,0,0,.075);font-weight:700;" required>
<!--
                        <select name="" id="" class="form-control" style="">
                            <option>dhaka</option>
                            <option>dhaka</option>
                            <option>dhaka</option>
                        </select>
-->
                    </div>
                    <div class="form-group">
                        <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Enter Your #house name #road number #area" style="font-weight:700;border:2px solid #FF5E00;" required></textarea>
                    </div>
                   
        <input type="submit" class="" value="Comfirm Book" style="background:#FF5E00;padding:10px 183px;color:white;background:#FF5E00;border:none;border-radius:3px;">
      </div>
          </form>
          
    
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<!--                model  end-->
              
              
<!--
             <div class="col-md-3" style="background:white;">
                    <br><br><br>
                    <h3 class="text-center" style="background:#F37032;color:white;padding:10px 10px;font-weight:900;font-family: 'BioRhyme', serif;text-shadow:1px 1px 2px solid silver;font-family: 'Bree Serif', serif;font-size:24px;">Book Now</h3>
                    <div class="form-group">
                        <label for="" style="font-size:20px;">Select Division </label>
                        
                        <select name="" class="form-control" id="" style="border:2px solid orangered;padding:4px 0;">
                            <option value="">Choose Your Division</option>
                            <option value="">Dhaka</option>
                            <option value="">Chittagong</option>
                            <option value="">Comilla</option>
                            <option value="">Khulna</option>
                            <option value="">Borishal</option>
                            <option value="">Shylet</option>
                           
                        </select>
                    </div>
                    
                    <input type="submit" class="btn btn-danger" value="Next" style="background:#F37032;">
               <a href="home_worker2.php?&abc=xyz"><input type="submit" style="background:#F37032;padding:13px 50px;color:white;border:none;font-family: 'Bree Serif', serif;" value="Next"></a>
                </div>
-->
         </div>
     </div>
    <script src="asset/js/jquery-3.1.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/mdb.min.js"></script>
      <script src="asset/js/tether.min.js"></script>
  </body>
</html>