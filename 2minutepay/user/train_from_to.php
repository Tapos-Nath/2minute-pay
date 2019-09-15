<?php
include("../database/pay_connection.php");
session_start();
$email=$_SESSION['email_info'];
if($_SESSION['email_info']==true)
{
?>
<html>
<head>
<title>form</title>
<style type="text/css">
body{background:#1C93AD;}
.division{height:50px;
        width:375px;
		margin-left:30px;
		border:none;
		border-bottom:2px solid #DFDFDF;
		color:#A6A6A6;
		font-size:17px;
		padding:0 10px;
		font-family:monospace;
		float:left;
		}
.from
{
		height: 700px;
		width: 400px;																																																																																																																																																																																																															
		float: left;
}
.pic
{
		height: 700px;
		width: 360px;
		float: left;
}
}
.option{height:50px;
        width:375px;
		margin-left:30px;
		border:none;
		border-bottom:2px solid #DFDFDF;
		color:#A6A6A6;
		font-size:17px;
		padding:0 10px;
		font-family:monospace;
		float:left;
		}		
.district{height:50px;
        width:375px;
		margin-left:30px;
		margin-top:10px;
		border:none;
		padding:0 10px;
		border-bottom:2px solid #DFDFDF;
		color:#A6A6A6;
		font-size:17px;
		font-family:monospace;
		float:left;
		}
.ac_nonac
{
	    height:50px;
        width:375px;
		margin-left:30px;
		margin-top:10px;
		border:none;
		padding:0 10px;
		border-bottom:2px solid #DFDFDF;
		color:#A6A6A6;
		font-size:17px;
		font-family:monospace;
		float:left;
}
 
.date{height:50px;
        width:352px;
		margin-left:30px;
		border:none;
		padding:0 10px;
		border-bottom:2px solid #DFDFDF;
		color:#A6A6A6;
		font-size:17px;
		font-family:monospace;
		float:left;
		}
.sele{height:50px;
        width:375px;
		margin-left:30px;
		margin-top:10px;
		border:none;
		padding:0 10px;
		border-bottom:2px solid #DFDFDF;
		color:#A6A6A6;
		font-size:17px;
		font-family:monospace;
		float:left;
		}		
.search_bus{height:50px;
            width:375px;
			margin-left:30px;
			margin-top:20px;
			border:none;
			cursor:pointer;
			color:#FFFFFF;
			background:#3FA7BA;
			font-size:20px;
			font-family:arial;
			border-radius:5px;
			transition:.5s;
			float:left;
			}
.search_bus:hover{background:#2C8292; transition:1s;}
									
</style>
</head>
<body>
<?php
$from=$_POST['from'];
$to=$_POST['to'];
$tclass=$_POST['tclass'];
$date=$_POST['date'];
if($_POST['sear_bus'])
{  
       if($from!==$to)
            {
              if(!empty($from) && !empty($to) && !empty($tclass) && !empty($date))
               {
                 $_SESSION['fromm']=$from;
	             $_SESSION['to']=$to;
				 $_SESSION['tclass']=$tclass;
	             $_SESSION['date']=$date;
                 print"<script>location='train_info.php'</script>";
	           }
	           else 
               {
                print "<script>alert('Please Fill Out This Page')</script>";
               } 
	 	  
            }
            else
            {
              print "<script>alert('Please chose Different city')</script>";
            }			 
}
?>
<form name="form1" enctype="multipart/form-data" method="post">

 <div class="main_wrapper" style="height:430px;">
 	<span style="color:red;">
   <div class="wrapper" style="height:410px; border-radius:6px; margin-left:280px; margin-top:10px; box-shadow:0px 0px 10px #000; width:760px; background:#FFFFFF; float:left;">
   	<div class="from">
    <span style="height:60px; width:340px; margin-left:30px; float:left;">
	  <span style="color:#878787; font-family:arial; font-size:19px; margin-top:20px; font-weight:600; float:left;">
	    Book Train Tickets
	  </span>
	</span>
	 <select class="division" name="from">
	  <option class="option">From</option>
	  <?php
	  $select_divi=mysql_query("SELECT * FROM city_info");
	   while($fetch_divi=mysql_fetch_array($select_divi))
	   {
	  ?>
	   <option><?php print $fetch_divi['0']; ?></option>
       <?php
	   }
	   ?>
	
	 </select>
	  
	 <select class="district" name="to">
	  <option>To</option>
	  <?php
	  $select_dis=mysql_query("SELECT * FROM city_info");
	   while($fetch_dis=mysql_fetch_array($select_dis))
	   { 
	   ?>
	   <option><?php print $fetch_dis['0'] ?></option>
       <?php
	   }
	   ?>
	  
	 </select> 
	 	 <select class="district" name="tclass">
		 <option>Select Class</option>
	  <?php
	  $select_class=mysql_query("SELECT * FROM train_class_select");
	   while($fetch_class=mysql_fetch_array($select_class))
	   { 
	   ?>
	   <option><?php print $fetch_class['0'] ?></option>
       <?php
	   }
	   ?>
	  
	 </select>  
	 </select>
	 <span style="height:20px; width:340px; margin-left:-90px; margin-top:10px; float:left;">
	  <font style="font-size:13px; color:#A6A6A6; font-family:cursive; font-weight:600;">Journey Date</font><br>
	 </span>
	 
	   <input type="date" name="date" class="date">

	   <input type="submit" name="sear_bus" value="Search  Train" class="search_bus"/>
	  </div>
	  <div class="pic">
         <img src="../image/high-speed-train-isolated-16322200.jpg" height="100px" width="200px;" style="margin-top:100px;">
	  </div>
   </div>
</div>
  </form>
 </body>
 <?php
 }
 else
 {
  print"<script>location='user_login.php'</script>";
 }
 ?> 
</html>