<?php
    include('database/connect.php');

    $id=$_GET['id'];
    $page=$_GET['page'];
    $select_teacher=mysql_query("SELECT * FROM home_teacher WHERE id='$id'");
    $fetch_teacher=mysql_fetch_array($select_teacher);

$order_date=date("Y/m/d");

$order_time=date("h:i:sa");

$name=$_POST['name'];
$phone=$_POST['phone'];
$area=$_POST['area'];
$address=$_POST['address'];
if(isset($_POST['confirm'])){
    mysql_query("INSERT INTO order_teacher(`teacher_id`,`teacher_name`,`teacher_study`,`teacher_collage`,`teacher_expart`,`teacher_address`,`order_user_name`,`order_user_phone`,`order_user_area`,`order_user_address`)VALUES('$fetch_teacher[0]','$fetch_teacher[1]','$fetch_teacher[3]','$fetch_teacher[5]','$fetch_teacher[8]','$fetch_teacher[9]','$name','$phone','$area','$address')");
    if(mysql_affected_rows()>0){
        print 'successfull';
    }else{
        print 'unsuccessfull';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tunikhala</title>
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
            background: ;
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
            background: url("asset/img/<?php print $page;?>.jpg")no-repeat center center fixed;
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
            font-weight:700;
        }
        body{
            font-family: 'Roboto' sans-serif;
            font-weight: 300px;
            font-size:16px;
            
        }
        .add{
            background:#FF5E00;padding: 7px 12px;color:white;text-transform: uppercase;border-radius: 3px;font-weight: 700;margin-left: 17px;
        }
        h4{
            color:gray;
            font-family:'Roboto' sans-serif;
            font-size:24px;
            font-weight:700;
        }
        a{
            color:gray;
        }
        p{
            color:gray;
            font-family:'Roboto' sans-serif;
            font-weight:600;
            font-size:14px;
            margin:0;
            padding:0;
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
        .details{
            margin:26px;
            margin-top:1px;
        }
        .worker {
            background: url("asset/img/home.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            position:relative;
        }
        .worker::after{
            content:"";
            position:absolute;
            background:rgba(0,0,0,.9);
            
        }
        .bg{
            background:rgba(0,0,0,.5 );
        }
    </style>
  </head>
  <body>
<!--=====================================header area start========================================-->

<div class="worker">
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            
   
            <!--    model  start -->
        
            <!-- Modal -->
            <div class="bg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="" role="document">
                <div class="modal-content" style="margin-top: 50px;">
                  <div class="modal-header" style="border:none;padding:0;">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-right" style="margin-left:481px;"></span></button>
            <!--
                    <h4 class="modal-title text-center" id="myModalLabel">Order Delevary Details</h4>
                    <p>Please Provide Your some detailes in order to compelete your order !!</p>
            -->
                  </div>
                  <div class="modal-body">
                  <form action="" method="post" enctype="multipart/form-data">
                   <div class="row">
                       <div class="col-md-6">
<!--                            <img src="asset/img/avatar-5.jpg" alt="" style="height:130px;width:130px;border-radius:100%;margin-left: 178px;margin-top: -33px;padding: 5px;">-->
                        <h3 style="font-size:20px;color:gray;padding:0;margin:0;margin-top:-28px;font-weight:700;border-bottom:1px solid silver;padding:10px;">Teacher Details</h3>
                            <div class="details">
                                <p style="">ID : <?php print $fetch_teacher[0];?></p>
                                <p>NAME : <?php print $fetch_teacher[1];?></p>
                                <p>STUDYING : <?php print $fetch_teacher[3];?></p>
                                <p><?php print $fetch_teacher[4];?> : <?php print $fetch_teacher[5];?></p>
                                <p>Expart : <?php print $fetch_teacher[8]; ?></p>
                                <p>ADDRESS : <?php print $fetch_teacher[9];?></p>
                            </div>
                       </div>
                        <div class="col-md-6">
                            <img src="image/home_teacher/<?php print $fetch_teacher[0]?>.jpg" alt="" style="height:130px;width:130px;border-radius:100%;margin-left: ;margin-top: -33px;padding: 5px;float:right">
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
                       <input type="text" class="form-control" name="name" placeholder="Enter Your Name" style="height:34px;border: 1px solid #ccc;padding: 4px 0;border-radius: 4px;box-shadow: inset 0 1px 1px rgba(0,0,0,.075);font-weight:700;" required>
            <!--            <input type="text" class="form-control form_c">-->
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone" style="height:34px;border: 1px solid #ccc;padding: 4px 0;border-radius: 4px;box-shadow: inset 0 1px 1px rgba(0,0,0,.075);font-weight:700;" required>
            <!--            <input type="text" class="form-control form_c">-->
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="area" placeholder="Enter Your Area" style="height:34px;border: 1px solid #ccc;padding: 4px 0;border-radius: 4px;box-shadow: inset 0 1px 1px rgba(0,0,0,.075);font-weight:700;" required>
<!--
                        <select name="" id="" class="form-control" style="">
                            <option>dhaka</option>
                            <option>dhaka</option>
                            <option>dhaka</option>
                        </select>
-->
                    </div>
                    <div class="form-group">
                        <textarea name="address" class="form-control" id="" cols="30" rows="5" placeholder="Enter Your #house name #road number #area" style="font-weight:700;" required></textarea>
                    </div>
                   
                    <input type="submit" name="confirm" class="" value="Confirm Booking" style="background:#FF5E00;padding:10px 192px;color:white;background:#FF5E00;border:none;border-radius:3px;font-weight:700;">
                  </form>
                  </div>
</form>
                  <div class="modal-footer">

                  </div>
                </div>
              </div>
            </div>
            <!--model  end-->
         </div>
    </div>
</div> 
 <br><br>
  </div>
   <script src="asset/js/jquery-3.1.1.min.js"></script>
   <script src="asset/js/bootstrap.min.js"></script>
   <script src="asset/js/mdb.min.js"></script>
   <script src="asset/js/tether.min.js"></script>
    </body>
</html>