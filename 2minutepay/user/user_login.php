<?php
   include("../database/connection.php");
   session_start();
   session_unset();
   $email=$_POST['email'];
   $password=$_POST['password'];

   
?>
<html>
<head>
 <title>User Login</title>
 <link rel="stylesheet" type="text/css" href="../css/user_login.css"/>
</head>
<body>
   <?php
        if(isset($_POST['login']))

    {
    	 if(!empty($email) && !empty($password))
    	 {

$select=mysql_query("SELECT * FROM create_user WHERE email='$email'");
	   $fetch=mysql_fetch_array($select);
	      if((strcasecmp($email,$fetch['1'])==0 || strcasecmp($password, $fetch['2'])==0))
				    {
					    $mess="Successfull";
						  $_SESSION['email_info']=true;
						  $_SESSION['email']=$email;
						  print"<script>location='user_home.php'</script>";
					  }
			
		     else
		        {
			         $message="Forget Password ?";
			      }
			}
			else
			{
				$message="Enter email or password";
			}
      
	  }
   ?>
 <div class="wrapper">
   <div class="banner">
      <div class="banner_left">
	   <img src="../images/ing-world-q12016.jpg" style="height:450px; width:420px; border-radius:6px 0px 0px 6px;">
	  </div>
	   <div class="banner_right">
	    <div class="left">
		</div>
		<form name="form1" enctype="multipart/form-data" method="post">
		  <div class="main_content">
		    <div class="main_content_top">
			 <font style="margin-top:28px; float:left; font-size:20px; font-family:arial; color:#505050; font-weight:600;">Login</font>
			</div>
			  <input type="email" name="email" class="user_email" placeholder="Enter your Email ID"/>
			  <input type="password" name="password" placeholder="Enter Password" class="user_password"/>
			   <div class="forgot">
			   <a class="forgot_password"><?php print $message; ?></a>
			   </div>
			   <input type="submit" name="login" value="Login & Continue" class="user_login"/>
			    <span style="height:30px; width:360px; margin-top:10px; float:left;">
				 <a href="create_walet.php" class="create_wallet">Create Account</a>
		        </span>
		  </div>
		</form>  
	   </div>
   </div>
  </div> 
 </body>
</html>