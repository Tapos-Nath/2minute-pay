<?php
include("../database/connection.php");
session_start();
if($_SESSION['email_info']==true)
{
$email=$_SESSION['email'];
$card_name=$_POST['card_name'];
$card_no=$_POST['card_no'];
$cvv=$_POST['cvv'];
$payment=$_POST['payment'];

    $select_user=mysql_query("SELECT * FROM create_user WHERE email='$email'");
  $fetch_user=mysql_fetch_array($select_user);
  $phone=$fetch_user['2'];



  $select_wallet=mysql_query("SELECT * FROM wallet WHERE email='$email'");
  $fetch_wallet=mysql_fetch_array($select_wallet);
if(isset($_POST['add_money']))
{

switch($card_name)
 {
 case'Master Card':
 {
  print "wasif miraz";
 }
 break;

		 default:
		 {
		   print "no select card";
		 }
 
 }
	if(!empty($card_name) && !empty($card_no) && !empty($cvv) && !empty($payment))
	{
	$mastercard=mysql_query("SELECT * FROM mastercard");
	$fetch_data=mysql_fetch_array($mastercard);

 if($card_no==$fetch_data[0] && $cvv==$fetch_data[1])
 {
 	$code=$fetch_data[0];
   $up_card=$fetch_data[2]-$payment;
mysql_query("UPDATE mastercard SET amount='$up_card' WHERE card_number='$code'");    

 	if(!$email==$fetch_wallet['0'])
 	{

  mysql_query("INSERT INTO wallet(`email`,`phone`,`amount`)VALUE('$email','$phone','$payment')");
  $message="Money Added Successful";
   }
   else
   {
   	$up_amunt=$payment+$fetch_wallet[2];
    mysql_query("UPDATE wallet SET amount='$up_amunt' WHERE email='$email'");
    $message="Money Added Successful";
   }	
 
 }
 else
 {
 $message="invalid your card number or cvv number";
 }
}
else
{
  $message="Please fill out this page";
}

}

 
 ?>

<html>
<head>
<style type="text/css">
.wallet_text
{
font-size:20px;text-shadow:1px 2px #ccc; margin-left:5px;
    margin-top: 7px; font-family:monospace; color:#04000c; padding:25 100px; float:left; width:480px; height:30px;
}
.message
{
	font-size:18px; font-weight:bold; text-shadow:1px 0px #fff; margin-left:5px;
    margin-top: 7px; font-family:monospace; color:#fff; padding:25 100px; float:left; width:480px; height:30px;


}
.pay_invoice{height:114px;width:496px;background:url(../images/add_money.png);border-radius:8px 8px 0px 0px;border-bottom:1px solid #D2D2D2; float:left}
.invo_design{font-size:22px; text-shadow:1px 2px #ccc;
    margin-top: 1px; font-family:monospace; color:#404a4e; padding:25 100px; float:left;width:480px; height:30px}
.payment_box{height:40px; width:300px; border:1px solid #CECECE; border-radius:5px; padding:0px 10px; margin-left:50px; float:left;}
.care_no{height:30px; width:300px; margin-left:-45px; font-size:17px;font-family:monospace;color:#788890;font-weight:600; margin-top:7px; float:left;}
.card_box{height:40px; width:300px; border:1px solid #CECECE; border-radius:5px; padding:0px 10px; margin-left:50px; float:left;}
.expiry{height:30px; width:300px; margin-left:-45px; font-size:17px; font-family:monospace; color:#788890; font-weight:600; margin-top:7px; float:left;}
.expiry_box{height:40px; width:300px; border:1px solid #CECECE; border-radius:5px; padding:0px 10px; margin-left:50px; float:left;}
.securty{height:30px; width:300px; margin-left:-45px; font-size:17px; font-family:monospace; color:#788890; font-weight:600; margin-top:7px; float:left;}
.security_box{height:40px; width:300px; border:1px solid #CECECE; border-radius:5px; padding:0px 10px; margin-left:50px; float:left;}
.Zip{height:30px; width:300px; margin-left:-45px; font-size:17px; font-family:monospace; color:#788890; font-weight:600; margin-top:7px; float:left;}
.zip_box{height:40px; width:300px; border:1px solid #CECECE; border-radius:5px; padding:0px 10px; margin-left:50px; float:left;}
.add_mon{height:40px; width:300px; border:none; border-radius:5px; cursor:pointer; font-size:18px; font-family:monospace; color:#FFFFFF; background:#00BFBF;
          margin-left:50px; margin-top:15px; transition:.5s; float:left;}
.add_mon:hover{background:#54C7C3; transition:.5s;
}

select
{
float:left;
width:300px;
height:40px;
background:#FFFF;
margin-left:51px;
border-radius:5px;
font-family:Arial, Helvetica, sans-serif;
font:20px;
color:#666666
}
.cv
{
	height:30px; width:300px; margin-left:-81px; font-size:17px; font-family:monospace; color:#788890; font-weight:600; margin-top:7px; float:left;}



}
		  
</style>
</head>
 <body>
 


  <form name="form" method="post" enctype="multipart/form-data">
  	<div class="main_wrapper"style="height:570px; width:796px; margin-top:1px; margin-left:187px;">
   <div class="wrapper" style="height:562px; width:496px; border:1px solid #D2D2D2;margin-left:200px; border-radius:10px; float:left;">
     <div class="pay_invoice">
     		  <span class="invo_design">Wallet Status</span>
	    <span class="wallet_text">Now Wallet Balance :<img src="../images/Taka_(Bengali_letter).svg" width="12px" height="12px"><?php print $fetch_wallet['2']; ?></span>
	        <span class="message"><?php print "$message"?> </span>

	 </div>
	   <div class="card" style="height:80px; width:300px; margin-left:50px;  float:left;">
		<img src="master-card-blue-icon.png" style="height:50px; width:50px; margin-top:15px;float:left;">
	    <img src="Visa-icon.png" style="height:50px; width:50px; margin-top:15px; float:left; margin-left:30px;">
	   </div>
	   <span class="payment" style="height:30px; width:300px; margin-left:50px; float:left;">
	   <font style="font-size:17px; font-family:monospace; color:#788890; font-weight:600; margin-top:5px; float:left;">Select Card</font><br>
	   </span>
	   <select name="card_name">
	         <option>Select Card</option>
		 	<option>Master Card</option>
		 	<option>Visa Card</option>
		 </select>
	     <span class="payment" style="height:30px; width:300px; margin-left:50px; float:left;">

		  <font style="font-size:17px; font-family:monospace; color:#788890; font-weight:600; margin-top:5px; float:left;">Payment amount</font>
		 </span>

		   <input type="text" name="payment" Placeholder="Enter Amount" class="payment_box"/>
		   <span class="care_no">Card number</span>
		   <input type="text" name="card_no" placeholder="Enter number" class="card_box"/>
            <span class="care_no">CVV</span>
		   <input type="password" name="cvv" placeholder="CVV" class="security_box"/>
		   
		   <input type="submit" name="add_money" value="Add Money" class="add_mon"/>
    
   </div>
</div>
  </form>
 </body>
</html>
<?php 
}
else
{
 print "<script>location='user_login.php'</script>";

}

?>