<?php 
include("../database/connection.php");
session_start();
$email=$_SESSION['email'];

 $comment=$_POST['details'];
 
  $select_name=mysql_query("SELECT * FROM create_user WHERE email='$email'");
  $fetch_name=mysql_fetch_array($select_name);
 
if(isset($_POST['skip']))
{
    print"<script>location='user_home.php'</script>";
}

$confirm_ticket=mysql_query("SELECT * FROM bus_pay WHERE email='$email'");
  $fetch_confirm_ticket=mysql_fetch_array($confirm_ticket);
  
  $select_b=mysql_query("SELECT * FROM bus_seat WHERE email='$email'");



?>
<!DOCTYPE html>
<html>
 <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
 
 <link rel="icon" href="../../image/icon/2015-10-22_215711.png">
  <link type="text/css" href="../../css/sponserd_reg.css" rel="stylesheet">
  <link type="text/css" href="../../css/switchery.min.css" rel="stylesheet">
  <link type="text/css" href="../../css/thank_you.css" rel="stylesheet">

  <link rel="stylesheet" href="stylesheets/jquery.megamenu.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="stylesheets/example.css" type="text/css" media="screen" />
    
    
    <script src="javascripts/jquery.megamenu.js" type="text/javascript"></script>
    <script type="text/javascript">
      jQuery(function(){
        var SelfLocation = window.location.href.split('?');
        switch (SelfLocation[1]) {
          case "justify_right":
            jQuery(".megamenu").megamenu({ 'justify':'right' });
            break;
          case "justify_left":
          default:
            jQuery(".megamenu").megamenu();
        }
      });
    </script>
<style type="text/css">
body
{
	background:#ccc;
}
.logout
{
text-align:right;
float:right;
margin-right:2px;
text-decoration:none;
padding:2px 10px;
background:#FF3300;
color:#FFFFFF;
font-family:Arial, Helvetica, sans-serif;
font-weight:bold;
border-radius:2px;
transition:1s;
}
.logout:hover
{
background:#FF6600;
color:#666666;
transition:1s;

}
.mean_content
{
	height:487px;
}
.name_user
{
color:#333333;
line-height:35px;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
text-align:right;
width:85px;
}
.user_prof
{
float:right;
margin-right:10px;
width:141px;
height:50px;
font-style:italic;
}
.user_img
{
border-radius:100px;
margin-left:87px;
margin-top:-51px;
} 
.head_tfitle h2
{

text-align:center;
font-size:33px;
font-family:Arial, Helvetica, sans-serif;
color:#C0C0C0;
letter-spacing:1px;

} 
.thanks_add
{
float:left;
width:840px;
height:819px;
border: 1px solid #ccc;
background: #fff;
box-shadow:0px 0px 10px;
margin-left:245px;
margin-top:5px;
border-radius:5px;

} 
.head_title
{
float:right;
width:785px;
height:50px;
margin-left: 10px;
background:;
text-align:left;

}
.text_filed
{
	height:70px;
	width:500px;
	margin-top:-45px;
	float:left;
}
.head_title p
{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
font-weight:bold;

}
.img 
{
	height:173px;
	width:800px;
	float:left;
}
.send
{
	padding:11px 30px;
	background:#3FA7BA;
	border:none;
	border-radius:6px;
	color:#fff;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	margin-left:283px;
	cursor:pointer;
	float:left;
}
.send:hover
{
    background:#00CCCC;
}
.skip
{
	padding:11px 30px;
	background:#3FA7BA;
	border:none;
	border-radius:6px;
	color:#fff;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	margin-left:10px;
	cursor:pointer;
	float:left;
}
.skip:hover
{
    background:#00CCCC;
}
  </style>
 </head>
 
<body>
<?php
   if(isset($_POST['send']))
   {
        mysql_query("INSERT INTO comment_info(`session_id`,`email`,`name`,`comment`)VALUE('".session_id()."','$email','$fetch_name[0]','$comment')");
          if(mysql_affected_rows()>0)
          {
              print"<script>alert('Successfully Send Your Comments')</script>";
		          print"<script>location='user_home.php'</script>";
		  }
   }
?>

<form name="form" method="post" action="" enctype="multipart/form-data">
 
        <div class="mean_content">
		
 <div class="thanks_add">
 <div class="img">
		     <img src="../images/sSTCN8F.jpg" height="150px" width="150px" style="border-radius:100px; margin-left:20px; margin-top:10px; box-shadow:0px 0px 8px;">
		</div>
		  
 <div class="head_title">
 <h3 style="font-family:Arial, Helvetica, sans-serif;
font-weight:bold;
font-size:18px;
color:#c58181;
margin-left:135px;
line-height:15px;"> Thank you ! Successfull Receive Your Bus ticket Payment </h3>
  <p style="font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:20px; color:#666; letter-specing:1px;"> 
</p>
 
 
    <font style="font-size:15px; color:#A6A6A6; margin-left:1px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Bus Name: <?php print $fetch_confirm_ticket[0]; ?></font><br><br>
       <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">From: <?php print $fetch_confirm_ticket[7]; ?></font><br><br>
       <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">To: <?php print $fetch_confirm_ticket[8]; ?></font><br><br>
        <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Total Seat: <?php print $fetch_confirm_ticket[5]; ?></font><br><br>
		
	
  <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Total Taka: <?php print $fetch_confirm_ticket[6]; ?></font><br><br>
<font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Boarding point <?php print $fetch_confirm_ticket[8]; ; ?></font><br><br>
<font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Droping point <?php print $fetch_bus[7]; ?></font><br><br>
<font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Emergency Number:<?php print $fetch_confirm_ticket[2]; ?></font><br><br>
<font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Email: <?php print $fetch_confirm_ticket[1]; ?></font><br><br> 
  <h2 style="font-family:Arial, Helvetica, sans-serif;
font-weight:bold;
font-size:18px;
color:#3fa7ba;
margin-left:5px;
margin-top:50px;
"> Please Share Your Experienc!! </h2><br>
  <textarea name="details" class="text_filed" id="details" placeholder="Comments" value=""></textarea><br><br><br><br>
  <input type="submit" name="send" value="Send" class="send">
  <input type="submit" name="skip" value="No Thanks" class="skip">
    
  </div>

    
    
           </div>

        </div>
     </div>
   
  </form>


 </body>
</html>
