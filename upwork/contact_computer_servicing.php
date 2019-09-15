<?php
    include('database/connect.php');
    session_start();
    $area=$_SESSION['area'];
    $service_name=$_SESSION['service_name'];
    $address=$_SESSION['address'];
print $area;
print $service_name;
print $address;
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
if(isset($_POST['comfirm'])){
    mysql_query("INSERT INTO order_computer_service(`area`,`service_name`,`address`,`name`,`phone`,`email`)VALUES('$area','$service_name','$address','$name','$phone','$email')");
    if(mysql_affected_rows()>0){
        print 'successfulll';
    }else{
        print 'Unsuccessfull';
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
<!--    <link href="https://fonts.googleapis.com/css?family=Baloo|Bree+Serif&amp;subset=devanagari,latin-ext,vietnamese" rel="stylesheet">-->
<!--<link href="https://fonts.googleapis.com/css?family=Baloo|Bree+Serif|Questrial&amp;subset=devanagari,latin-ext,vietnamese" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inconsolata|Maven+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Bree+Serif|Questrial|Roboto&amp;subset=devanagari,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Bree+Serif|Questrial|Roboto&amp;subset=devanagari,latin-ext,vietnamese" rel="stylesheet">
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
            font-family: 'Baloo', cursive;

            font-weight:700;
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
        /*basic reset*/
* {margin: 0; padding: 0;}



body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
	width: 400px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;

	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	
	background: #FF5E00;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #FF5E00;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: #FF5E00;;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}
        .input_type{
            padding:10px 20px;
            
        }
label{
            font-size:18px;
        }
        p{
            font-family: 'Maven Pro', sans-serif;color:#222;font-size:18px;font-weight:500;
        }
    </style>
  </head>
  <body>
       <br><br>
        <div class="container">
            <div class="row">
                

                
                <div class="col-md-4 offset-md-4" style="">
<!--
                   <form action="" method="post" id="msform">
                    <br><br><br>
                    <fieldset>
                    <h1 class="text-center" style="background:#FF5E00;color:white;padding:10px 10px;font-family: 'Bree Serif', serif;font-weight:300;border-radius: 4px;">ORDER NOW</h1>
                    <div class="form-group">
                        <label for="" style="font-size:20px;font-weight:500;font-family: 'Roboto', sans-serif;">Enter Area </label>
                        <input type="text" class="form-control form" style="border:2px solid #FF5E00;padding:4px 0;font-weight:700;color:#C0C0C0;" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="" style="font-size:20px;font-weight:500;font-family: 'Roboto', sans-serif;"> Service Name </label>
                       <input type="text" class="form-control form" style="border:2px solid #FF5E00;padding:4px 0;">
                    </div>
                    <div class="form-group">
                        <label for="" style="font-size:20px;font-weight:500;font-family: 'Roboto', sans-serif;">Street address</label>
                        <input type="text" class="form-control form" style="border:2px solid #FF5E00;padding:4px 0;">
                    </div>
                    <input type="submit" class="" value="NEXT" style="border: none;background: #FF5E00;padding: 10px 155px;border-radius: 6px;color: white;font-weight: 700;font-size: 20px;font-family: 'Bree Serif', serif;">
                    </fieldset>
                    <fieldset>
                    <h1 class="text-center" style="background:#FF5E00;color:white;padding:10px 10px;font-family: 'Bree Serif', serif;font-weight:300;border-radius: 4px;">ORDER NOW</h1>
                    <div class="form-group">
                        <label for="" style="font-size:20px;font-weight:500;font-family: 'Roboto', sans-serif;">Enter Name </label>
                        <input type="text" class="form-control form" style="border:2px solid #FF5E00;padding:4px 0;font-weight:700;color:#C0C0C0;" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="" style="font-size:20px;font-weight:500;font-family: 'Roboto', sans-serif;"> Phone </label>
                       <input type="text" class="form-control form" style="border:2px solid #FF5E00;padding:4px 0;">
                    </div>
                    <div class="form-group">
                        <label for="" style="font-size:20px;font-weight:500;font-family: 'Roboto', sans-serif;">Email</label>
                        <input type="text" class="form-control form" style="border:2px solid #FF5E00;padding:4px 0;">
                    </div>
                    <input type="submit" class="previous action-button" value="Previous" style="border: none;background: #FF5E00;padding: 10px 155px;border-radius: 6px;color: white;font-weight: 700;font-size: 20px;font-family: 'Bree Serif', serif;">
                    <input type="submit" class="next action-button" value="NEXT" style="border: none;background: #FF5E00;padding: 10px 155px;border-radius: 6px;color: white;font-weight: 700;font-size: 20px;font-family: 'Bree Serif', serif;">
                    </fieldset>
                    </form>
                    <br><br><br>
-->
                    <form id="msform" method="post" enctype="multipart/form-data">
                  <!-- progressbar -->
                  
                  <!-- fieldsets -->
                  
                  <fieldset>
                    <h1 class="text-center" style="background:#FF5E00;color:white;padding:10px 10px;font-family: 'Bree Serif', serif;font-weight:300;border-radius: 4px;">ORDER NOW</h1>
<!--                    <h3 class="fs-subtitle">This is step 1</h3>-->
                    <p style="float:left;">Enter Nmae </p>
                    <input type="text" name="name" placeholder="" style="border:2px solid #FF5E00;padding:27px 0;font-weight:700;color:#C0C0C0;" required>
                    <p style="float:left;">Phone </p>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="height:60px;margin-top:3px;background:#FF5E00;color:white;font-weight:700;">+88</span>
                        <input type="text" class="form-control" name="phone" placeholder="" aria-describedby="basic-addon1" style="border:2px solid #FF5E00;padding:28px 0;font-weight:700;color:#C0C0C0;margin-left:-2px;" required>
                    </div>
                    <p style="float:left;">Email </p>
                    <input type="text" name="email" placeholder="" style="border:2px solid #FF5E00;padding:27px 0;font-weight:700;color:#C0C0C0;" required>
                    
<!--                    <input type="button" name="next" class="next action-button" value="NEXT" />-->
                    <input type="submit" name="comfirm" class="previous action-button" value="Comfirm Order">
                  </fieldset>
                 
                </form>
                </div>
            </div>
        </div>
    <script src="asset/js/jquery-3.1.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/mdb.min.js"></script>
      <script src="asset/js/tether.min.js"></script>
         <script>
    
        
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

    </script>
  </body>
</html>