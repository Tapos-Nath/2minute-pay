<?php
session_start();
include("../database/connection.php");
$company_name=$_POST['company_name'];
?>

<html>
 <head>
  <style type="text/css">
  body{background:#1C93AD;}
  .wrapperr{height:235px; width:400px; background:#FFFFFF; margin-left:450px; margin-top:15px; margin-bottom:15px; border-radius:5px; float:left;}
  .com_name{height:45px; width:350px; color:#9D9D9D; margin-left:25px; font-size:16px; padding:0px 10px; border:none; font-family:serif;
   border-bottom:2px solid #DFDFDF; margin-top:25px; float:left;}
  .customer{height:45px; width:350px; color:#9D9D9D; margin-left:25px; font-size:16px; padding:0px 10px; border:none; font-family:serif;
   border-bottom:2px solid #DFDFDF; margin-top:10px; float:left;} 
   .view_bill{height:50px; width:350px; margin-left:25px; border-radius:8px; color:#FFFFFF; background:#3FA7BA; border:none; cursor:pointer;
   font-size:18px; font-family:cursive; margin-top:25px; float:left;}
  </style>
 </head>
<body>
<?php
 $select_op=mysql_query("SELECT * FROM data_card_info WHERE name='$company_name'");
  $fetch_op=mysql_fetch_array($select_op);
  
  if(isset($_POST['browse']))
  {
     if(!empty($company_name))
	 {
    
		 $_SESSION['company_name']=$company_name;
	     print"<script>location='home.php?p=mb_plane&name=$company_name'</script>";
	 }
  
  }
?>
 <form name="form" enctype="multipart/form-data" method="post">
  <div class="wrapperr">
	  <select name="company_name" class="com_name">
	   <option>Operator Select</option>
	  <?php
	  $select=mysql_query("SELECT * FROM operator_info");
	  while($fetch=mysql_fetch_array($select))
	  {
	  ?>
	   <option><?php print $fetch['0'] ?></option>
	  <?php
	  }
	  ?> 
	  </select>
	   <input type="text" name="number" placeholder="Mobile Number" class="customer"/>
	   <input type="submit" name="browse" value="Browse Plan" class="view_bill"/>  
  </div>
  </form>
 </body>
</html>