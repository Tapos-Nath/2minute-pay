<?php
   include("../database/connection.php");
   session_start();
   $email=$_SESSION['email'];
    $name=$_POST['name'];
    $email_info=$_POST['email'];
    $message=$_POST['message'];
     $select_user=mysql_query("SELECT * FROM create_user WHERE email='$email'");
     $fetch_user=mysql_fetch_array($select_user);


    

?>
<!doctype html>
<html>
<head>
<link href="assets/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<link rel="stylesheet" type="text/css" href="../css/user_home.css">
<script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
 
<title>2 minute pay</title>
<link rel="icon" href="../images/icon/2015-10-22_214720.png">
    

<script>
$(document).ready(function () {
    //rotation speed and timer
    var speed = 3000;
    
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    
    
    //if user clicked on prev button
    
    $('#buttons a').click(function (e) {
        //slide the item
        
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        
        //cancel the link behavior            
        return false;
        
    });
    
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    
    
    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
    
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
$(document).ready(function () {

    $('.menu-icon').click(function () {
        if ($('#navigator').css("right") == "-250px") {
            $('#navigator').animate({right: '0px'}, 350);
            $('.menu-icon').animate({right: '205px'}, 350);
            $('.menu-text').animate({right: '300px'}, 350).empty().text("Close");
        } 
        else  {
            $('#navigator').animate({right: '-250px'}, 350); 
            $(this).animate({right: '0px'}, 350);
            $('.menu-text').animate({right: '50px'}, 350).empty().text("Menu");

        } 
	});
    $('.menu-icon').click(function () {
	            $(this).toggleClass("on"); });
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div class="wrapper">
<div class="banner">
			<div class="menu">
			   <ul>
			        <li><a href="user_home.php" style="text-align:center; margin-left:140px;">Home</a></li>
			   		<li><a href="home.php?p=recharge_plan">REACHERGE</a></li>
					<li><a href="#">TRANSFER MONEY</a></li>
					<li><a data-toggle="modal" href="#form-content">FEED BACK</a></li>
					<li><a href="home.php?p=bus">BUS TICKETS</a></li>
					<li><a href="#">HELP</a></li>
					<li><a href="user_login.php">
            
        <?php
           if($_SESSION['email_info']!==true)
           {
         ?>
              <li><a href="user_login.php" style="margin-left:-50px; font-weight:bold;">LOGIN</li></a>
          <?php
            }
            else
            {
              
           ?>
           <li><a href="user_login.php" style="margin-left:-50px; font-weight:bold;">LOGOUT</a></li>
           <?php
            }
           ?>
          </a></li>
			   </ul>
			   
			</div>

			
	

   

	
<div id="navigator">
  <ul id="nav">
     <li class="nav_tab"> <a href="#">
      <p>Home</p>
      </a> </li>
    <li class="nav_tab"> <a href="home.php?&p=my_wallet">
      <p>My WALLET</p>
      </a> </li>
    <li class="nav_tab"> <a href="#">
      <p>UPGRADE WALLET</p>
      </a> </li>
	  <li class="nav_tab"> <a href="#">
      <p>ADD MONEY</p>
      </a> </li>
    <li class="nav_tab"> <a href="#">
      <p>HELP</p>
      </a> </li>
    <li class="nav_tab"> <a href="#">
      <p>CONTACT US</p>
      </a> </li>
	  <li class="nav_tab"> <a href="#">
      <p>ABOUT US</p>
	     </a> </li>
		 <li class="nav_tab"> <a href="user_login.php" style=" font-weight:bold;">
      <?php
           if($_SESSION['email_info']!==true)
           {
         ?>
      <p>Login</p>
        <?php
          }
          else
          {
        ?>
              <p name="log">Logout</p>;
        <?php
          }
        ?>
      </a> </li>
  </ul>
</div>
<div class="menu-icon">
  <?php
           if($_SESSION['email_info']!==true)
           {
         ?>
         <img src="../images/menu.png">
         <?php
           }
           else
           {
         ?>
  <img src="../images/user_img/<?php print $email;?>.jpg" height="40px" width="40px;" style="border-radius:100px;">
      <?php
         }
      ?>
</div>




             <div class="slider">
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:850px;margin:0px auto 0px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/123-slider.jpg" /></li>
                <li><img src="images/bookbus.gif" /></li>
                <li><img src="images/imageSS.dmp.full.jpg" /></li>
                <li><img src="images/Pay-Electricity-Bill-Online.png" /></li>
                <li><img src="images/1451930648_slider2.jpg" alt="" /></li>
                <li><img src="images/Slider3.png" /></li>
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive JavaScript Slideshow">Responsive JavaScript Slideshow</a></div>
        </div>
    </div> 
			</div>
          <div id="form-content" class="modal hide fade in" style="display: none;">
            <form action="" method="post">
              <?php
                   if(isset($_POST['send']))
     {
        if(!empty($name) && !empty($email_info) && !empty($message))
        {
          mysql_query("INSERT INTO feedback_info(`email`,`name`,`message`)VALUE('$email_info','$name','$message')");
            if(mysql_affected_rows()>0)
            {
                print"<script>alert('Send Your Message')</script>";
            }
            else
            {

            }
        }
        else
        {
            print"<script>alert('Please Fill in the Field')</script>";
        }
     }
     ?>
      <div class="modal-header">
        
        <h3>Send me a message</h3>
      </div>
      <div class="modal-body">
        
          <label class="label" for="name" style="margin-left:-205px;">Your Name</label><br>
          <input type="text" name="name" class="input-xlarge" value="<?php print $fetch_user[0]; ?>"><br>
          <label class="label" for="email" style="margin-left:-203px;">Your E-mail</label><br>
          <input type="email" name="email" class="input-xlarge" value="<?php print $email ?>"><br>
          <label class="label" for="message" style="margin-left:-178px;">Enter a Message</label><br>
          <textarea name="message" class="input-xlarge"></textarea>
        
      </div>
      <div class="modal-footer">
        <input class="btn btn-success" type="submit" value="Send!" name="send">
        <a href="#" class="btn" data-dismiss="modal">Cancle</a>
      </div>
      </form>
    </div>
			<div class="icon">
			   <li><a href="home.php?p=bus"><img src="../images/bus2.png" height="50px;" width="50px;"><br>Bus Tickets</a></li>
			   <li><a href="home.php?p=gas_info"><img src="../images/gas2.png" height="50px;" width="50px;"><br>Gas Bill</a></li>
			   <li><a href="#"><img src="../images/icon/2015-10-22_214720.png" height="50px;" width="50px;"><br>Hotel Book</a></li>
			   <li><a href="home.php?p=electric_bill"><img src="../images/hint-info.png" height="50px;" width="50px;"><br>Electricity&nbsp;&nbsp;</a></li>
			   <li><a href="home.php?p=recharge_plan"><img src="../images/recharge.png" height="50px;" width="50px;"><br>Recarge</a></li>
			   <li><a href="home.php?p=operator_name_select"><img src="../images/usb_png9058.png" height="50px;" width="50px;"><br>data card</a></li>
			   <li><a href="home.php?p=water_info"><img src="../images/water.png" height="50px;" width="50px;"><br>Water Bill</a></li>
			   <li><a href="home.php?p=insurance"><img src="../images/insurance.jpg" height="50px;" width="50px;"><br>Insurance</a></li>
			   <li><a href="home.php?p=shop_now"><img src="../images/shop.png" height="50px;" width="50px;"><br>Shoping</a></li>
			</div>
		</div>
	
		   <div class="head">
		      <div class="text1">
			     <div  class="video">
<video controls preload="auto" width="500px" height="280px" style="border:2px solid #ccc;"  poster="ing-world-q12016.jpg">
<source src="Video 2016 10 17 101404.mp4" type="video/mp4">
</video>
			  </div>
			  <div class="text2">
			     <a>The best way to Bangladesh online payment system.</a>
				 <p>Shopping on Backpack is fast, reliable and fun! Buy products from the U.S. and get them in less than 16 days. Enjoy our world class shopper guarantee policy and many other benefits like secure payment, home delivery and more</p>
			  </div>
		   </div>
		  </div>
		   <div class="icon_dt">
		     <div class="icon1">
			 	<img src="../images/bus2.png" height="60px;" width="60px;" style="margin-top:20px;"><br>
				<a>Online bus tickets system</a>
				<span class="text_style">Get your items in 16 days. Our delivery system is equipped with cutting edge tracking and advanced digital verification methods.</span>
			 </div>
			 <div class="icon2">
			    <img src="../images/gas2.png" height="60px;" width="60px;" style="margin-top:20px;"><br>
				<a>Online gash bill payment system</a>
				<span class="text_style">Get your items in 16 days. Our delivery system is equipped with cutting edge tracking and advanced digital verification methods.</span>
			 </div>
			 <div class="icon3">
			    <img src="../images/hint-info.png" height="60px;" width="60px;" style="margin-top:20px;"><br>
				<a>Online electricity bill payment</a>
				<span class="text_style">Get your items in 16 days. Our delivery system is equipped with cutting edge tracking and advanced digital verification methods.</span>
			 </div>
			 <div class="icon4">
			    <img src="../images/water.png" height="60px;" width="60px;" style="margin-top:20px;"><br>
				<a>Online water bill payment system</a>
				<span class="text_style">Get your items in 16 days. Our delivery system is equipped with cutting edge tracking and advanced digital verification methods.</span>
			 </div>
		   </div>
		   
		     <div class="comment">
			     <div id="carousel">
  <div class="btn-bar">
    <div id="buttons"><a id="prev" href="#"><</a><a id="next" href="#">></a> </div>
  </div>
  <div id="slides">
    <ul>
      <?php
           $select_comment=mysql_query("SELECT * FROM comment_info");
             while($fetch_c=mysql_fetch_array($select_comment))
             {
      ?>
      <li class="slide">
	   <img src="../images/user_img/<?php print $fetch_c[1]; ?>.jpg" height="100px" width="100px" style="border-radius:100px; float:left;">
	    <a style="color:#333333; font-family:monospace; margin-left:15px; margin-top:30px; text-shadow:1px 1px 1px #333; font-size:18px; float:left;"><?php print $fetch_c[2]; ?></a>
        <div class="quoteContainer">
          <p class="quote-phrase"><span class="quote-marks">"</span> <?php print $fetch_c[3]; ?><span class="quote-marks">"</span> </p>
        </div>
        
      </li>
      <?php
         }
      ?>

    </ul>
  </div>
</div>
 

			 </div>
			 
		 <div class="footer">
		    <div class="foot1">
			   <span class="com">COMPANY</span>
			     
				     <li><a href="#">About</a></li>
					 <li><a href="#">Team</a></li>
					 <li><a href="#">Career</a></li>
					 <li><a href="#">Blog</a></li>
					 <li><a href="#">Press</a></li>
					 <li><a href="#">Contact</a></li>
					 
				 
			</div>
			<div class="foot2">
				<span class="com">HELP & SUPPORT</span>
			     
				     <li><a href="#">Home</a></li>
					 <li><a href="#">Mobile Apps</a></li>
					 <li><a href="#">Payment Option</a></li>
					 <li><a href="#">Faq</a></li>
					 <li><a href="#">support</a></li>
					 
			</div>
			<div class="foot3">
				<span class="com">POLICIES</span>
			     
				     <li><a href="#">Privacy & policy</a></li>
					 <li><a href="#">Teams & condition</a></li>
					 <li><a href="#">refund policy</a></li>
					 <li><a href="#"> Grievance Policy</a></li>
					 
			</div>
		   <div class="foot4">
				<span class="com">CONTACT</span><br>
		         <a href="#"><img src="../images/facebook_icon_gray_png_tn.png_tn.png" height="20px" width="20px" style="margin-left:10px;"></a>
			     <a href="#"><img src="../images/download.png" height="20px" width="20px" style="margin-left:10px;"></a>
			     <a href="#"><img src="../images/google-plus-512.png" height="20px" width="20px" style="margin-left:10px;"></a>
			     <a href="#"><img src="../images/LINKEDIN-128.png" height="20px" width="20px" style="margin-left:10px;"></a>
			     <a href="#"><img src="../images/youtube-512.gif" height="20px" width="20px" style="margin-left:10px;"></a>
				
			     <span class="com1">VERIFIED BY</span>	
				 <a href="#"><img src="../images/BKASH-e1408948509413.jpg" height="30px" width="55px"></a>	
				 <a href="#"><img src="../images/icon_mastercard.png" height="30px" width="55px"></a>	
				 <a href="#"><img src="../images/paypal_payment_methods_copy-512.png" height="30px" width="55px"></a>		
				 
				 </div>
		 </div>
 </div>
</body>
</html>
