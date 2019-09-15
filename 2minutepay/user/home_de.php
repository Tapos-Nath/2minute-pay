<?php
  include("../database/connection.php");
  session_start();
  $email=$_SESSION['email'];
  $pdt_id=$_SESSION['pdt_id'];
  $select_data=mysql_query("SELECT * FROM create_user WHERE email='$email'");
  $fetch_data=mysql_fetch_array($select_data);
  $select_pro=mysql_query("SELECT * FROM product_info WHERE product_id='$pdt_id'");
     $fetch_producet=mysql_fetch_array($select_pro)
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
<title>home delivary</title>
<link rel="icon" href="../images/icon/images (2).png">
<link type="text/css" rel="stylesheet" href="../css/home_de.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php 
$total_pricessss=$_POST['total'];
print "$total_pricessss";
?>
  <form name="form1" method="post" action="" enctype="multipart/form-data">


<div class="wraper">
  


 <div class="mean_content">

 
      <div class="ful_table">
     
 
	 <span  style="float:left"><img src="../images/icon/k8872099.jpg"width="120px" height="120px"></span>
	 <h3 style="color:#666666; font-size:14px;word-spacing:5px; font-family:Geneva, Arial, Helvetica, sans-serif">Home Delivery</h3>
<b style="color:#999999; font-size:14px;word-spacing:5px; font-family:Geneva, Arial, Helvetica, sans-serif; font-weight:normal">Charge: £200</b>
<br>

<div class="register_table">
 <form name="" method="post" action="" style="width:500px;">
 
 
  <?php
 $first_name=$_POST['first_name'];
 $last_name=$_POST['last_name'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $post_code=$_POST['post_code'];
 $phone=$_POST['phone'];
 if(isset($_POST['done_fayment']))
{

        if(!empty($first_name))
        {
           $mess="";
        }
        else
        {
           $pr="*";
        }
        if(!empty($last_name))
        {
           $mess="";
        }
        else
        {
           $pro="*";
        }
        if(!empty($address))
        {
           $mess="";
        }
        else
        {
           $prob="*";
        }
        if(!empty($city))
        {
           $mess="";
        }
        else
        {
           $probl="*";
        }
        if(!empty($post_code))
        {
           $mess="";
        }
        else
        {
           $proble="*";
        }
        if(!empty($phone))
        {
           $mess="";
        }
        else
        {
           $problem="*";
        }

    $select_wallet=mysql_query("SELECT * FROM wallet WHERE email='$email'");
                      $fetch_wallet=mysql_fetch_array($select_wallet);

            if(!empty($first_name) && !empty($last_name) && !empty($address) && !empty($city) && !empty($post_code) && !empty($phone))
            {
              if($fetch_wallet['2']>$fetch_producet['6'])
                      {

              mysql_query("INSERT INTO home_delivary(`id`,`email`,`first_name`,`last_name`,`address`,`city`,`post_code`,`phone`,code)VALUE('".session_id()."','$email','$first_name','$last_name','$address','$city','$post_code','$phone','$fetch_producet[4]')");	
                 if(mysql_affected_rows()>0)
                 {
                     $_SESSION['home_del']=true;
                     
					           
                      
                      $total_tx=$fetch_wallet['2']-$fetch_producet['6'];;
                      mysql_query("UPDATE wallet SET amount='$total_tx' WHERE email='$email'");  
                       print"<script>location='home.php?p=shoping_thanks&code=$fetch_producet[4]'</script>";
                     
                 }
                 else
                 {
                      $message="Data add unsuccessfull";
                 }
                  }
                      else
                      {
                         print"<script>alert('Low balance !! Please add money your account')</script>";
                      }
            }
            else
            {
                $message="Please fill the field!!";
            }

} 


 
 ?>
  <div class="text">
       <?php print $message; ?>  
  </div>  
  <div class="tex">
    <?php print $mess; ?> 
  </div><br>

      <b style="font-weight:bold;font-size:13px; float:left; margin-top:3px;">&nbsp; &nbsp;Fist name:<span style="color:RED;"><?php print $pr; ?></span></b>
	  	  <br>
	   <input  type="text" class="delivery_input" name="first_name" placeholder="First name">
	  <br>
	  <br>
	  <b style="font-weight:bold;font-size:13px; float:left; margin-top:3px;">&nbsp; &nbsp;Last name:<span style="color:RED;"><?php print $pro; ?></span></b>

	  <br>
	  <input  type="text" class="delivery_input" name="last_name" placeholder="Last name">
	   <br>
	   <br>
      <b style="font-weight:bold;font-size:13px; float:left; margin-top:3px;">&nbsp; &nbsp;Address:<span style="color:RED;"><?php print $prob; ?></b></span>
      <textarea class="delivery_address" name="address" placeholder="House Name,House number, street number,district"></textarea>
  <b style="font-weight:bold;font-size:13px; float:left; margin-top:3px;">&nbsp; &nbsp;City:<span style="color:RED;"><?php print $probl; ?></span></b>
	  <br>
	  <input type="text" name="city" class="delivery_input" placeholder="city">
	   <br>
	   <br>
	 <b style="font-weight:bold;font-size:13px; float:left; margin-top:3px;">&nbsp; &nbsp;Post Code:<span style="color:RED;"><?php print $proble; ?></span></b>
	  <br>
	  <input type="text" name="post_code" class="delivery_input" placeholder="post code" maxlength="5">
	   <br>
	   <br> 
	   <b style="font-weight:bold;font-size:13px; float:left; margin-top:3px;">&nbsp; &nbsp;Phone number:<span style="color:RED;"><?php print $problem; ?></span></b>
	   <br>
	  <input type="text" name="phone" class="delivery_input1" placeholder="Phone number">
	  <input type="submit"  value="Verify" class="verify">
	   <br>
	   <br>
	
	 <button type="button" class="payment" data-toggle="modal" data-target="#myModal">Continue To Payment</button>
	   
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
         <input type="submit" class="btn btn-primary" name="done_fayment" value="Confirm" style="margin-left:118px; float:left;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
      </div>
    </div>
  </div>
	 <input type="submit" value="Back" class="back_button">
</form>   
  </div> 			            
	</div>
   </div>
	  	    
  <div class="prod">
      <div class="prod">
    <div class="mean_content1">
 

 <div class="left_table">
 <b style="margin-left:180px; font-size:20px; color:#999;">Name: <?php print $fetch_producet['5'];  ?></b>
       <tr>
      <td width="1137" height="416">
    <table width="595" cellpadding="1" cellspacing="1" style="border-bottom:1px solid #ccc;">
        <tr>
          <td width="619" height="417">
      <div  id="gallery">
    
      <?php
            for($a=0; $a<=3; $a++)
            {
              if($a==0)
              {
      ?>
      <img src="../images/product_image/<?php print $fetch_producet['4']."($a)"; ?>.jpg" width="400px" height="420px" align="right" id="main" style="margin-right:30px;"\>
      <?php
            }
            else
            {
      ?>
      <img src="../images/product_image/<?php print $fetch_producet['4']."($a)"; ?>.jpg" width="150px" height="140px" align="left"\>
      <?php
       }
    }
       ?>
      </td>
        </tr>
    
      </table>
   </td>
    </tr><br>
  <b style="margin-left:10px; float:left;"><?php print $fetch_producet['0'];?></b>
  <b style="margin-left:150px;">Price :<?php print $fetch_producet['6'];?></b>
  <b style="margin-left:150px; float:left;">Region:<?php print $fetch_producet['3']; ?></b>
  <br>
    <br>
    <br>
 <b style="margin-left:10px; float:left;">Details:</b>
 <br>
     <p style="word-spacing:2px; letter-spacing:1px; height:auto; width:auto; margin-left:10px;"><?php print $fetch_producet[8]; ?></p>

  
 </div>
 </div>
 <?php 

?>
 
 </div>
  </div>
    
      </div> 
 
</div>

</body>

</html>