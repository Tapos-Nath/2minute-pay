<?php
include("../database/connection.php");
  session_start();
  $code=$_SESSION['seat_se'];
  $email=$_SESSION['email'];
  $name=$_POST['name'];
  $number=$_POST['number'];
  $date=$_SESSION['date'];
  $fetch_bu=mysql_query("SELECT * FROM bus_seat WHERE email='$email'");
  $fetch_bus=mysql_fetch_array($fetch_bu);
  $fetch_seat=mysql_query("SELECT * FROM seat_info WHERE session_id='".session_id()."' AND email='$email' AND code='$code'");
  $fetch_seat_info=mysql_fetch_array($fetch_seat);
  $select_user=mysql_query("SELECT * FROM create_user WHERE email='$email'");
  $fetch_user=mysql_fetch_array($select_user);
  $select_wallet=mysql_query("SELECT * FROM wallet WHERE email='$email'");
  $fetch_wallet=mysql_fetch_array($select_wallet);

?>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="../css/passen_dt.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 <body>

  <?php
  $total_tx=$fetch_wallet['2']-$fetch_bus[10]; 
     if(isset($_POST['pay_money']))

     {
        if(!empty($name) && !empty($number))
        {
		
		if($fetch_wallet['2']>$fetch_bus[10])
		{
	mysql_query("UPDATE wallet SET amount='$total_tx' WHERE email='$email'");	    
            mysql_query("INSERT INTO bus_pay(`name`,`email`,`num`,`bus_name`,`code`,`total_seat`,`total_tk`,`fr`,`too`)VALUE('$name', '$email','$number','$fetch_bus[2]','$code','$fetch_seat_info[3]','$fetch_bus[10]','$fetch_bus[4]','$fetch_bus[5]')");
              if(mysql_affected_rows()>0)
              {

                $_SESSION['code']=$code;
                $_SESSION['number']=$number; 
                  print"<script>location='home.php?p=success'</script>";
              }
              else
              {
                   
              }
			  
	}
	
	else
	{
	 print"<script>alert(' Sorry Your Wallet money less ! Please Added your wallet money')</script>";
	
	}		  
        }
        else
        {
            print"<script>alert('Please fill name or phone number!!')</script>";
        }
        $select_s=mysql_query("SELECT * FROM seat_no WHERE session_id='".session_id()."' AND email='$email' AND code='$code'");
     while($fetch_s=mysql_fetch_array($select_s))
     {
      mysql_query("INSERT INTO confirm_seat(`code`,`seat_no`,`date_info`)VALUE('$code','$fetch_s[2]','$date')");
    }
       
     }

     if(isset($_POST['Cancle']))
     {
         print"<script>location='user_home.php'</script>";
     }
  ?>

  <?php

  ?>
    <div class="wrapper">
         
             <div class="main_con">
                <form name="form" enctype="multipart/form-data" method="post">

 <div class="main_wrapper" style="height:560px;">
 	<span style="color:red;">
   <div class="wrapper" style="height:545px; border-radius:6px; margin-left:370px; margin-top:10px; box-shadow:0px 0px 10px #000; width:525px; background:#FFFFFF; float:left;">
   	<div class="from">
    <span style="height:60px; width:495px; margin-left:30px; float:left;">
	  <span style="color:#878787; font-family:arial; font-size:24px; margin-top:20px; font-weight:600; float:left;">
	    Passenger Details
	  </span>
	</span>
       <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Bus Name: <?php print $fetch_bus[2]; ?></font><br><br><br><br><br>
       <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">From: <?php print $fetch_bus[4]; ?></font><br><br>
       <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">To: <?php print $fetch_bus[5]; ?></font><br><br>
       <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Time: <?php print $fetch_bus[9]; ?></font><br><br>
        <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Total Seat: <?php print $fetch_seat_info[3]; ?></font><br><br>
       <font style="font-size:15px; color:#A6A6A6; margin-left:30px; font-family:arial; font-weight:500; margin-top:10px; float:left;">Total Taka: <?php print $fetch_bus[10]; ?></font><br><br>
	 

	  

	   

	 <span style="height:20px; width:340px; margin-left:-77px; margin-top:10px; float:left;">
	  <font style="font-size:15px; color:#A6A6A6; font-family:arial; font-weight:600;">Passenger Name</font><br>
	 </span>
	   <input type="text" name="name" class="division" value="<?php print $fetch_user['0']?>" placeholder="Name" >
	   <span style="height:20px; width:340px; margin-left:-85px; margin-top:10px; float:left;">
	  <font style="font-size:15px; color:#A6A6A6; font-family:arial; font-weight:600; margin-left:25px;">emergency Number</font><br>
	 </span>
	   <input type="text" name="number" class="district" value="" placeholder="Number" >
	   <button type="button" class="search_bus" data-toggle="modal" data-target="#myModal">Pay Now</button>
	   
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
         <input type="submit" class="btn btn-primary" name="pay_money" value="Confirm" style="margin-left:118px; float:left;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
	   
     <input type="submit" name="Cancle" value="Cancle" class="search_bus"/>
	   


	  </div>

   </div>
</div>
  </form>
             </div>
         
    </div>
</body>
</html>