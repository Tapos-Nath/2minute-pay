<?php
  include("../database/connection.php");
  	session_start();
    $email=$_SESSION['email'];
	$radio=$_POST['radio'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$room=$_POST['room'];
	$adults=$_POST['adults'];
	$children=$_POST['children'];
	$check_in=$_POST['check_in'];
	$check_out=$_POST['check_out'];
	
	   
	
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<?php

	if(isset($_POST['add']))
	{
		
			mysql_query("INSERT INTO hotel_info(`name`,`email`,`phone`,`radio`,`room`,`adults`,`children`,`check_in`,`check_out`)VALUE('$name','$email','$phone','$radio','$room','$adults','$children','$check_in','$check_out')");
			if(mysql_affected_rows()>0)
			
			{
				
				
				print"<script>location='hotel_cart.php'</script>";
				}
			
			
			else
			{
				print"<script>alert('No data add')</script>";
				
				
				}
			
		
		
		
		}






if(isset($_POST['delete']))
{
	if(empty($email))
	
	
	{
		mysql_query("DELETE FROM cetagory_id WHERE cetagory_id='$cat_id'");
		if(mysql_affected_rows()>0)
		
		{
			print"<script>alert('data delete')</script>";
			
			}
			
			else 
			{
				print"<script>alert('No data delete')</script>";
				
				}
		
		}
	
	else 
	{
		print"<script>alert('Insert your data')</script>";
		
		}
	
	}


if(isset($_POST['edit']))


{
	
if(!empty($item_name) && !empty($cat_name) && !empty($cat_id))


{
	mysql_query("UPDATE cetagory_id SET item_name='$item_name', cetagory_name='$cat_name' WHERE cetagory_id='$cat_id'");
	
	if(mysql_affected_rows()>0)
	
	{
		print"<script>alert('data edit')</script>";
		
		
		}
	
	else
	
	{
		print"<script>alert('No data edit')</script>";
		
		}
	
	
	}	
	
	
	else
	{
		print"<script>alert('Insert your data edit')</script>";
		
		}
	
	}



if(isset($_POST['view']))
{
	$select=mysql_query("SELECT * FROM cetagory_id");
	$select_num=mysql_num_fields($select);
	
	 $table.="<table width='500px' height='auto' border='1px'>";
      $table.="<tr>";
      $table.="<td>";
      $table.="ITEM_NAME";
      $table.="</td>";
      $table.="<td>";
      $table.="CAT_ID";
      $table.="</td>";
      $table.="<td>";
      $table.="CAT_NAME";
      $table.="</td>";
      $table.="</tr>";
	  
	  
	
	
	
	while($fetch_value=mysql_fetch_array($select))
	
	{
		$table.="<tr>";
		 for($i=0; $i<$select_num; $i++)
		 
		 {
			 $table.="<td>";
			 $table.=$fetch_value[$i];
			 $table.="<td>";
			 
			 
			 }
			 
			 
			 $table.="<tr>";
		
		
		}
	  
	$table.="</table>";
	
	
	}




	




?>




 


  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->

      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      	  
          	<!-- BASIC FORM ELELEMNTS -->
          
          	<div class="row mt">
          		<div class="col-lg-8">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Details</h4>
                      <form class="form-horizontal style-form" method="post" action="">

                          
                           <div class="form-group">
                           
                              <div class="col-sm-2" style="margin-left:30px;">
                                  <input type="radio" value="work" name="radio"> Work</input>
								 
                                  
                              </div>
                       
						
                              <div class="col-sm-2">
                                  <input type="radio" value="leisure" name="radio"> Leisure</input>
								  
                                  
                              </div>
                          </div>
                          
                          
                           <div class="form-group">
                              <label class="col-sm-1 col-sm-1 control-label">NAME:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="name" value="" class="form-control" placeholder="name">
                                  
                              </div>
                          </div>
                          
                          
                           <div class="form-group">
                              <label class="col-sm-1 col-sm-1 control-label">EMAIL:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="email" value="<?php print $email; ?>" class="form-control" placeholder="email">
                                  
                              </div>
                          </div>
                          
						  <div class="form-group">
                              <label class="col-sm-1 col-sm-1 control-label">Phone:</label>
                              <div class="col-sm-10">
                                  <input type="text" name="phone" value="" class="form-control" placeholder="phone">
                                  
                              </div>
                          </div>
                          
                           <div class="form-group">
                             
                            <label class="col-sm-1 col-sm-1 control-label">Room:</label>
                              <div class="col-sm-2">
                                  <input type="text" name="room" value="" class="form-control" placeholder="room">
                                  
                              </div>
							  <label class="col-sm-1 col-sm-1 control-label">Adults:</label>
                              <div class="col-sm-2">
                                  <input type="text" name="adults" value="" class="form-control" placeholder="adults">
                                  
                              </div>
							  <label class="col-sm-1 col-sm-1 control-label">Children:</label>
                              <div class="col-sm-2">
                                  <input type="text" name="children" value="0" class="form-control" placeholder="children">
                                  
                              </div>
                         
                          </div>
                          
                          
                          
                           <div class="form-group">
                              
                              <div class="col-sm-4">
							     <p>Check-in</p>
                                  <input type="date" name="check_in" value="" class="form-control">
                              </div>
							  <div class="col-sm-4">
							     <p>Total day</p>
                                  <input type="text" name="check_out" value="" class="form-control">
                              </div>
                          </div>
                          
                           
                          
                            <input name="add" type="submit" value="Continue" class="button1" style="color:#fff; padding:7px 27px; background:#003399; border:none; border-radius:4px; margin-left:10px; font-weight:bold;">
              
                         
                         
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	

     
          	
<?php print $table; ?>    
          	
      </form>
		

    
 
  </body>
</html>
