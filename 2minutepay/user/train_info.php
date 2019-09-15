<?php
  include("../database/pay_connection.php");
  session_start(); 
  $fromm=$_SESSION['fromm'];
  $to=$_SESSION['to'];
  $tclass=$_SESSION['tclass'];
  $date=$_SESSION['date'];
  $email=$_SESSION['email_info'];
?>
<html>
<head>

<style type="text/css">
.place
{
	height:60px;
	width:1350px;
	background:#1C93AD;
	float:left;
}
.pick_seat
{
	width: 100px;
    height: 36px;
    background: #FA5400;
    border: none;
    color: #FFFFFF;
    padding: 9px 17px;
    font-size: 12px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 4px 4px 4px;
	text-decoration:none;
    cursor: pointer;
}
.pick_seat:hover
{
	 background:#DD7000;
}
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #666666; font-weight: bold; }
-->
</style>
</head>
<body>
<div class="place">
   <div style="color:#fff; font-family:arial; font-size:24px; font-weight:bold; margin-top:10px; text-shadow:1px 1px 1px #000; height:60px; width:400px; margin-left:450px;">
   <?php print $fromm; ?> To <?php print $to; ?>
   </div><div style="color:#fff; height:60px; width:200px; float:right; margin-right:270px; margin-top:-50px;">Date:<?php print $date;?></div>
</div>
<form name="form1" enctype="multipart/form-data" action="" method="post">
<table width="1063" align="center" cellpadding="1" cellspacing="1" >
  <tr style="border-bottom:1px solid #ccc;">
    <td width="201" height="74" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">TRAIN NAME </span></td>
    <td width="70" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">CETAGORY </span></td>
	<td width="100" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">ADULT</span></td>
	<td width="100" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">CHILD</span></td>
    <td width="70" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">Dep.Time</span></td>
    <td width="70" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">Arr.Time</span></td>
    <td width="96" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">Distance</span></td>
    <td width="130" style="border-bottom:1px solid #DADADA;">&nbsp;</td>
  </tr>
<?php
 $select_train=mysql_query("SELECT * FROM train_info WHERE fr='$fromm' AND too='$to' AND cetagory='$tclass'");
 while($fetch_train=mysql_fetch_array($select_train))
 {
 $train_name=$fetch_train[0];
?>

  <tr style="border-bottom:1px solid #999;">
    <td height="109" align="center" style="border-bottom:1px solid #DADADA; color:#6699CC;; font-family:Arial, Helvetica, sans-serif;"><?php print $fetch_train[0]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA; color:#767676; font-family:Geneva, Arial, Helvetica, sans-serif;">
	  <select name="cetagory">
	  
	  <?php
	   $sele_tr=mysql_query("SELECT * FROM train_info WHERE train_name='$train_name'");
       while($fetch_clas=mysql_fetch_array($sele_tr))
	   {
	  ?>
	  <option><?php print $fetch_clas[1]; ?></option>
	  <?php
	  }
	  ?>
	  </select>
	</td>
    <td align="center" style="border-bottom:1px solid #DADADA; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">
	 <select name="adult">
	 <option>1</option>
	 <option>2</option>
	 <option>3</option>
	 <option>4</option>
	 </select>
	</td>
	<td align="center" style="border-bottom:1px solid #DADADA; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">
	 <select name="child">
	 <option>0</option>
	 <option>1</option>
	 <option>2</option>
	 <option>3</option>
	 <option>4</option>
	 </select>
	</td>
	<td align="center" style="border-bottom:1px solid #DADADA; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;"><?php print $fetch_train[4]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;"><?php print $fetch_train[5]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA;"><?php print $fetch_train[7]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA;"><input type="submit" name="search" value="Search" class="pick_seat"></td>
  </tr>
<?php
}
?>
<?php
 if($_POST['search'])
 {
   $cetagory=$_POST['cetagory'];
   $adult=$_POST['adult'];
   $child=$_POST['child'];
    $select_fare=mysql_query("SELECT * FROM train_info WHERE cetagory='$cetagory' AND train_name='$train_name'");
    $fetch_fare=mysql_fetch_array($select_fare);
   $fare=$fetch_fare[6];
   $total=$fare*$adult;
    $select_pass=mysql_query("SELECT * FROM train_passenger_info");
	$fetch_pass_email=mysql_fetch_array($select_pass);
    if($email!==$fetch_pass_email[9])
	  {
        mysql_query("INSERT INTO train_passenger_info(`t_name`,`classs`,`adult`,`child`,`fare`,`total`,`form`,`too`,`date`,`email`,`session_id`)
               VALUE('$train_name','$cetagory','$adult','$child','$fare','$total','$fromm','$to','$date','$email','".session_id()."')");
			   if(mysql_affected_rows()>0)
			   {
			    print"<script>location='train_pay_ticket.php'</script>";
			   }
			   else
			   {
			    print"";
			   }
              		
      }
	  else
	  {
	   mysql_query("UPDATE train_passenger_info SET t_name='$train_name',classs='$cetagory',adult='$adult',child='$child',fare='$fare',total='$total',form='$fromm',too='$to',
	      date='$date',email='$email',session_id='".session_id()."'");
		  	if(mysql_affected_rows()>0)
			   {
			    print"<script>location='train_pay_ticket.php'</script>";
			   }
			   else
			   {
			    print"";
			   }
	  }		
 }
?>  
</table>
</form>
</body>
</html>