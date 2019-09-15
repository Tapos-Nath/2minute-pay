<?php
    include('database/connect.php');
$page=$_GET['page'];
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
    </style>
  </head>
  <body>
<!--=====================================header area start========================================-->


<!--/Navigation & Intro-->
   <br> <br> <br> <br> <br>
   
   <div class="container">
       <div class="row">
           <div class="col-md-8">
               <div class="row">
                   <div class="col-md-12">
                                             
<!-- Nav tabs -->
<ul class="nav nav-tabs tabs-3" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Menu</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Review</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Info</a>
    </li>
</ul>

    
                   </div>
               </div>
              
               <br>
               <!-- Tab panels -->
              
        <div class="tab-content card"><!--tab main div start -->
            <div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
    </div>
            <div class="tab-pane fade in show active" id="panel1" role="tabpanel"><!-- tab second div start -->
               <div class="row" id=""> 
                   <div class="col-md-4">
                       <ul class="ul_li" id="">
                          <br>
                          <?php
                                $select_food_menu=mysql_query("SELECT * FROM food_menu");
                                while($fetch_food_menu=mysql_fetch_array($select_food_menu)){
                           ?>
                           <li><a href="<?php print $fetch_food_menu[1]?>"><?php print $fetch_food_menu[1];?></a></li>
                          <?php } ?>
                       </ul>
                   </div>
                   <?php

 $select_food_menu=mysql_query("SELECT * FROM food_item WHERE item='Barger'");
$fetch_food_menu=mysql_fetch_array($select_food_menu);

//                        $fetch_food_menu[2]=$_GET['item'];
//                            $item=$_GET['item'];
//                            print $item;
//                        if(!$fetch_food_menu[1]=='item'){
                        if($fetch_food_menu[0]='shop'){
                   ?>
                   <div class="col-md-8">
                      
                       <div class="single_menu">
                       
                        <?php
                               
                           
                        ?>
                         
                            <h4 class="text-center"><?php print $fetch_food_menu[1]; ?></h4>
                           
                             <?php 
                            $select_food_menu=mysql_query("SELECT * FROM food_item WHERE item='Barger'");
                            
                            while($fetch_food_menu=mysql_fetch_array($select_food_menu)){
                       ?>
                          
                          
                          <hr>
                          <form action="" method="post" enctype="multipart/form-data">
                           <div class="row" id="1">
                              
                              <br><br>
                               <div class="col-md-6">
                                   <p><?php print $fetch_food_menu[2];?></p>
                               </div>
                               <div class="col-md-2">
                                   <p><?php print $fetch_food_menu[3];?></p>
                               </div>
                               <div class="col-md-2">
<!--                                   <a href=""><p>Tk.300 <span class="add">add</span></p></a>-->
                                   <a href=""><b><?php print $fetch_food_menu[4];?></b>
                               </div>
                               <div class="col-md-2">    
                                  <a href="service.php?&page=food_menu&faq=abc&id=<?php print $fetch_food_menu[0];?>"><span class="add">Add</span></a>
<!--                              <a href=""><input type="submit" class="add" name="add" value="Add"></a>-->
<!--                              <a href=""><input type="submit" class="add" name="add" value="Add"></a>-->
                               </div>
                           </div>
                           </form>
                           <hr>
                              
                           <?php } ?>
                           <hr>
                          <?php
                            $select_food_menu=mysql_query("SELECT * FROM food_item WHERE item='Pizza'");
$fetch_food_menu=mysql_fetch_array($select_food_menu);
                           
                           ?>
                            <h4 class="text-center"><?php print $fetch_food_menu[1]; ?></h4>
                           
                             <?php 
                            $select_food_menu=mysql_query("SELECT * FROM food_item WHERE item='Pizza'");
                            
                            while($fetch_food_menu=mysql_fetch_array($select_food_menu)){
                       ?>
                          
                          
                          <hr>
                          
                           <div class="row" id="1">
                              
                              <br><br>
                               <div class="col-md-6">
                                   <p><?php print $fetch_food_menu[2];?></p>
                               </div>
                               <div class="col-md-2">
                                   <p><?php print $fetch_food_menu[3];?></p>
                               </div>
                               <div class="col-md-2">
<!--                                   <a href=""><p>Tk.300 <span class="add">add</span></p></a>-->
                                   <a href=""><b><?php print $fetch_food_menu[4];?></b>
                               </div>
                               <div class="col-md-2">    
                                    <a href="service.php?&page=food_menu&faq=abc&id=<?php print $fetch_food_menu[0];?>"><span class="add">Add</span></a>
                               </div>
                           </div>
                           <hr>
                              
                           <?php } ?>
                           <hr>
                           
                            
                           
                      
                       </div>
                       
                   </div>
                   <?php //}else{}  }
                        }
                   ?>
                   </div>
                   
             
         
                   
               </div>
           </div>
       </div>
          <?php
                $id=$_GET['id'];
                $select_food_item=mysql_query("SELECT * FROM food_item WHERE id='$id'");
                $fetch_food_item=mysql_fetch_array($select_food_item);
                
                mysql_query("INSERT INTO order_food(`id`,`session_id`,`item`,`catagory`,`single_double`,`price`)VALUES('$fetch_food_item[0]','".session_id()."','$fetch_food_item[1]','$fetch_food_item[2]','$fetch_food_item[3]','$fetch_food_item[4]')");
               
               
            ?>
           <div class="col-md-4" style="box-shadow: 0px 0px 7px 1px silver">
                <h2 class="text-center" style="background:#DDDDDD;margin:0 -15px;padding: 10px 0px;box-shadow:0px 0px 5px 2px silver;">YOUR ORDER</h2>
                 <form action="" method="post">
                <table class="table">
                  
                   <?php
                        $food_query=mysql_query("SELECT * FROM order_food WHERE session_id='".session_id()."'");
print session_id();
                        while($fetch_query=mysql_fetch_array($food_query)){
                    ?>
                    <tr>
                       <td>
                           <h4><?php print $fetch_query[1];?></h4>
                   <p><?php print $fetch_query[2];?></p>
                   
<!--
                            <label class="btn btn-sm btn-primary btn-rounded">
                                <input type="radio" name="options" id="option1">&mdash;
                            </label>
-->
                            <input type="submit" value="Delet" style="background: orangered;border: none;padding: 6px 12px;border-radius: 7px;font-size:12px;color:white;font-weight:700;">
                            <span style="margin:0 10px;"> <input type="text" style="height: 26px;width:44px;border:1px solid silver;border-radius:7px;"> </span>
                            <input type="submit" value="Update" style="background: orangered;border: none;padding: 6px 7px;border-radius: 7px;font-size:12px;color:white;font-weight:700;">
<!--
                            <label class="btn btn-sm btn-primary btn-rounded">
                                <input type="radio" name="options" id="option2">+
                            </label>
--><span style="margin-left: 46px;
    font-weight: bold;
    font-size: 25px;"><?php print $fetch_query[4];?> Tk</span> 
                                           <hr> 

                        </td>
                        
                    </tr>
                    <?php
                        }
                    ?>
                </table>
                </form>
                <div class="form-group">
                    <select name="" class="form-control" id="">
                        <option value="">dfsdlgl</option>
                        <option value="">dfsdlgl</option>
                        <option value="">dfsdlgl</option>
                        <option value="">dfsdlgl</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <select name="" class="form-control" id="">
                        <option value="">dfsdlgl</option>
                        <option value="">dfsdlgl</option>
                        <option value="">dfsdlgl</option>
                        <option value="">dfsdlgl</option>
                    </select>
                </div>
                
                
<!--                model  start -->




<!-- Button trigger modal -->
<button type="button" class="" data-toggle="modal" data-target="#myModal" style="background:#FF5E00;padding:10px 75px;border:none;border-radius:3px;color:white;font-weight:700;">
  Check Out Your Proccess
</button>
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
      <form action="" method="post">
          
      
      <div class="modal-body">
        <h4 class="modal-title text-center" id="myModalLabel">Order Delevary Details</h4>
        <p class="text-center">Please Provide Your some detailes in order to compelete your order !!</p>
        <div class="form-group">
           <input type="text" class="form-control" style="height:34px;border: 1px solid #ccc;padding: 4px 0;border-radius: 4px;box-shadow: inset 0 1px 1px rgba(0,0,0,.075);">
<!--            <input type="text" class="form-control form_c">-->
        </div>
        <div class="form-group">
            <input type="text" class="form-control" style="height:34px;border: 1px solid #ccc;padding: 4px 0;border-radius: 4px;box-shadow: inset 0 1px 1px rgba(0,0,0,.075);">
<!--            <input type="text" class="form-control form_c">-->
        </div>
        <div class="form-group">
<!--            <input type="text" class="form-control" style="border: 1px solid silver;padding: 7px 0px;border-radius: 7px;box-shadow: 0px 0px 4px 1px silver;">-->
            <select name="" id="" class="form-control" style="">
                <option>dhaka</option>
                <option>dhaka</option>
                <option>dhaka</option>
            </select>
        </div>
        <div class="form-group">
            <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="form-group">
            <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
        </div>
        <input type="submit" class="" value="Place Order" style="background:#FF5E00;padding:10px 192px;color:white;background:#FF5E00;border:none;border-radius:3px;">
      </div>
      </form>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<!--                model  end-->
              
              
             
    
           </div>
           
        
   </div>
     
      </div>
 
   <script src="asset/js/jquery-3.1.1.min.js"></script>
   <script src="asset/js/bootstrap.min.js"></script>
   <script src="asset/js/mdb.min.js"></script>
   <script src="asset/js/tether.min.js"></script>
    </body>
</html>