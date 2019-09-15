<?php
session_start();
include("../database/connection.php");
$opera_se=$_POST['opera_se'];

?>
<html>
<head>
<style type="text/css">
.gp_plane{height:80px; width:1350px; background:#1C93AD; float:left;}
.design{font-size:14px; font-family: GothamRounded-Book,sans-serif; font-style:inherit; letter-spacing:.5px; color:#9FA6A7;}
.butto_design{font-size:14px; font-family:GothamRounded-Book,sans-serif; color:#FFFFFF; background:#3FA7BA; cursor:pointer; border-radius:8px; line-height:2.5;
               height:35px; width:75px; transition:1s; float:left; text-align:center;}
.butto_design:hover{background:#2C8292; transition:1s;}
.sta_design{font-family: GothamRounded-Book,sans-serif; font-style:inherit; font-size:16px; letter-spacing:1px; color:#9FA6A7;}	
.opera_se{height:40px; width:270px; border:none; border-radius:5px; font-family:GothamRounded-Book,sans-serif; font-size:15px;  color:#9FA6A7; margin-top:20px; 
          float:left; letter-spacing:.5px; cursor:pointer;} 
.search{height:40px; width:100px; border:none; background:#FFFFFF; color:#9FA6A7; font-size:15px; font-family:GothamRounded-Book,sans-serif; margin-top:20px;
        margin-left:20px; border-radius:10px; cursor:pointer; float:left;}
.search:hover{color:#1C93AD;}		    
</style>
<scr
</head>
<body>
<form id="form1" name="form1" method="post" action="">
 <div class="gp_plane">
  <span style="height:80px; width:270px; margin-left:380px; float:left;">
    <select name="opera_se" class="opera_se">
	 <option>Operator Select</option>
	 <?php
	  $select_op=mysql_query("SELECT * FROM operator_info");
	  while($fetch_op=mysql_fetch_array($select_op))
	  {
	 ?>
	  <option><?php print $fetch_op['0'] ?></option>
	 <?php
	 }
	 ?>
	</select>
  </span>
   <span style="height:80px; width:200px; float:left;">
    <input type="submit" name="search_pl" value="Search Plan" class="search"/>
   </span>
 </div>
  <table width="725" border="0" align="center">
  <tr>
    <td height="40" width="142" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Operator</span></td>
    <td height="40" width="142" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Amount</span></td>
	<td width="136" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Offer</span></td>
	<td width="213" align="center"style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Valid Date</span></td>
  </tr>
   <?php

 if(isset($_POST['search_pl']))
  {   
    $select_op=mysql_query("SELECT * FROM special_offer WHERE operator='$opera_se'");
	while($fetch_op=mysql_fetch_array($select_op))
	{
   ?>
    <tr>
	<td width="142" height="70" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['0']; ?></span></td>
    <td width="142" height="70" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['2']; ?></span></td>
      <td width="136" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['3']; ?></span></td>
      <td width="213" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['4']; ?></span></td>
      <td width="214" align="center" style="border-bottom:1px solid #F6F6F6;"><label>
       
       <a href="recharge_plan.php?&amountt=<?php print $fetch_op['2']; ?>&opertor=<?php print $fetch_op['0']; ?>"><span class="butto_design">Buy Now</span></a>
      </label></td>
    </tr>
   <?php 


   }
 } 
 else
 {
     $select_op=mysql_query("SELECT * FROM special_offer");
	while($fetch_op=mysql_fetch_array($select_op))
	{
   ?>
    <tr>
	<td width="142" height="70" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['0']; ?></span></td>
    <td width="142" height="70" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['2']; ?></span></td>
      <td width="136" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['3']; ?></span></td>
      <td width="213" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['4']; ?></span></td>
      <td width="214" align="center" style="border-bottom:1px solid #F6F6F6;"><label>
	  <a href="recharge_plan.php?&amountt=<?php print $fetch_op['2']; ?>"><span class="butto_design">Buy Now</span></a>
      </label></td>
    </tr>
   <?php 
   } 
 
 } 
   ?>	
  </table>
</form>
</body>
</html>