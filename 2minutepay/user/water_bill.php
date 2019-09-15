<?php
session_start();
include("../database/connection.php");
$company_name=$_POST['company_name'];
$customer_id=$_POST['customer_id'];
?>

<html>
 <head>
  <style type="text/css">
  body{background:#1C93AD;}
   .wrappe{height:235px; width:650px; background:#FFFFFF; margin-top:20px; margin-left:370px; margin-bottom:20px; border-radius:5px; }
  .com_name{height:45px; width:350px; color:#9D9D9D; margin-left:25px; font-size:16px; padding:0px 10px; border:none; font-family:serif;
   border-bottom:2px solid #DFDFDF; margin-top:25px; float:left;}
  .customer{height:45px; width:350px; color:#9D9D9D; margin-left:25px; font-size:16px; padding:0px 10px; border:none; font-family:serif;
   border-bottom:2px solid #DFDFDF; margin-top:10px; float:left;}
   .view_bill{height:50px; width:350px; margin-left:25px; border-radius:8px; color:#FFFFFF; background:#3FA7BA; border:none; cursor:pointer;
   font-size:18px; font-family:cursive; margin-top:15px; float:left;}
  </style>
 </head>
<body>
<?php
if(isset($_POST['bill']))
 {
  if(!empty($company_name) && !empty($customer_id))
  { 
    $select_water=mysql_query("SELECT * FROM watter_bill_info WHERE id='$customer_id'");
     $fetch_water=mysql_fetch_array($select_water);
  
   if(strcasecmp($company_name,$fetch_water['7'])==0 AND strcasecmp($customer_id,$fetch_water['1'])==0)
     {
	   $_SESSION['customer_id']=$customer_id;
	  print"<script>location='home.php?p=view_water_bill_info'</script>";
	 }
	 else
	 {
	  $mess="Name & ID not match";
	 }
   }
   else
   {
     $mess="Please Fill Out This Feild";
   }	 
  } 
?>
 <form name="form" enctype="multipart/form-data" method="post">
  <div class="wrappe">
	  <select name="company_name" class="com_name">
	   <option>Select Your WASA</option>
	   <?php
	  $select=mysql_query("SELECT * FROM watter_company");
	 while($fetch=mysql_fetch_array($select))
	 {  
	   ?>
	   <option><?php print $fetch[0]; ?></option>
	  <?php
	 }
	  ?> 
	  </select>
	   <input type="text" name="customer_id" placeholder="Customer ID" class="customer"/>
	  <span style="height:10px; width:300px; font-size:12px; margin-left:35px; font-family:cursive; color:red; float:left;">
	   <?php print $mess; ?>
	   </span>
	   <input type="submit" name="bill" value="View Bill" class="view_bill"/>  
	   <img src="../images/high-value-of-water-study-people-willing-to-pay-more-for-running-water-9H9Kyl-clipart.jpg" height="162px;" width="200px;" style="margin-right:30px; margin-top:-100px; float:right">
  </div>
  </form>
 </body>
</html>