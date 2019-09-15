<?php
    include('database/connect.php');
    session_start();
$email=$_SESSION['email'];
$session=session_id();

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
            background: #E3E3E3;
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
            background:;
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
        .navbar{
            background-color:black;
        }
        .bg{
/*            background:url(asset/service/02_mona.jpg);*/
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
        }
    </style>
  </head>
  <body>
       <?php 
            $id=$_GET['id'];
            
      $select_f=mysql_query("SELECT * FROM food_item WHERE id='$id'");
    $fetch_value_f=mysql_fetch_array($select_f);
      
      ?>
   <?php
      $food_name=$_POST['name'];
    $food_type=$_POST['food_type'];
    $food_quentity=$_POST['food_quentity'];
      if(isset($_POST['checkout'])){
            mysql_query("INSERT INTO order_food(`id`,`email`,`session_id`,`item`,`catagory`,`single_double`,`price`)VALUES('$fetch_value_f[0]','$email','".session_id()."','$fetch_value_f[1]','$fetch_value_f[2]','$fetch_value_f[3]','$fetch_value_f[4]')");
          if(mysql_affected_rows()>0){
            print "successfull";
          }else{
            print 'Unsuccessfull';
          }
      }    
      ?>
  <div class="bg">
      <br><br> <br><br>
      
    <div class="">
        <div class="row" >

            <div class="col-md-4 offset-md-2" style="background:rgba(0,0,0,.9);padding:15px;margin-bottom:132px;">
                          <div class="row">
                    <div class="col-md-4">
                        <p class="text-center" style="color:white;font-weight:700;font-family: 'Roboto' sans-serif;">Item</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-center" style="color:white;font-weight:700;font-family: 'Roboto' sans-serif;">Price</p>
                    </div>
                    <div class="col-md-4">
                        <p class="" style="color:white;font-weight:700;font-family: 'Roboto' sans-serif;">Quentity</p>
                    </div>
                </div> 
                <hr>
                           <?php 
$id=$_GET['id'];
                $select_food_info=mysql_query("SELECT * FROM food_item WHERE id='$id'");
                while($fetch_info=mysql_fetch_array($select_food_info)){
            ?>
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-center" style="color:white;font-weight:700;font-family: 'Roboto' sans-serif;"><?php print $fetch_info[1];?></p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-center" style="color:white;font-weight:700;font-family: 'Roboto' sans-serif;"><?php print $fetch_info[4];?></p>
                    </div>
                    <div class="col-md-4">
                        <div class="">
<!--                            <input type="text" name="quentity" style="padding:0px;border:1px solid silver;">-->
                        <select name="" id="" class="form-control">
                           <?php 
                                for($i=0;$i<100;$i++){
                            ?>
                            <option value=""  style="float:right;text-align:right;"><?php print $i;?></option>
                            <?php  } ?>
                        </select>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" name="submit" class="" value="ORDER" style="color:white;font-weight:700;background:#FF5E00;border:none;border-radius:6px;padding:7px 149px;">
                        </div>
                    </div>
                </div>
                <hr>
           <?php } ?> 
            </div>
            
            <div class="col-md-3" style="background:rgba(0,0,0,.5);padding:15px;margin-left:30px;color:white;">
               <h2 class="text-center" style="background:;margin:0 -15px;color:white;">YOUR ORDER</h2>
               <hr>
               <form action="" method="post" enctype="multipart/form-data">
                    
                    <?php 
            $select_order_food=mysql_query("SELECT * FROM order_food WHERE email='$email' or session_id='$session'");
           while($fetch_order=mysql_fetch_array($select_order_food)){
               
           ?>
                    <div class="show-meg">
                        <div class="row">
                            <div class="col-md-12" style="text-align:center;margin:0;padding:0;">
                                
                                <p class="text-left" style="color:white;"><?php print $fetch_order[4];?></p>
                        
                            </div>
<!--                            <div class="col-md-6"></div>-->
                       <div class="row">
                           <div class="col-md-10">
                               <input type="submit" value="Delet" style="background: orangered;border: none;padding: 6px 12px;border-radius: 7px;font-size:12px;color:white;font-weight:700;">
                    <span style="margin:0 10px;"> <input type="text" style="height: 26px;width:44px;border:1px solid silver;border-radius:7px;"> </span>
                    <input type="submit" value="Update" style="background: orangered;border: none;padding: 6px 7px;border-radius: 7px;font-size:12px;color:white;font-weight:700;">
                    <br><br>
                           </div>
                           <div class="col-md-2">
                               <p style="color:white;"><?php print $fetch_order[6];?></p>
                           </div>
                       </div>
                        </div>
                        <hr>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="">Choose Option</label>
                        <select name="" class="form-control" id="">
                           <option>Choose Option</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Choose Option</label>
                        <select name="" class="form-control" id="">
                           <option>Choose Option</option>
                        </select>
                   </div>
                   <input type="submit" class="" value="Cheackout Order" name="checkout" style="background:#FF5E00;font-weight:700;;border:none;padding: 10px 69px;color:white;border-radius: 6px;">
               </form>
           </div>
       </div>
       </div>
       <br><br><br><br>
  </body>
</html>