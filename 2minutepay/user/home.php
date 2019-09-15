<?php
   include("../database/connection.php");
   session_start();
   $email=$_SESSION['email'];
    $nam=$_GET['p'];
  
  

?>
<!doctype html>
<html>
<head>
<link rel="icon" href="../images/icon/2015-10-22_214720.png">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<link rel="stylesheet" type="text/css" href="../css/user_home.css">
<script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
 
<title>2minute pay</title>
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
			<div class="menu">
			   <ul>
			        <li><a href="user_home.php" style="text-align:center; margin-left:140px;">Home</a></li>
			   		<li><a href="#">REACHERGE</a></li>
					<li><a href="#">TRANSFER MONEY</a></li>
					<li><a href="#">OFFERS</a></li>
					<li><a href="#">BUS TICKETS</a></li>
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
      <p>MY WALLET</p>
      </a> </li>
    <li class="nav_tab"> <a href="#">
      <p>UPGRADE WALLET</p>
      </a> </li>
	  <li class="nav_tab"> <a href="">
      <p>ADD MONEY</p>
      </a> </li>
    <li class="nav_tab"> <a href="#">
      <p>HELP</p>
      </a> </li>
    <li class="nav_tab"> <a href="#">
      <p>Contact Us</p>
      </a> </li>
	  <li class="nav_tab"> <a href="#">
      <p>About Us</p>
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
  <img src="../images/user_img/<?php print $email;?>.jpg" height="50px" width="50px;" style="border-radius:100px;">
      <?php
         }
      ?>
</div>

		</div>
        
        <div class="content">
             <?php
     switch ($nam) {
       case 'bus':
          include("bus.php");
         break;
         case 'bus_info':
          include("bus_info.php");
         break;
         case 'seat':
          include("bus_seat.php");
         break;
         case 'pass_dt':
          include("passen_dt.php");
         break;
         case 'success':
          include("thank_u_adding.php");
         break;
         case 'gas_info':
          include("gas_bill.php");
         break;
         case 'water_info':
          include("water_bill.php");
         break;
         case 'view_water_bill_info':
          include("water_bill_info.php");
         break;
         case 'view_gas_bill_info':
          include("view_gas_bill_info.php");
         break;
		case 'electric_bill':
          include("electric_bill.php");
         break;
		case 'view_electric_bill_info':
          include("view_electric_bill_info.php");
         break;
		 case 'operator_name_select':
          include("operator_name_select.php");
         break;
		 case 'mb_plane':
          include("mb_plane.php");
         break;
		  case 'recharge_plan':
          include("recharge_plan.php");
         break;
         case 'talk_time_plan':
          include("talk_time_plan.php");
         break;
		 case 'my_wallet':
          include("all_history.php");
         break;  
		 case 'add_money':
        include("pay_invoice.php"); 
        break;
		 case 'recharge_talktime_history':
        include("recharge_talktime_history.php"); 
        break;
		case 'data_card_history':
        include("data_card_history.php"); 
        break;
		case 'electric_bill_history':
        include("electric_bill_history.php"); 
        break;
		case 'gas_bill_history':
        include("gas_bill_history.php"); 
        break;
		case 'gas_bill_history':
        include("gas_bill_history.php"); 
        break;
		case 'bus_ticket_history':
        include("bus_ticket_history.php"); 
        break;
		case 'insurance_info':
        include("insurance_bill_info.php"); 
        break;
		case 'insurance':
        include("insurance_info.php"); 
        break;
		case 'confirm_gashbill':
        include("gas_thanks.php"); 
        break;
		case 'confirm_elecbill':
        include("elect_thanks.php"); 
        break;
    case 'confirm_water':
        include("water_thanks.php"); 
        break;
    case 'confirm_insurance':
        include("Insurance_thanks.php"); 
        break;
        case 'confirm_rech':
        include("recharge_thanks.php"); 
        break;
        case 'shop_now':
        include("shop_now.php"); 
        break;
        case 'add_cart':
        include("add_cart.php"); 
        break;
        case 'shoping':
        include("shoping_cart.php"); 
        break;
        case 'deli_ch':
        include("delivary_ch.php"); 
        break;
        case 'home_de':
        include("home_de.php"); 
        break;
        case 'shoping_thanks':
        include("shoping_thanks.php"); 
        break;
		
		
		
       default:
         break;
     }
  ?>
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
