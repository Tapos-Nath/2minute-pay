<?php
 include("../database/connection.php");

?>
<html>
<head>
  <link type="text/css" href="../css/shop_now.css" rel="stylesheet">
</head>
<body>
       <div class="mid">
 <?php
 $selct_pdt=mysql_query("SELECT * FROM product_info ORDER BY RAND() LIMIT 16");
while($fetch_pdt=mysql_fetch_array($selct_pdt))
{
?>

<div id="shop_item" style="float:left;">
  <form name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="587" align="center" cellpadding="1" cellspacing="1" style="border:1px solid #E6E6E6">
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
  

  
    <a name="shoopee" href="add_cart.php?&item_name=<?php print base64_encode($fetch_pdt[0]); ?>&cat_name=<?php print base64_encode($fetch_pdt[1]);?>&pdt_id=<?php print base64_encode($fetch_pdt[4]);?>"class="shop_now">SHOP NOW</a>
	    <?php
	  if(isset($_POST['shoopee']))
	  {
	    $_SESSION['home_add']=true;
		print"<script>location='add_cart.php'</script>";
	  }
	?>
	</td>
    </tr>
  </table>
</form>

</div>
<?php
}
?>

<div class="sponserd_Show" style=" height: auto; width: 1200px; float: left;">
  <div class="sponse" style="height:40px; width:1175px; background:#ccc; text-align:center;">
 <a style="text-align:center; 
font:normal 20pt Arial;

 color:#FFFFFF;
text-shadow: 0 1px 0 #ccc, 
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 7px rgba(0,0,0,.25),
               0 7px 7px rgba(0,0,0,.2),
               0 10px 20px rgba(0,0,0,.15);">
 Sponserd Product
</a>
 
</div>
 
</div>
         </div>
</body>
</html>