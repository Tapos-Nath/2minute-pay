<?php 
include("../database/connection.php");
session_start();
$email=$_SESSION['email'];
$select=mysql_query("SELECT * FROM create_user WHERE email='$email'");
$fetch_data=mysql_fetch_array($select);
?>
<?php
 $quantity=$_POST['quantity'];
 $item_name=$_GET['item_name'];
 $cat_name=base64_decode($_GET['cat_name']);
 $product_id=base64_decode($_GET['pdt_id']);
 $select_pr=mysql_query("SELECT * FROM product_info WHERE product_id='$product_id'");
 $fetch_pr=mysql_fetch_array($select_pr);
  $decode_data=base64_decode('PLsv4iUgyA4iqeO91sXK7tYFVWrXaC22Fa');
 
?>

<?php
 if(isset($_POST['add_cart']))
 {
    if($_SESSION['email_info']==true)
    {
      if(!empty($quantity) && $quantity>0)
      {
        if($quantity<=$fetch_pr[7])
        {
            $select_sho=mysql_query("SELECT * FROM shopping_card WHERE session_id='".session_id()."' AND product_id='$product_id'");
            $fetch_sho=mysql_fetch_array($select_sho);
            if($product_id!==$fetch_sho[2])
            {
                   mysql_query("INSERT INTO shopping_card(`session_id`,`email`,`product_id`,`product_name`,`product_price`,`product_quantity`,`details`)VALUE('".session_id()."','$email','$product_id','$fetch_pr[5]','$fetch_pr[6]','$quantity','$fetch_pr[8]')");
                     if(mysql_affected_rows()>0)
                     {
                        $message="Product add to shopping_card!!";
                     }
                     else
                     {
                        $message="Something Rong Please try agein";
                     }
            }
            else
            {
                $message="Sorry !! this product already add to shopping_card!!";
            }
        }
        else
        {
            $message="Sorry !! this product stoke is limited!!";
        }
      }
      else
      {
          $message="OOPS !! Please enter correct input than try agein !!";
      }
    }
    else
    {
        $message="OOPS !! Please login first!!";
    }
 }
?>



<!DOCTYPE html>
<html>

 <head>
 <title>Add cart</title>

 
 <link type="text/css" href="../css/add_cart.css" rel="stylesheet">
 
<link rel="icon" href="../../images/icon/images (2).png">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/JavaScript">

//----------------------------------image_zoom----------------------------//
 
 $(document).ready(function(){
   $("#gallery img").hover(function(){
    $("#main").attr('src',$(this).attr('src').replace('thumb/',''));
   });
   var imgSwap=[];
    $("#gallery img").each(function(){
      imgUrl=this.src.replace('thumb/','');
      imgSwap.push(imgUrl);
    });
    $(imgUrl).preload();
 });
 $.fn.preload=(function(){
  this.each(function(){
    $("<img/>")[0].src=this;
  });
 });
 //---------------------------------scroll_top-------------------------------//

$(document).ready(function(){
    // fade in and fade out
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 10) {
                $('#uparrow').fadeIn();
            } else {
                $('#uparrow').fadeOut();
            }
        });
 
        // scroll body to 0px on click
        $('#uparrow').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
 
});

</script>


 <style type="text/css">
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
height:80px;
font-style:italic;
}
.user_img
{
border-radius:100px;
margin-left:87px;
margin-top:-51px;
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
.uparrow {
    background:url(../../image/icon/2016-03-16_122748.png);
    cursor: pointer;
    width: 66px;
    height: 67px;
    position: fixed;
    bottom: 30px;
    right:30px;
    display:none;
}


 </style>
  <title>Backpack</title>
 

  
  
  
 </head>
 
<body>

<div class="wrapper">

 <?php
   if(isset($_POST['log']))
   {
      print"<script>location='user_login.php'</script>";
   }
 ?>










 <div class="mean_content">
 <span style="background:#FF0000; color:#FFFFFF; font-family:Arial, Helvetica, sans-serif;  font-weight:bold"><?php print $message; ?></span>
   <?php 
     $select_pro=mysql_query("SELECT * FROM product_info WHERE product_id='$product_id'");
     while($fetch_producet=mysql_fetch_array($select_pro))
     {
      mysql_query("UPDATE product_info SET value=value+1 WHERE product_id='$product_id'");
      $select_prod=mysql_query("SELECT * FROM product_info WHERE product_id='$product_id'");
      while($fetch_prod=mysql_fetch_array($select_prod))
      {
          $inc_value=$fetch_prod['value'];
      }
   ?>
 <div class="left_table">
  
 
    <tr>
      <td width="1137" height="416"><table width="629" border="0" cellpadding="1" cellspacing="1">
        <tr>
          <td width="619" height="417">
		  <div  id="gallery">
		
		  <?php
            for($a=0; $a<=3; $a++)
            {
            	if($a==0)
            	{
		  ?>
		  <img src="../images/product_image/<?php print $fetch_producet['4']."($a)"; ?>.jpg" width="449px" height="450px" align="right" id="main"\>
		  <?php
            }
            else
            {
		  ?>
		  <img src="../images/product_image/<?php print $fetch_producet['4']."($a)"; ?>.jpg" width="170px" height="150px" align="left"\>
		  <?php
		   }
		}
		   ?>
		  </td>
        </tr>
		
      </table>
	 </td>
    </tr>
 
 </div>
    <div class="right_div">
	   <div class="details_name">
	    <b style="color:#333333; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
      <?php print $inc_value; ?> views
      </div>
		  <div class="details_text">
		   <b style="color:#666666; font-size:12px"><?php print $fetch_producet[8]; ?></b>
		  <br><br>
		 <b style="color:#333333; font-size:15px"> BD :</b><b style="color:#666666; font-size:15px">£<?php print $fetch_producet[6]; ?></b>
		  <div class="view_cart">
		  <form method="post">
		  <?php
		  $show_view_cart=mysql_query("SELECT * FROM shopping_card WHERE session_id='".session_id()."' AND product_id='$product_id'");
		  if(mysql_affected_rows()>0)
		  {		  
		  ?>
		  <input type="submit" name="view_cart" class="view" value="View Your Shopping Cart">
		   <input name="proceed_cart" type="submit" class="checkout" id="proceed_cart" value="Proceed to checkout">
		  <?php
		  }
		  ?>
		  <?php
		  if(isset($_POST['proceed_cart']))
		  {
		  
		   print "<script>location=('delivery_option.php')</script>";
		  } 
		 if(isset($_POST['view_cart']))
		 {
		  $_SESSION['pdt_id']=$product_id;
          $_SESSION['shop_se']=true;
		  print "<script>location='home.php?p=shoping'</script>";
		 
		 }
		  
		  ?>
		  
		  </div>
	        </div>
			
		<div class="add_quantity">
		
		<input type="text" placeholder="add quantitiy" class="text_quantity" name="quantity" >
		<input type="submit" value="Add To Cart" class="add" name="add_cart">

   </div>

</form>
</div>
<?php
 }
?>







<div class="head_name"><div class="nn">Related Product</div></div>

<div class="midd">
  <?php
    $select_rel=mysql_query("SELECT * FROM product_info WHERE cat_name='$cat_name'");
    while($fetch_pdt=mysql_fetch_array($select_rel))
    {
      if($fetch_pdt['4']!==$product_id)
      {
  ?>
 <div id="shop_item">
  <form name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="587" align="left" cellpadding="1" cellspacing="1" style="border:1px solid #E6E6E6">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFFFFF">
    <?php 
      for($a=0; $a<=3; $a++)
      {
         if($a==0)
         {
      ?>
        <img src="../images/product_image/<?php print $fetch_pdt['4']."($a)";?>.jpg" width="385px" height="450px" align="left" id="main"/>
      <?php
       }
       else
       {
      ?>
        <img src="../images/product_image/<?php print $fetch_pdt['4']."($a)";?>.jpg" width="175px" height="150px" align="right"/>
      <?php
        }
      }
      ?>

    </tr>
    
    <tr>
      <td width="355" rowspan="3" align="center" bgcolor="#FFFFFF" style="color:#666666; border:1px solid #E6E6E6; font-family:Arial, Helvetica, sans-serif; font-size:15px;"><h5>Details:</h5><?php print $fetch_pdt['8']; ?></td>
      <td width="199" height="60" align="center" bgcolor="#FFFFFF" style="color:#666666; border:1px solid #E6E6E6; font-family:Arial, Helvetica, sans-serif; font-size:17px;">Name :<?php print $fetch_pdt['5'];  ?> </td>
    </tr>
    <tr>
      <td height="64" align="center" bgcolor="#FFFFFF" style="color:#666666; border:1px solid #E6E6E6; font-family:Arial, Helvetica, sans-serif; font-size:17px;">Price :<?php print $fetch_pdt['6']; ?></td>
    </tr>
    <tr>
      <td height="53" align="center" bgcolor="#FFFFFF" style="border:1px solid #E6E6E6;">
    <a href="home.php?p=add_cart&item_name=<?php print base64_encode($fetch_pdt[0]); ?>&cat_name=<?php print base64_encode($fetch_pdt[1]);?>&pdt_id=<?php print base64_encode($fetch_pdt[4]);  ?>"class="shop_now">SHOP NOW</a></td>
    </tr>
  </table>
</form>
</div>
   <?php
  }
}
  ?>
</div>
</div>
<div class="uparrow" id="uparrow"></div>
</div>

</body>
</html>
