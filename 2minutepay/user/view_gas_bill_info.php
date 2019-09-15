<?php
include("../database/connection.php");
session_start();
$email=$_SESSION['email'];
$customer_id=$_SESSION['customer_id'];
?>

<html>
<head>
<style type="text/css">
.design{font-size:15px; font-family:Arial, Helvetica, sans-serif; color:#7E7E7E; }
.design2{font-size:14px; font-family:Arial, Helvetica, sans-serif; color:#7E7E7E;}
.gasinforma{font-size:30px; font-family:arial; font-weight:bold; padding:19px 520px; color:#FFFFFF; float:left;}
.pay{height:50px; width:150px; color:#FFFFFF; background:#F27900; cursor:pointer; font-size:18px; font-family:cursive; border:none;
     border-radius:10px; margin-left:100px; font-weight:bold;  float:left;}
.pay:hover{background:#D26900; transition:1s;}	 
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="gas_info" style="height:80px; width:1350px; background:#1C93AD;">
   <span class="gasinforma">Gas Bill Information</span>
 </div>
<form name="form1" method="post" action="">
  <table width="1110" height="113" border="0" align="center">
    <tr>
      <td width="128" height="63" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Name</span></td>
      <td width="100" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Customer ID </span></td>
      <td width="60" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">CD NO </span></td>
      <td width="90" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Bill No</span> </td>
      <td width="80" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Zip Code</span></td>
      <td width="90" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Date</span></td>
      <td width="100"align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Address</span></td>
      <td width="80" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Taka</span></td>
      <td width="300" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Gass Company name</span></td>
    </tr>
	<?php
	
	
	
	
	 $select=mysql_query("SELECT * FROM gas_info WHERE id='$customer_id'");
	  while($fetch_info=mysql_fetch_array($select))
	  {
	?>
    <tr>
      <td height="62" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['0']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['1']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['2']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['3']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['4']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['5']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['6']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['7']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['8']; ?></span></td>
    </tr>
	<?php
    if(isset($_POST['pay']))
  {
    
     $_SESSION['bill_no']=$fetch_info[3];
     $_SESSION['name']=$fetch_info[0];
     $_SESSION['id']=$fetch_info[1];
     $_SESSION['date']=$fetch_info[5];

    $select_wallet=mysql_query("SELECT * FROM wallet WHERE email='$email'");
  $fetch_wallet=mysql_fetch_array($select_wallet);
  $total_tx=$fetch_wallet['2']-$fetch_info['7'];
  mysql_query("UPDATE wallet SET amount='$total_tx' WHERE email='$email'");  
   print"<script>location='home.php?p=confirm_gashbill'</script>";
  }
  
	}
	?>

	
	
	
	    <tr>
      <td width="128" height="70" align="center"></td>
      <td width="100" align="center"></td>
      <td width="60" align="center"></td>
      <td width="90" align="center"> </td>
      <td width="80" align="center"></td>
      <td width="90" align="center"></td>
      <td width="100"align="center"></td>
      <td width="80" align="center"></td>
      <td width="300" align="center">
	   <button type="button" class="pay" data-toggle="modal" data-target="#myModal">Pay Now</button>
	   
	    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Now</h4>
        </div>
        <div class="modal-body">
          <p>Confirm Pay Money</p><br>
        </div>
        <div class="modal-footer">
         <input type="submit" class="btn btn-primary" name="pay" value="Confirm" style="margin-left:118px; float:left;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 </div>
      </div>
    </div>
  </div>
	  </td>
    </tr>
  </table>
</form>
</body>
</html>
