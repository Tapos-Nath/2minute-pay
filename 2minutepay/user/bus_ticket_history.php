<?php
session_start();
include("../database/connection.php");
$email=$_SESSION['email'];
?>
<html>
<head>
<style type="text/css">
.gp_plane{height:80px; width:1350px; background:#1C93AD; float:left;}
.design_his{font-size:24px; font-family: GothamRounded-Book,sans-serif; font-style:inherit; letter-spacing:.5px; color:#FFFFFF; margin-left:520px; margin-top:30px; 
             font-weight:bold; float:left;}
.design{font-size:14px; font-family: GothamRounded-Book,sans-serif; font-style:inherit; letter-spacing:.5px; color:#9FA6A7;}
.butto_design{font-size:14px; font-family:GothamRounded-Book,sans-serif; color:#FFFFFF; background:#3FA7BA; cursor:pointer; border:none; border-radius:8px;
               height:35px; width:75px; transition:1s;}
.butto_design:hover{background:#2C8292; transition:1s;}
.sta_design{font-family: GothamRounded-Book,sans-serif; font-style:inherit; font-size:16px; letter-spacing:1px; color:#9FA6A7;}	
.opera_se{height:40px; width:270px; border:none; border-radius:5px; font-family:GothamRounded-Book,sans-serif; font-size:15px;  color:#9FA6A7; margin-top:20px; 
          float:left; letter-spacing:.5px; cursor:pointer;} 
.search{height:40px; width:100px; border:none; background:#FFFFFF; color:#9FA6A7; font-size:15px; font-family:GothamRounded-Book,sans-serif; margin-top:20px;
        margin-left:20px; border-radius:10px; cursor:pointer; float:left;}
.search:hover{color:#1C93AD;}
.delete{height:40px; width:100px; background:#FF9900; font-size:14px; font-family:Arial, Helvetica, sans-serif; letter-spacing:.5px; border:none; border-radius:8px;
        color:#FFFFFF; cursor:pointer; transition:1s;}
.delete:hover{background:#FF7400; transition:1s;}						    
</style>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
 <div class="gp_plane">
   <span class="design_his">Bus Ticket History</span>
 </div>
  <table width="1000" border="0" align="center">
  <tr>
    <td height="40" width="200" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">email</span></td>
    <td height="40" width="200" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Name</span></td>
    <td height="40" width="150" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">From</span></td>
	<td width="136" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">To</span></td>
	<td width="213" align="center"style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Ac/Non Ac</span></td>
	<td width="213" align="center"style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Price</span></td>
	<td width="213" align="center"style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Seat</span></td>
	<td width="213" align="center"style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Date</span></td>	
  </tr>
   <?php
    if(isset($_POST['delete']))
	{
	   mysql_query("DELETE FROM bus_ticket_history WHERE email='$email'");
	    if(mysql_affected_rows()>0)
		{
		  print"<script>alert('Clear history')</script>";
		}
		else
		{
		 print"";
		}
	}
   ?>
        <?php
		$select_bus=mysql_query("SELECT * FROM bus_ticket_history WHERE email='$email'");
		 while($fetch_bus=mysql_fetch_array($select_bus))
		 {
		?>
    <tr>
	<td width="200" height="70" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_bus['0']; ?></span></td>
	<td width="200" height="70" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_bus['1']; ?></span></td>
    <td width="150" height="70" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_bus['2']; ?></span></td>
      <td width="136" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_bus['3']; ?></span></td>
      <td width="213" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_bus['4']; ?></span></td>
	  <td width="213" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_bus['5']; ?></span></td>
      <td width="213" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_bus['6']; ?></span></td>
	  <td width="213" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_bus['7']; ?></span></td>	  
      </label>
    </tr>
	  <?php
	  }
	  ?>
	<tr>
	  <td width="142" height="60" align="center" >
	  <input type="submit" name="delete" class="delete" value="Clear history"/>
	  </td>
	  <td width="142" align="center"></td>
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