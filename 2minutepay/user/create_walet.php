<?php
   mysql_connect('localhost','root','');
   mysql_select_db('project');
   $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $pre_post=$_POST['pre'];
?>
<html>
<head>
 <title>User Login</title>
 <link rel="stylesheet" type="text/css" href="../css/create_walet.css"/>
</head>
<body>
  
  <?php
      if(isset($_POST['create_wallet']))
      {
      		mysql_query("INSERT INTO create_user(`name`,`email`,`password`,`phone`,`pre_post`)VALUE('$name','$email','$password','$phone','$pre_post')");
      			if(mysql_affected_rows()>0)
      			{
      				$img="../images/user_img/$email.jpg";
			 move_uploaded_file($_FILES['image']['tmp_name'],$img);
      				print"<script>location='user_home.php'</script>";
      			}
      			else
      			{
      				print"<script>alert('nooooooooooooooo')</script>";
      			}
      }
  ?>
      <script>
    function confirmpass()
    {
        x=document.form.password.value;
        y=document.form.confirm_pass.value;
          if(x.length>0 && y.length>0)
          {
              if(x!=y)
              {
                  document.getElementById('confirmmessage').style.color="RED";
                  document.getElementById('confirmmessage').innerHTML="Password not match..";
              }
              else
              {
                  document.getElementById('confirmmessage').style.color="GREEN";
                  document.getElementById('confirmmessage').innerHTML="Password match..";
              }
          }
          else
          {
              document.getElementById('confirmmessage').style.color="";
               document.getElementById('confirmmessage').innerHTML="";
          }
    }
 function passwordfn()
    {
        x=document.form.password.value;
          if(x.length>0 && x.length<5)
          {
              document.getElementById('passlen').style.color="RED";
              document.getElementById('passlen').innerHTML="Weak Password";
          }
          else if(x.length>=5 && x.length<8)
          {
              document.getElementById('passlen').style.color="ORENGE";
              document.getElementById('passlen').innerHTML="Medium Password";
          }
          else if(x.length>=8 && x.length<100)
          {
              document.getElementById('passlen').style.color="GREEN";
              document.getElementById('passlen').innerHTML="Strong password";
          }
          else
          {
              document.getElementById('passlen').style.color="";
              document.getElementById('passlen').innerHTML="";
          }
    }

  </script>

 <div class="wrapper">
   <div class="banner">
      <div class="banner_left">
	   <img src="../images/ing-world-q12016.jpg" style="height:550px; width:465px; border-radius:6px 0px 0px 6px;">
	  </div>
	   <div class="banner_right">
	    
		<form name="form" enctype="multipart/form-data" method="post">
		  <div class="main_content">
		    <div class="main_content_top">
			 <font style="margin-top:6px; float:left; font-size:20px; font-family:arial; color:#505050; font-weight:600;">CREATE ACCOUNT</font>
			</div>
			<input type="text" name="name" class="user_name" placeholder="Enter your Name"/>
			  <input type="email" name="email" class="user_email" placeholder="Enter your Email ID"/>
			  <input type="password" name="password" placeholder="Enter Password" class="user_password" onKeyUp="passwordfn()"/>
			  <span id="passlen" style="width:250px; height:auto; font-family:Arial, Helvetica, sans-serif; font-size:13px;"></span><br>
			  <input type="password" name="confirm_pass" placeholder="Confirm Password" class="user_password" onKeyUp="confirmpass()"/>
			   <span id="confirmmessage" style="width:250px; height:auto; font-family:Arial, Helvetica, sans-serif; font-size:13px;"></span>
			  <input type="phone" name="phone" placeholder="Enter Mobile Number" class="phone_num"/>
			   <span style="height:50px; width:110px; float:left;">
               <input type="radio" name="pre" value="prepaid" class="prepaid"/><font class="pre">Prepaid</font>
			   </span>
			    <span style="height:50px; width:240px; float:left;">
				<input type="radio" name="pre" value="postpaid" class="postpaid"/><font class="pre">Postpaid</font>
				</span>
				<span style="height:30px; width:240px; float:left;">
				 <input type="file" value="" class="image" name="image">
				</span>
				<input type="submit" name="create_wallet" value="Create Account" class="create_wallet"/>
				 <span style="height:30px; width:360px; margin-top:10px;  float:left;">
				  <span class="have_account" style="height:30px; width:270px;  float:left;">Already have a Accont?</span> 
				   <a href="user_login.php" class="login_now">Login Now</a>
				 </span>
		  </div>
		</form>  
	   </div>
   </div>
  </div> 
 </body>
</html>