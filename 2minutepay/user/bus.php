<?php
  include("../database/connection.php");
  session_start();

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
     $ceta=$_POST['ceta'];
     $date=$_POST['date'];
       if(isset($_POST['sear_bus']))
       {
	   if($from!==$to)
	   {
       	 if(!empty($from) && !empty($to) && !empty($ceta) && !empty($date))
       	 {
       		$_SESSION['from']=$from;
       		$_SESSION['to']=$to;
       		$_SESSION['ceta']=$ceta;
       		$_SESSION['date']=$date;
       		print"<script>location='home.php?p=bus_info'</script>";
         }
         else
         {
            print"<script>alert('Please fill out the page')</script>";
         }
	}
	
	else
	{
	  $message="Please choose a different city";
	}	 
       }
	?>
<form name="form" enctype="multipart/form-data" method="post">

 <div class="main_wrapper" style="height:430px;">
 	<span style="color:red;">
   <div class="wrapper" style="height:410px; border-radius:6px; margin-left:280px; margin-top:10px; box-shadow:0px 0px 10px #000; width:760px; background:#FFFFFF; float:left;">
   	<div class="from">
    <span style="height:60px; width:340px; margin-left:30px; float:left;">
	  <span style="color:#878787; font-family:arial; font-size:19px; margin-top:20px; font-weight:600; float:left;">
	    Book Bus Tickets
	  </span>
	</span>
	 <select class="division" name="from">
	  <option class="option">From</option>
	  <?php
        $division=mysql_query("SELECT * FROM city_info");
        while($fetch_div=mysql_fetch_array($division))
        {
	  ?>
	   <option><?php print $fetch_div['0']; ?></option>
	   <?php
         }
        
	   ?>
	
	 </select>
	  
	 <select class="district" name="to">
	  <option>To</option>
	   <?php
        $division=mysql_query("SELECT * FROM city_info");
        while($fetch_div=mysql_fetch_array($division))
        {
	  ?>
	   <option><?php print $fetch_div['0']; ?></option>
	   <?php
         }
        
	   ?>
	  
	 </select>
	 <?php print $message; ?>
	 <select class="ac_nonac" name="ceta">
	  <option>AC/NON AC</option>
	  <option>AC</option>
	  <option>NON AC</option>
	   
	  
	 </select>
	 <span style="height:20px; width:340px; margin-left:-90px; margin-top:10px; float:left;">
	  <font style="font-size:13px; color:#A6A6A6; font-family:cursive; font-weight:600;">Journey Date</font><br>
	 </span>
	   <input type="date" name="date" class="date">
	   <input type="submit" name="sear_bus" value="Search Buses" class="search_bus"/>
	  </div>
	  <div class="pic">
         <img src="../images/bus_PNG8615.png" height="100px" width="200px;" style="margin-top:100px;">
	  </div>
   </div>
</div>
  </form>
 </body>
</html>