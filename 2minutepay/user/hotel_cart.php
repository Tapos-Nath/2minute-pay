<?php
  include("../database/connection.php");
  session_start();
  $email=$_SESSION['email'];
  $pdt_id=$_SESSION['pdt_id'];
  $select_data=mysql_query("SELECT * FROM hotel_info WHERE email='$email'");
  $fetch_data=mysql_fetch_array($select_data);
?>
<?php
 if(isset($_POST['logout']))
 {
    print"<script>location='user_login.php'</script>";
 }
 if(isset($_POST['log']))
  {
     print"<script>location='user_login.php'</script>";
  }
?>






<html>

<head>
<title>Shopping cart</title>
<link rel="icon" href="../../images/icon/images (2).png">
 <link rel="stylesheet" type="text/css" href="../css/shoping_cart.css">
 <style type="text/css">

.style1 {
	color: #666666;
	font-weight: bold;
}
.img_table
{
float:right;
background:url(../../images/picture/into.png);
width:25px;
height:25px;
border:none;
cursor:pointer;
}


 </style>
</head>
<body>
  <form name="form1" method="post" action="" enctype="multipart/form-data">

  
<div class="wraper">
  
  	<style type="text/css">
.wraper
{
float:left;
border:solid 1px #ccc;
}
.style1 {
  font-family: Georgia, "Times New Roman", Times, serif;
  color: #666666;
}
</style>
<?php
$select=mysql_query("SELECT * FROM shopping_card WHERE product_id='$pdt_id' AND session_id='".session_id()."'");
              $e=0;
               while($fetch_card_for_view=mysql_fetch_array($select))
               {
               $e=$e+1;
               }
               
 if(isset($_POST['del_table']))
 {
 mysql_query("DELETE FROM shopping_card WHERE session_id='".session_id()."'");
 if(mysql_affected_rows()>0)
 {
  print "<script>location='backpack.php'</script>";
 }
 }

 ?>
 
 
 
 <?php 
 if(isset($_POST['remove']))
    {
     $select=$_POST['select'];
     $total_select=count($select);

      if($total_select>0)
      {

            for($r=0; $r<$total_select;$r++)
            {

                  mysql_query("DELETE FROM shopping_card WHERE session_id='".session_id()."' AND product_id='$select[$r]'");
                    if(mysql_affected_rows()>0)
                    {
                          print"<script>alert('Successfully select product delete shopping_card!!')</script>";
                    }
            }
      }
    
    }
?>
 
 
<form name="table_del" method="post">
<h1 style="font-weight:bold; font-size:22px; color:#333333; font-family:Arial, Helvetica, sans-serif"># Your Hotel Booking Summary </h1>
<h3><span class="style3" style="font-weight:bold; font:Arial, Helvetica, sans-serif; letter-spacing:1px; color:#3E3E3E">item:(<?php print "$e"; ?>)</span><span style="color:#FF0000; margin-left:50px;"><?php print $message; ?></span></h3>
<div class="shopping_cart">

<input name="del_table" type="submit" class="img_table" value="">

</form>               
<form  name="form1" method="post" action="">
  <table width="1156" border="0" cellpadding="1" cellspacing="1" style="border:1px #000">
    <tr>
      <td width="150" height="67" align="center"><h5><span class="style1">NAME </span></h5></td>
      <td width="260" align="center"><h5 class="style1">EMAIL </h5></td>
      <td width="195" align="center"><h5 class="style1">ROOM</h5></td>
      <td width="193" align="center"><h5 class="style1">ADULTS</h5></td>
      <td width="190" align="center"><h5 class="style1">CHILDREN</h5></td>
      <td width="144" align="center">DAYS</td>
    </tr>
    <?php
	//$total_blance=$_POST['total'];
	//print "$total_blance";
              $update=0;
              $a=0; 
              $amount=0;
              $total=0;
               $select=mysql_query("SELECT * FROM hotel_info WHERE email='$email'");
              
               while($fetch_card=mysql_fetch_array($select))
               {
                 if(isset($_POST['update']))
                 {
                    $select_product=mysql_query("SELECT * FROM product_info WHERE product_id='$fetch_card[2]'");
                    $fetch_product=mysql_fetch_array($select_product);
                      if($_POST['update_quantity'][$update]<=$fetch_product[7])
                      {
                            if($_POST['update_quantity'][$update]!=$fetch_card[5])
                            {
                                mysql_query("UPDATE shopping_card SET product_quantity='".$_POST['update_quantity'][$update]."' WHERE session_id='".session_id()."' AND product_id='$fetch_card[2]'");
                                $fetch_card[5]=$_POST['update_quantity'][$update];

                            }
                            $update++;
                      }
                      else
                      {
                          print"<script>alert('Sorry this product Limited!!')</script>";
                      }
                 }
                 //$a=$a+1;
                 $total=$total+$fetch_card[5]*$fetch_card[4];
                 $total=$total+$amount;
                 $_SESSION['total']=$total;
              ?>
    <tr>
      <td height="72" align="center"><?php print $fetch_data[0]; ?></td>
      <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold; color:#999999; font-size:12px; word-spacing:5px;"><?php print $fetch_data[1]; ?></td>
      <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold; color:#999999; font-size:12px; word-spacing:5px;"><label>
        <input type="text" name="textfield" value="<?php print $fetch_data[4]; ?>" style="text-align:center; height:30px;">
      </label></td>
      <td align="center"><label>
        <input type="text" name="textfield2" value="<?php print $fetch_data[5]; ?>" style="text-align:center; height:30px;">
      </label></td>
      <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold; color:#999999; font-size:11px; word-spacing:5px;"><label>
        <input type="text" name="textfield3" value="<?php print $fetch_data[6]; ?>" style="text-align:center; height:30px;">
      </label></td>
      <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold; color:#909090"><label>
        <input type="text" name="textfield4" value="<?php print $fetch_data[8]; ?>" style="text-align:center; height:30px;">
      </label></td>
    </tr>
    
    <?php
  }
  ?>
    <tr>
      <td height="71" colspan="5" align="center"><input name="remove" type="submit" class="remo" value="Remove">
<label>
<input name="update" type="submit" class="remo1" id="update" value="Update Quantitiy">
</label></td>
      <td height="71" align="center" style="font-size:18px; font-weight:bold; color:#3C3C3C">Total : &nbsp;
      <input type="text" name="total" style="border:solid 1px #ccc; width:114px; height:40px; text-align:center; font-family:Arial, Helvetica, sans-serif; font-weight:bold;" value="6000" ></td>
      <td width="0" height="71" align="center"></td>
    </tr>
  </table>
</form>
</div>

<form name="proceed" method="post">
 <input type="submit" name="proceed_cheakout" value="Proceed To Cheakout" class="remo2">
 <?php
  if(isset($_POST['proceed_cheakout']))
  {
  $_SESSION['chose']=true;
  $_SESSION['total']=$total;
  print "<script>location='home.php?p=deli_ch'</script>";
  
  }
 ?>
</form>
</div>

</body>

</html>