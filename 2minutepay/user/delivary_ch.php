<?php
  include("../database/connection.php");
  session_start();
  $email=$_SESSION['email'];
  

  $select_data=mysql_query("SELECT * FROM create_user WHERE email='$email'");
  $fetch_data=mysql_fetch_array($select_data);
?>
<?php
 if(isset($_POST['logout']))
 {
    print"<script>location='user_login.php'</script>";
 }
 if(isset($_POST['log']))
 {
    print"<script>location='user_login.php'</script>";
 }
?>






<html>

<head>
<title>Delivary</title>
<link rel="icon" href="../images/icon/images (2).png">
<link type="text/css" rel="stylesheet" href="../css/delivary_ch.css">
</head>
<body>
<?php 
$total_pricessss=$_POST['total'];
print "$total_pricessss";
?>


  
<div class="wraper">
<div class="mean_content">
      <div class="ful_table">
	  <form name="home_delivery" method="post">
	  <?php
if(isset($_POST['homedelivery']))
{
 $_SESSION['chose_info']=true;
print "<script>location='home.php?p=home_de';</script>";
}
else
{

}

?> 
             <h2>Choose delivery option</h2>
             <div class="home_delivery">
		      <span  style="float:left"><img src="../images/icon/k8872099.jpg"width="120px" height="120px">
		     </span>
			 <h3 style="color:#666666; font-size:14px;word-spacing:5px; font-family:Geneva, Arial, Helvetica, sans-serif">Home Delivery</h3>
			   <b style="color:#666666; font-size:12px">Item will be delivered to Your home address in 2weeks.</b><br>
			   <b style="color:#999999; font-size:12px;">To continue, select home delivery and enter your address.</b>
			   <h3 style="color:#666666; font-size:14px;word-spacing:5px; font-family:Geneva, Arial, Helvetica, sans-serif">Charge: £200</h3>
			   <input type="submit" name="homedelivery" class="home_select_button" value="Select Home Delivery">
         </div>
	             <div class="pickup_delivery">
			
			   <span style=" float:left">
		       <img src="../images/icon/k6032953.jpg" width="120px" height="120px">
		       </span>
			   <h3 style="color:#666666; font-size:14px;word-spacing:5px; font-family:Geneva, Arial, Helvetica, sans-serif">Pick UP</h3>
			   <b style="color:#666666; font-size:12px">You'll need to pick up the item from the following address in weeks.</b><br>
			   <b style="color:#999999; font-size:12px;">ebay pick up point: ebay Shop<br> 152/2/k/1 Green Road, Dhaka </b>
			   <h3 style="color:#666666; font-size:14px;word-spacing:5px; font-family:Geneva, Arial, Helvetica, sans-serif">Charge: Free!</h3>
			   <input type="submit" name="pickup" class="pickup_select_button" value="Select Pick Up">
			   </form>
		 </div>
		
      </div>
	   <div class="add" style="color:#fff">
		   <iframe src="https://www.google.com/maps/d/embed?mid=13gl2A2_fGkmxeTysbnV0F8PmlM0" width="430" height="420" style="margin-top:-10px;"></iframe>
		 </div>
     <div class="add2">
	 <marquee>
	   <img src="../images/gramen/1GB-3G-Pack-300 tk.png" height="250px" width="1100px">
	   <img src="../images/gramen/3G-packages-inner.png" height="250px" width="1100px">
	   <img src="../images/gramen/1165852_0_original.jpg" height="250px" width="1100px">
	   <img src="../images/gramen/emergency-balance-gp-prepaid-inner.png" height="250px" width="1100px">
	   <img src="../images/gramen/images (1).jpg" height="250px" width="1100px">
	   <img src="../images/gramen/images (2).jpg" height="250px" width="1100px">
	   <img src="../images/gramen/images (3).jpg" height="250px" width="1100px">
	   <img src="../images/gramen/images.jpg" height="250px" width="1100px">
	   <img src="../images/gramen/STAR-Bundle-Offer__946x318_0.jpg" height="250px" width="1100px">

	 </marquee>
	 </div>
      </div> 
  

</div>

</body>

</html>