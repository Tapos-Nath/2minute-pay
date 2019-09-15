<?php
session_start();
include("../database/connection.php");
$se_operator=$_POST['operator'];
$amountt=$_GET['amountt'];
?>

<html>
 <head>
  <style type="text/css">
  body{background:#1C93AD;}
  .prepaid{height:20px; width:20px; margin-left:25px; float:left;}
  .postpaid{height:20px; width:20px; margin-left:10px; float:left;}
  .borwse{font-size:15px; font-family:GothamRounded-Book,sans-serif; color:#50A6C0; letter-spacing:.5px; text-decoration:none; border:none;
          background:none; cursor:pointer;}
  .borwse:hover{text-decoration:underline;}
  .operator{height:50px; width:310px; border:none; border-bottom:2px solid #E0E0E0; color:#9FA6A7; font-family:GothamRounded-Book,sans-serif;
            font-size:15px; letter-spacing:.5px; cursor:pointer;}
  .number{height:50px; width:310px; border:none; border-bottom:2px solid #E0E0E0; color:#9FA6A7; font-family:GothamRounded-Book,sans-serif;
          font-size:15px; letter-spacing:.5px; cursor:pointer;}
  .amount{height:50px; width:310px; border:none; border-bottom:2px solid #E0E0E0; color:#9FA6A7; font-family:GothamRounded-Book,sans-serif;
          font-size:15px; letter-spacing:.5px; cursor:pointer;}	
  .recharge{height:50px; width:315px; border:none; cursor:pointer; font-size:15px; font-family:GothamRounded-Book,sans-serif; letter-spacing:.5px;
            color:#FFFFFF; background:#50A6C0; margin-left:23px; margin-top:15px; border-radius:5px; float:left;}		  	  			
  </style>
 </head>
<body> 
<?php
if(isset($_POST['browse']))
{
  print"<script>location='home.php?p=talk_time_plan'</script>";
}
?>
<form name="form1" method="post" enctype="multipart/form-data" action="">
<div class="wrapperr" style="height:315px; width:364px; background:#FFFFFF; border-radius:5px; margin-left:400px; float:left;">
  <table width="364" height="293" border="0">
    <tr>
      <td width="100" height="59"><label>
        <input name="radio" type="radio" value="prepaid" class="prepaid">
        <font style=" font-size:15px; font-family:GothamRounded-Book,sans-serif; margin-top:6px; color:#9FA6A7; letter-spacing:.5px;
		 float:left;"> Prepaid</font>
      </label></td>
      <td width="100" align="center"><label>
        <input name="radio" type="radio" value="postpaid" class="postpaid">
		 <font style=" font-size:15px; font-family:GothamRounded-Book,sans-serif; margin-top:6px; color:#9FA6A7; letter-spacing:.5px;
		 float:left;"> Postpaid</font>
       </label></td>
      <td width="120" align="center"><label>
       <input type="submit" name="browse" value="Browse Plan" class="borwse">
      </label></td>
    </tr>
    <tr>
      <td height="50" colspan="3" align="center"><label>
        <select name="select" name="operator" class="operator">
		 <option value=""><?php print $amountt; ?></option>
		 <?php
		  $select_op=mysql_query("SELECT * FROM operator_info");
		   while($fetch_op=mysql_fetch_array($select_op))
		   {
		 ?>
		  <option><?php print $fetch_op['0']; ?></option>
		 <?php
		 }
		 ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="50" colspan="3" align="center"><label>
        <input type="text" name="amount" placeholder="Enter Amount" value="<?php print $amountt; ?>" class="amount">
      </label></td>
    </tr>
    <tr>
      <td height="50" colspan="3" align="center"><label>
        <input type="text" name="number" placeholder="Enter Mobile Number" class="number">
      </label></td>
    </tr>
    <tr>
      <td colspan="3" height="50" align="center"><label>
        <input type="submit" name="recharge_now" value="Recharge Now" class="recharge">
      </label></td>
    </tr>
  </table>
 </div> 
</form>
 </body>
</html>