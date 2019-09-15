<?php
include("../database/pay_connection.php");
session_start();
$email=$_SESSION['email_info'];
$date=$_SESSION['date']=$date;
$select_train=mysql_query("SELECT * FROM train_passenger_info WHERE email='$email' AND session_id='".session_id()."'");
$fetch_train=mysql_fetch_array($select_train);
?>

<html>
<head>
 <style type="text/css">
 .name_de{font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; color:#6699CC;}
 .da_de{font-size:15px; font-family:Arial, Helvetica, sans-serif; color:666666;}
 .age{width:68px;}
 .pay{height:34px; width:80px; border:none; border-radius:5px; color:#fff; background:#FA5400; cursor:pointer; font-size:12px; font-weight:bold; 
      font-family:Arial, Helvetica, sans-serif;}
 .pay:hover{background:#DD7000;}
 .wrap{height:auto; width:1350px; float:left;}	   
 </style>
</head>
<body>
<?php
$gender=$_POST['gender'];
$age=$_POST['age'];
?>
<div class="wrap">
<form name="form1" method="post" action="">

<span style="height:60px; width:1350px; background:#1C93AD; float:left;">

</span>
<table width="957" border="0" align="center" style="border:1px solid #999999; margin-top:15px; margin-left:200px; border-radius:5px; float:left;">
  <tr>
    <td width="129" height="36" class="name_de">Journey Date: </td>
    <td width="183" class="da_de"><?php print $fetch_train[8]; ?></td>
    <td width="193" class="name_de">Class:</td>
    <td width="164" class="da_de"><?php print $fetch_train[1]; ?></td>
    <td width="116" class="name_de">Fare:</td>
    <td width="132" class="da_de"><?php print $fetch_train[4]; ?></td>
  </tr>
  <tr>
    <td height="36" class="name_de">From Station: </td>
    <td class="da_de"><?php print $fetch_train[6]; ?></td>
    <td class="name_de">No Adult: </td>
    <td class="da_de"><?php print $fetch_train[2]; ?></td>
    <td class="name_de">Total:</td>
    <td class="da_de"><?php print $fetch_train[5]; ?></td>
  </tr>
  <tr>
    <td height="36" class="name_de">To Station: </td>
    <td class="da_de"><?php print $fetch_train[7]; ?></td>
    <td class="name_de">No Child: </td>
    <td class="da_de"><?php print $fetch_train[3]; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="36" class="name_de">Train:</td>
    <td class="da_de"><?php print $fetch_train[0]; ?></td>
    <td class="name_de">Gender:</td>
    <td><label>
      <select name="gender">
	   <option>Male</option>
	   <option>Female</option>
      </select>
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="36">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="name_de">Age:</td>
    <td><label>
      <input type="text" name="age" class="age">
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="41" colspan="5">&nbsp;</td>
    <td><label>
      <input type="submit" class="pay" name="pay" value="Pay now">
    </label></td>
  </tr>
</table>

</form>
</div>
</body>
</html>