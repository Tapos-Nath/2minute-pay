<?php
include("../database/connection.php");
session_start();
$email=$_SESSION['email'];
?>

<html>
<head>
<style type="text/css">
.design{font-size:15px; font-family:Arial, Helvetica, sans-serif; color:#7E7E7E; }
.design2{font-size:14px; font-family:Arial, Helvetica, sans-serif; color:#7E7E7E;}
.gasinforma{font-size:25px; font-family:arial; font-weight:bold; padding:30px 520px; color:#FFFFFF; float:left;}
.pay{height:50px; width:150px; color:#FFFFFF; background:#F27900; cursor:pointer; font-size:18px; font-family:cursive; border:none;
     border-radius:10px; margin-left:100px; font-weight:bold;  float:left;}
.pay:hover{background:#D26900; transition:1s;}
.delete{height:40px; width:70px; background:#FF9900; font-size:14px; font-family:Arial, Helvetica, sans-serif; letter-spacing:.5px; border:none; border-radius:8px;
        color:#FFFFFF; cursor:pointer; transition:1s;}
.delete:hover{background:#FF7400; transition:1s;}			 
</style>
</head>
<body>
 <div class="gas_info" style="height:80px; width:1350px; background:#1C93AD;">
   <span class="gasinforma">Gas Bill History</span>
 </div>
<form name="form1" method="post" action="">
  <table width="1300" height="113" border="0" align="center">
    <tr>
      <td width="200" height="63" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">email</span></td>	
      <td width="128" height="63" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Name</span></td>
      <td width="100" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Customer ID </span></td>
      <td width="60" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">CD NO </span></td>
      <td width="90" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Bill No</span> </td>
      <td width="80" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Zip Code</span></td>
      <td width="90" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Date</span></td>
      <td width="200"align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Address</span></td>
      <td width="80" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Price</span></td>
      <td width="300" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design">Company name</span></td>
    </tr>
		  <?php
    if(isset($_POST['delete']))
	{
	   mysql_query("DELETE FROM gas_bill_history WHERE email='$email'");
	     if(mysql_affected_rows()>0)
		 {
		  print"<script>alert('Clear History')</script>";
		 }
	}
  ?>
  <?php
    $select_op=mysql_query("SELECT * FROM gas_bill_history WHERE email='$email'");
	 while($fetch_info=mysql_fetch_array($select_op))
	 {
  ?>
    <tr>
      <td height="62" align="center" width="200" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['0']; ?></span></td>	
      <td height="62" align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['1']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['2']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['3']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['4']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['5']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['6']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['7']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['8']; ?></span></td>
      <td align="center" style="border-bottom:1px solid #E0E0E0;"><span class="design2"><?php print $fetch_info['9']; ?></span></td>
    </tr>
	<?php
	}
	?>
	<tr>
	  <td width="128" height="60" align="center" >
	  <input type="submit" name="delete" class="delete" value="Clear"/>
	  </td>
	  <td width="128" align="center"></td>
	  <td width="100" align="center"></td>
	  <td width="60" align="center"></td>
	  <td width="90" align="center"></td>
	  <td width="80" align="center"></td>
	  <td width="90" align="center"></td>
	  <td width="100" align="center"></td>
	  <td width="80" align="center"></td>
	  <td width="300" align="center"></td>
	</tr>
  </table>
</form>
</body>
</html>
