<?php include("../database/connection.php");
session_start();
$email=$_SESSION['email'];
$select_user=mysql_query("SELECT * FROM create_user WHERE email='$email'");
  $fetch_user=mysql_fetch_array($select_user);
 $select_wallet=mysql_query("SELECT * FROM wallet WHERE email='$email'");
  $fetch_wallet=mysql_fetch_array($select_wallet);
if($_SESSION['email_info']==true)
{  
?>
<html>
 <head>
  <style type="text/css">
  .wrapperrr{height:auto; width:646px; border-radius:5px; background:#FFFFFF; float:left; margin-left:311px}
  .rechage{height:80px; width:650px; border-bottom:1.5px #E0E0E0 dashed;}
  .profile{height:185px; width:646px; border-bottom:1.5px #E0E0E0 dashed; background:url(../images/profile.png)} 
  .reta_fon{height:40px; width:500px; text-decoration:none; font-size:21px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; text-align:left; 
            float:left; letter-spacing:.5px; cursor:pointer; margin-top:30px;}
 .data_de{height:40px; width:500px; text-decoration:none; font-size:21px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; text-align:left;
           float:left; letter-spacing:.5px; cursor:pointer; margin-top:22px;}
 .electricity_h{height:40px; width:500px; text-decoration:none; font-size:21px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; text-align:left;
           float:left; letter-spacing:.5px; cursor:pointer; margin-top:22px;}
 .bus_elec{height:40px; width:500px; text-decoration:none; font-size:21px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; text-align:left;
           	float:left; letter-spacing:.5px; cursor:pointer; margin-top:22px;}
 .insurance_h{height:40px; width:500px; text-decoration:none; font-size:21px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; text-align:left;
       		  float:left; letter-spacing:.5px; cursor:pointer; margin-top:22px;}
 .diss_biil{height:40px; width:500px; text-decoration:none; font-size:21px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; text-align:left;
             float:left; letter-spacing:.5px; cursor:pointer; margin-top:22px;} 
 .gas_bill{height:40px; width:500px; text-decoration:none; font-size:21px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; text-align:left;
             float:left; letter-spacing:.5px; cursor:pointer; margin-top:22px;}
 .watter_bill{height:40px; width:500px; text-decoration:none; font-size:21px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; text-align:left;
             float:left; letter-spacing:.5px; cursor:pointer; margin-top:22px;}
 .landline_hi{height:40px; width:500px; text-decoration:none; font-size:21px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; text-align:left;
            float:left; letter-spacing:.5px; cursor:pointer; margin-top:22px;}	
.head
{
float:left;
width:200px;
height:100px;
background:#557FAA;
}
.profile li 
{
list-style: none;
    text-decoration: none;
    /* margin-top: -2px; */
    line-height: 46px;
    float: right;
    margin-right: 5px;
}
.profile li a 
{
background: #1c93ad;
    padding: 11px 9px;
    color: #fff;
    font-size: 11px;
    border-radius: 5px;
    font-family: sans-serif;
    font-weight: bold;
}
..profile li a 					 			 			 			  		   		   		
  </style>
 </head>
  <body>
   <div class="wrapperrr">
   <div class="profile">
   <div class="prof" style="width:450px; height:102px; float:left; margin-top:82px;">
   <img src="../images/user_img/<?php print $email;?>.jpg" width="100px" height="100px" style="border-radius:100%;margin-left:-19px;margin-top: -6px;"><p style="float:right;     margin-right:179px; color:#FFFFFF; font-weight:bold; font-family:Arial, Helvetica, sans-serif; font-size:21px;margin-left:-19px;line-height: 53px;"><?php print $fetch_user['0'];?></p>
   </div>
   <li><a href="home.php?p=add_money">+ADD MONEY</a></li>
   <div class="balance" style="float:left; width:196px; height:100px;"><p style="float:left; line-height:123px; color:#333333; font-size:13px; font-weight:bold;text-shadow: 1px 1px #ccc;">WALLET BL:<img src="../images/bangladeshi_taka_bangla_currency-128.png" width="12px" height="14px"><?php print $fetch_wallet['2']; ?></p></div>
   </div>
     <div class="rechage">
	   <span style="height:80px; width:120px; margin-left:20px; float:left;">
	     <img src="../images/recharge.png" style="height:70px; width:70px; border-radius:100px; margin-top:5px; float:left;"/>
	    </span>
		  <span style="height:80px; width:500px; float:left;">
		     <a href="home.php?p=recharge_talktime_history" class="reta_fon">Recharge & Talktime History</a>
		   </span>
	 </div>
	   <div class="data_card" style="height:80px; width:660px; border-bottom:1.5px #E0E0E0 dashed; float:left;">
	      <span style="height:80px; width:120px; margin-left:20px; float:left;">
		    <img src="../images/usb_png9058.png" style="height:70px; width:70px; border-radius:100px; margin-top:5px; float:left;"/>
		  </span>
		    <span style="height:130px; width:500px; float:left;">
			  <a href="home.php?p=data_card_history" class="data_de">Data Card History</a>
			 </span>
	    </div>
		  <div class="Electricity" style="height:80px; width:660px; border-bottom:1.5px #E0E0E0 dashed; float:left;">
		    <span style="height:80px; width:120px; margin-left:20px; float:left;">
			  <img src="../images/hint-info.png" style="height:70px; width:70px; border-radius:100px; margin-top:5px; float:left;"/>
			 </span>
			   <span style="height:80px; width:500px; float:left;">
			     <a href="home.php?p=electric_bill_history" class="electricity_h">Electricity History</a>
			   </span>
		  </div>
		    <div class="bus" style="height:80px; width:660px; border-bottom:1.5px #E0E0E0 dashed; float:left;">
			  <span style="height:80px; width:120px; margin-left:20px; float:left;">
			    <img src="../images/bus2.png" style="height:70px; width:70px; border-radius:100px; margin-top:5px; float:left;"/>
			   </span>
			    <span style="height:130px; width:500px; float:left;">
				  <a href="home.php?p=bus_ticket_history" class="bus_elec">Bus Tiket History</a>
				</span>
			</div>
			  <div class="insurance" style="height:80px; width:660px; border-bottom:1.5px #E0E0E0 dashed; float:left;">
			    <span style="height:80px; width:120px; margin-left:20px; float:left;">
				   <img src="../images/insurance.jpg" style="height:70px; width:70px; border-radius:100px; margin-top:5px; float:left;"/>
				 </span>
				   <span style="height:80px; width:500px; float:left;">
				    <a href="#" class="insurance_h">Insurance History</a>
				   </span>
			  </div>
			    <div class="diss" style="height:80px; width:660px; border-bottom:1.5px #E0E0E0 dashed; float:left;">
				  <span style="height:80px; width:120px; margin-left:20px; float:left;">
				   <img src="../images/satellite_antenna-512.png" style="height:70px; width:70px; border-radius:100px; margin-top:5px; float:left;"/>
				  </span>
				    <span style="height:80px; widows:500px; float:left;">
					  <a href="#" class="diss_biil">Dish History</a>
					</span>
				</div>
				  <div class="gas" style="height:80px; width:660px; border-bottom:1.5px #E0E0E0 dashed; float:left;">
				    <span style="height:80px; width:120px; margin-left:20px; float:left;">
					  <img src="../images/gas2.png" style="height:70px; width:70px; border-radius:100px; margin-top:5px; float:left;"/>
					</span>
					  <span style="height:80px; widows:500px; float:left;">
					    <a href="home.php?p=gas_bill_history" class="gas_bill">Gas History</a>
					  </span>
				  </div>
				    <div class="watter" style="height:80px; width:660px; border-bottom:1.5px #E0E0E0 dashed; float:left;">
					   <span style="height:80px; width:120px; margin-left:20px; float:left;">
					     <img src="../images/water.png" style="height:70px; width:70px; border-radius:100px; margin-top:5px; float:left;"/>
					   </span>
					     <span style="height:80px; widows:500px; float:left;">
						   <a href="#" class="watter_bill">Watter History</a>
						 </span>
					 </div>
					   <div class="landline" style="height:80px; width:660px; border-bottom:1.5px #E0E0E0 dashed; float:left;">
					      <span style="height:80px; width:120px; margin-left:20px; float:left;">
						   <img src="../images/landline.png" style="height:70px; width:70px; border-radius:100px; margin-top:5px; float:left;"/>
						  </span>
						    <span style="height:80px; widows:500px; float:left;">
							  <a href="#" class="landline_hi">Landline History</a>
							</span>
					   </div>
	</div>
 </body>
</html>
<?php
}
else
{
 print "<script>location='user_login.php'</script>";
} 

?>