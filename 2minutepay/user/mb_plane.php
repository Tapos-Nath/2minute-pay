<?php
session_start();
include("../database/connection.php");
$company_name=$_GET['name'];
?>
<html>
<head>
<style type="text/css">
.gp_plane{height:80px; width:1350px; background:#1C93AD; float:left;}
.plane_design{font-size:25px; font-family:arial; font-weight:bold; margin-left:455px;color:#FFFFFF; float:left;}
.design{font-size:14px; font-family: GothamRounded-Book,sans-serif; font-style:inherit; letter-spacing:.5px; color:#9FA6A7;}
.butto_design{font-size:14px; font-family:GothamRounded-Book,sans-serif; color:#FFFFFF; background:#3FA7BA; cursor:pointer; border:none; border-radius:8px;
               height:35px; width:75px; transition:1s;}
.butto_design:hover{background:#2C8292; transition:1s;}
.sta_design{font-family: GothamRounded-Book,sans-serif; font-style:inherit; font-size:16px; letter-spacing:1px; color:#9FA6A7;}			}   
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="gp_plane">
   <span class="plane_design" style="height:50px; width:250px; margin-top:25px;"><?php print $company_name; ?></span>
   <span style="height:50px; margin-top:25px; width:250px; float:left;">
    <font style="font-size:25px; font-family:arial; font-weight:bold; color:#FFFFFF; float:left;">Data Plan</font>
   </span>
 </div>
<form id="form1" name="form1" method="post" action="">
  <table width="725" border="0" align="center">
  <tr>
    <td height="40" width="142" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">MB</span></td>
	<td width="136" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Price</span></td>
	<td width="213" align="center"style="border-bottom:1px solid #F6F6F6;"><span class="sta_design">Valid Date</span></td>
  </tr>
   <?php
    $select_op=mysql_query("SELECT * FROM data_card_info WHERE name='$company_name'");
	while($fetch_op=mysql_fetch_array($select_op))
	{
   ?>
    <tr>
    <td width="142" height="70" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['2']; ?></span></td>
      <td width="136" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['3']; ?></span></td>
      <td width="213" align="center" style="border-bottom:1px solid #F6F6F6;"><span class="design"><?php print $fetch_op['4']; ?></span></td>
      <td width="214" align="center" style="border-bottom:1px solid #F6F6F6;"><label>
       
		
		 <button type="button" class="butto_design" data-toggle="modal" data-target="#myModal">Pay Now</button>
	   
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
         <input type="submit" class="btn btn-primary" name="Submit" value="Confirm" style="margin-left:118px; float:left;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 </div>
      </div>
    </div>
  </div>
		
      </label></td>
    </tr>
   <?php
   }
   ?>	
  </table>
</form>
</body>
</html>