<?php
  include("../database/connection.php");
  session_start();
  $from=$_SESSION['from'];
  $to=$_SESSION['to'];
  $ceta=$_SESSION['ceta'];
  $date=$_SESSION['date'];



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
   <div style="color:#fff; font-family:arial; font-size:24px; font-weight:bold; margin-top:10px; text-shadow:1px 1px 1px #000; height:60px; width:400px; margin-left:400px;"><?php print $from; ?>  To  <?php print $to; ?> </div><div style="color:#fff; height:60px; width:200px; float:right; margin-right:270px; margin-top:-50px;">Date: <?php print $date; ?></div>
</div>
<form action="" method="post">
<table width="1063" align="center" cellpadding="1" cellspacing="1" >
  <tr style="border-bottom:1px solid #ccc;">
    <td width="201" height="74" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">BUS NAME </span></td>
    <td width="105" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">AC/NON AC </span></td>
    <td width="148" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">TIME</span></td>
    <td width="161" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">DISTANCE</span></td>
    <td width="176" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">PRICE</span></td>
    <td width="96" align="center" style="border-bottom:1px solid #DADADA;"><span class="style7">SEAT</span></td>
    <td width="130" style="border-bottom:1px solid #DADADA;">&nbsp;</td>
  </tr>
    <?php
    $bus_in=mysql_query("SELECT * FROM bus_info WHERE fr='$from' AND tooo='$to' AND cetagory='$ceta'");
    
    while($fetch_bus=mysql_fetch_array($bus_in))
    {
  ?>
  <tr style="border-bottom:1px solid #999;">
    <td height="109" align="center" style="border-bottom:1px solid #DADADA; color:#6699CC;; font-family:Arial, Helvetica, sans-serif;"><?php print $fetch_bus[0]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA; color:#767676; font-family:Geneva, Arial, Helvetica, sans-serif;"><?php print $fetch_bus[1]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;"><?php print $fetch_bus[7]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;"><?php print $fetch_bus[4]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA;  color:#FA5400; font-weight:bold;"><?php print $fetch_bus[5]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA;"><?php print $fetch_bus[6]; ?></td>
    <td align="center" style="border-bottom:1px solid #DADADA;"><a href="home.php?seat=<?php print $fetch_bus[8]; ?>&p=seat" class="pick_seat">Pick Seat</a></td>

  </tr>
  <?php
    }
  ?>
</table>
</form>
</body>
</html>