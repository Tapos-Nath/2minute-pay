<?php
  include("../database/connection.php");
  session_start();
  $email=$_SESSION['email'];
  $code=$_GET['seat'];
  $bord=$_POST['bord'];
  $drop=$_POST['drop'];
    $sea=$_POST['sea'];
    $date=$_SESSION['date'];

  $session=session_id();
  $user_in=mysql_query("SELECT * FROM create_user WHERE email='$email'");
  $fetch_user=mysql_fetch_array($user_in);
  $bus_in=mysql_query("SELECT * FROM bus_info WHERE code='$code'");
  $fetch_bus=mysql_fetch_array($bus_in);
  $seat_fetch_info=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $seat_fetch=mysql_fetch_array($seat_fetch_info);
     







$bu_in=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
$fetch_bu=mysql_fetch_array($bu_in);

?>

<html>
<?php
  if($_SESSION['email_info']==true)
  {
?>
<?php
   $e=$fetch_bu[3];
   if(isset($_POST['sea']))
   { 
 
     
      
      $e=$e+1;



      mysql_query("INSERT INTO seat_no(`session_id`,`email`,`seat_no`,`code`)VALUE('$session','$email','$sea','$code')");
   
      
      
            
     if($fetch_bu['1']!==$email && $fetch_bu['0']!==$session && $fetch_bu['2']!==$code)
     {

        mysql_query("INSERT INTO seat_info(`session_id`,`email`,`code`,`seat`,`seat_rate`,`total_taka`)VALUE('$session','$email','$code','$e','$fetch_bus[5]','$fetch_bus[5]')");
          if(mysql_affected_rows()>0)
          {
              
          }
          else
          {
             
          }
     }
     else
     {
              mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
     }
     $seat_info_in=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in=mysql_fetch_array($seat_info_in);
      $price=$fetch_seat_in[3]*$fetch_seat_in[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");

   }

    
  
  


    if(isset($_POST['add']))
  {
   
        mysql_query("INSERT INTO bus_seat(`email`,`number`,`bus_name`,`code`,`fr`,`tooo`,`bordering`,`droping`,`tk`,`time`,`total_tk`,`total_seat`)VALUE('$fetch_user[1]','$fetch_user[3]','$fetch_bus[0]','$code','$fetch_bus[2]','$fetch_bus[3]','$bord','$drop','$fetch_bus[5]','$fetch_bus[7]','$seat_fetch[5]','$e')");
          if(mysql_affected_rows()>0)
          {
              $_SESSION['seat_se']=$code;
              print"<script>location='home.php?p=pass_dt'</script>";
          }
          else
          {
              print"<script>alert('nooooooooo')</script>";
          }
  }
?>
 <head>
   <link rel="stylesheet" type="text/css" href="../css/bus_seat.css">
 </head>
 <body>
  <form action="" method="post">
    <div class="wrappper">
      <div class="place">
         
      </div>
      <div class="left">
        <div style="font-size:14px; color:#6699CC; font-family:cursive; margin-left:30px; margin-top:40px; font-weight:600; ">Boarding Point</div>
         </select>
   <select class="ac_nonac" name="bord">
   
    <option>Dhaka</option>
    <option>Feni</option>
    <option>Comilla</option>
     
    
   </select>
<div style="font-size:14px; color:#6699CC; font-family:cursive; margin-left:30px; margin-top:100px; font-weight:600; ">Drop Point</div>
   </select>
   <select class="ac_nonac" name="drop">
    <option>Chittagong</option>
     
    
   </select> 
  
<iframe src="https://www.google.com/maps/d/embed?mid=1pN5ejwcjMQ3l0xIburQKp3kWJ9Q" width="400" height="480"></iframe>
 
  


      </div>
        <div class="bus_seat">
           <div class="seat1">
              <img src="../images/9-512.png" height="40px;" width="40px;" style="margin-top:40px; margin-left:60px;">
           </div>
           <div class="seat2">
               <ul>
               	<div class="seat3">

                 <?php
                    
                      if(isset($_POST['del']))

                      {
                        $e=$e-1;
                        
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='1'");   
                          $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");


                      }
                      

               
                  ?>


                  
                       <?php
                  
                  $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='1' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==1)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                     
                        $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='1'");
                        while($fetch_seat=mysql_fetch_array($seat_no_info))
                        {
                            $tt=$fetch_seat[2];

                        }
                        

                         if($tt==1)
                         {
                      
                  ?>
                  <li><button name="del" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="1" class="seat_style">1</button></li>
                   <?php
                      }
                    }
                   ?>




                   <?php
                  
                 
                   if(isset($_POST['dele']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='3'");  
                         $seat_info_in3=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in3=mysql_fetch_array($seat_info_in3);
      $price=$fetch_seat_in3[3]*$fetch_seat_in3[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }

                       $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='3' AND date_info='$date'");

                  $fetch_con=mysql_fetch_array($select_con);
                    if($fetch_con[1]==3)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='3'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          
                           
                    
                    
                         if($fetch_seat['2']==3)
                         {
                      
                  ?>
                  <li><button name="dele" value="3" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="3" class="seat_style">3</button></li>
                   <?php
                      }
                    }
                   ?>











                    <?php
                   if(isset($_POST['dele5']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='5'");  

                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='5' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==5)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='5'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==5)
                         {
                      
                  ?>
                  <li><button name="dele5" value="5" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="5" class="seat_style">5</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele7']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='7'");  

                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='7' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==7)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='7'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==7)
                         {
                      
                  ?>
                  <li><button name="dele7" value="7" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="7" class="seat_style">7</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele9']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='9'");   
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='9' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==9)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='9'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==9)
                         {
                      
                  ?>
                  <li><button name="dele9" value="9" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="9" class="seat_style">9</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele11']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='11'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='11' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==11)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='11'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==11)
                         {
                      
                  ?>
                  <li><button name="dele11" value="11" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="11" class="seat_style">11</button></li>
                   <?php
                      }
                    }
                   ?>
                  










                    <?php
                   if(isset($_POST['dele13']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='13'");   
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='13' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==13)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='13'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==13)
                         {
                      
                  ?>
                  <li><button name="dele13" value="13" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="13" class="seat_style">13</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele15']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='15'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='15' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==15)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='15'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==15)
                         {
                      
                  ?>
                  <li><button name="dele15" value="15" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="15" class="seat_style">15</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele17']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='17'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='17' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==17)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='17'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==17)
                         {
                      
                  ?>
                  <li><button name="dele17" value="17" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="17" class="seat_style">17</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele19']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='19'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='19' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==19)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='19'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==19)
                         {
                      
                  ?>
                  <li><button name="dele19" value="19" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="19" class="seat_style">19</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele2']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='2'");   
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='2' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==2)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='2'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==2)
                         {
                      
                  ?>
                  <li><button name="dele2" value="2" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="2" class="seat_style">2</button></li>
                   <?php
                      }
                    }
                   ?>
                   





                    <?php
                   if(isset($_POST['dele4']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='4'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='4' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==4)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='4'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==4)
                         {
                      
                  ?>
                  <li><button name="dele4" value="4" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="4" class="seat_style">4</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele6']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='6'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='6' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==6)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='6'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==6)
                         {
                      
                  ?>
                  <li><button name="dele6" value="6" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="6" class="seat_style">6</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele8']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='8'");   
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='8' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==8)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='8'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==8)
                         {
                      
                  ?>
                  <li><button name="dele8" value="8" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="8" class="seat_style">8</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele10']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='10'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='10' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==10)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='10'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==10)
                         {
                      
                  ?>
                  <li><button name="dele10" value="10" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="10" class="seat_style">10</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele12']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='12'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='12' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==12)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='12'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==12)
                         {
                      
                  ?>
                  <li><button name="dele12" value="12" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="12" class="seat_style">12</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele14']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='14'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='14' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==14)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='14'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==14)
                         {
                      
                  ?>
                  <li><button name="dele14" value="14" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="14" class="seat_style">14</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele16']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='16'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='16' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==16)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='16'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==16)
                         {
                      
                  ?>
                  <li><button name="dele16" value="16" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="16" class="seat_style">16</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele18']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='18'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='18' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==18)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='18'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==18)
                         {
                      
                  ?>
                  <li><button name="dele18" value="18" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="18" class="seat_style">18</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele20']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='20'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='20' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==20)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='20'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==20)
                         {
                      
                  ?>
                  <li><button name="dele20" value="20" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="20" class="seat_style">20</button></li>
                   <?php
                      }
                    }
                   ?>
                   
                   
                </div>
                <div class="seat4">
                    










                    <?php
                   if(isset($_POST['dele41']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='41'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='41' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==41)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='41'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==41)
                         {
                      
                  ?>
                  <li><button name="dele41" value="41" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="41" class="seat_style">41</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele42']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='42'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='42' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==42)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='42'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==42)
                         {
                      
                  ?>
                  <li><button name="dele42" value="42" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="42" class="seat_style">42</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele43']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='43'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='43' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==43)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='43'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==43)
                         {
                      
                  ?>
                  <li><button name="dele43" value="43" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="43" class="seat_style">43</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele44']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='44'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='44' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==44)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='44'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==44)
                         {
                      
                  ?>
                  <li><button name="dele44" value="44" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="44" class="seat_style">44</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele45']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='45'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='45' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==45)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='45'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==45)
                         {
                      
                  ?>
                  <li><button name="dele45" value="45" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="45" class="seat_style">45</button></li>
                   <?php
                      }
                    }
                   ?>
                </div>
                <div calss="seat5" style="height:100px; width:430px; margin-top:17px; float:left;">
                   










                    <?php
                   if(isset($_POST['dele22']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='22'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='22' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==22)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='22'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==22)
                         {
                      
                  ?>
                  <li><button name="dele22" value="22" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="22" class="seat_style">22</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele24']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='24'");   
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='24' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==24)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='24'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==24)
                         {
                      
                  ?>
                  <li><button name="dele24" value="24" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="24" class="seat_style">24</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele26']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='26'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='26' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==26)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='26'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==26)
                         {
                      
                  ?>
                  <li><button name="dele26" value="26" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="26" class="seat_style">26</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele28']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='28'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='28' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==28)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='28'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==28)
                         {
                      
                  ?>
                  <li><button name="dele28" value="28" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="28" class="seat_style">28</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele30']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='30'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='30' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==30)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='30'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==30)
                         {
                      
                  ?>
                  <li><button name="dele30" value="30" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="30" class="seat_style">30</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele32']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='32'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'"); 
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='32' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==32)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='32'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==32)
                         {
                      
                  ?>
                  <li><button name="dele32" value="32" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="32" class="seat_style">32</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele34']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='34'");
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'"); 
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='34' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==34)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='34'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==34)
                         {
                      
                  ?>
                  <li><button name="dele34" value="34" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="34" class="seat_style">34</button></li>
                   <?php
                      }
                    }
                   ?>
                   










                    <?php
                   if(isset($_POST['dele36']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='36'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='36' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==36)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='36'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==36)
                         {
                      
                  ?>
                  <li><button name="dele36" value="36" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="36" class="seat_style">36</button></li>
                   <?php
                      }
                    }
                   ?>
                   






                    <?php
                   if(isset($_POST['dele38']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='38'");
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];  
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'"); 
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='38' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==38)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='38'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==38)
                         {
                      
                  ?>
                  <li><button name="dele38" value="38" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="38" class="seat_style">38</button></li>
                   <?php
                      }
                    }
                   ?>
                   






                    <?php
                   if(isset($_POST['dele40']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='40'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'"); 
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='40' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==40)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='40'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==40)
                         {
                      
                  ?>
                  <li><button name="dele40" value="40" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="40" class="seat_style">40</button></li>
                   <?php
                      }
                    }
                   ?>
                   






                    <?php
                   if(isset($_POST['dele21']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='21'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='21' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==21)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='21'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==21)
                         {
                      
                  ?>
                  <li><button name="dele21" value="21" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="21" class="seat_style">21</button></li>
                   <?php
                      }
                    }
                   ?>
                   






                    <?php
                   if(isset($_POST['dele23']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='23'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='23' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==23)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='23'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==23)
                         {
                      
                  ?>
                  <li><button name="dele23" value="23" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="23" class="seat_style">23</button></li>
                   <?php
                      }
                    }
                   ?>
                   






                    <?php
                   if(isset($_POST['dele25']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='25'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='25' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==25)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='25'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==25)
                         {
                      
                  ?>
                  <li><button name="dele25" value="25" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="25" class="seat_style">25</button></li>
                   <?php
                      }
                    }
                   ?>
                   






                    <?php
                   if(isset($_POST['dele27']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='27'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='27' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==27)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='27'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==27)
                         {
                      
                  ?>
                  <li><button name="dele27" value="27" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="27" class="seat_style">27</button></li>
                   <?php
                      }
                    }
                   ?>
                   






                    <?php
                   if(isset($_POST['dele29']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='29'"); 
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='29' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==29)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='29'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==29)
                         {
                      
                  ?>
                  <li><button name="dele29" value="29" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="29" class="seat_style">29</button></li>
                   <?php
                      }
                    }
                   ?>
                  






                    <?php
                   if(isset($_POST['dele31']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='31'");   
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='31' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==31)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='31'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==31)
                         {
                      
                  ?>
                  <li><button name="dele31" value="31" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="31" class="seat_style">31</button></li>
                   <?php
                      }
                    }
                   ?>
                   






                    <?php
                   if(isset($_POST['dele33']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='33'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='33' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==33)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='33'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==33)
                         {
                      
                  ?>
                  <li><button name="dele33" value="33" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="33" class="seat_style">33</button></li>
                   <?php
                      }
                    }
                   ?>
                   






                    <?php
                   if(isset($_POST['dele35']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='35'");   
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='35' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==35)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='35'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==35)
                         {
                      
                  ?>
                  <li><button name="dele35" value="35" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="35" class="seat_style">35</button></li>
                   <?php
                      }
                    }
                   ?>
                                      






                    <?php
                   if(isset($_POST['dele37']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='37'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4];
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'"); 
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='37' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==37)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='37'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==37)
                         {
                      
                  ?>
                  <li><button name="dele37" value="37" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="37" class="seat_style">37</button></li>
                   <?php
                      }
                    }
                   ?>
                                                         






                    <?php
                   if(isset($_POST['dele39']))
                      {
                        $e=$e-1;
                         mysql_query("UPDATE seat_info SET seat='$e' WHERE email='$email' AND session_id='$session' AND code='$code'");
                         mysql_query("DELETE FROM seat_no WHERE seat_no='39'");  
                         $seat_info_in1=mysql_query("SELECT * FROM seat_info WHERE session_id='$session' AND email='$email' AND code='$code'");
     $fetch_seat_in1=mysql_fetch_array($seat_info_in1);
      $price=$fetch_seat_in1[3]*$fetch_seat_in1[4]; 
      mysql_query("UPDATE seat_info SET total_taka='$price' WHERE session_id='$session' AND email='$email' AND code='$code'");
                      }
                      $select_con=mysql_query("SELECT * FROM confirm_seat WHERE code='$code' AND seat_no='39' AND date_info='$date'");
                  $fetch_con=mysql_fetch_array($select_con);
                  
                    if($fetch_con['1']==39)
                    {
                     ?>
                     <button name="boked" value="1" class="seat_style" style="border-radius:100px; color:#fff; background: #3B5998;">Boked</button></li>
                   <?php     
                    }
                    else
                    {
                   $seat_no_info=mysql_query("SELECT * FROM seat_no WHERE email='$email' AND session_id='$session' AND code='$code' AND seat_no='39'");
                        $fetch_seat=mysql_fetch_array($seat_no_info);
                        
                          

                    
                    
                         if($fetch_seat['2']==39)
                         {
                      
                  ?>
                  <li><button name="dele39" value="39" class="seat_style" style="border-radius:100px; color:#fff; background: #FA5400;">Cancel</button></li>
                  <?php
                      }

                      else
                      {
                  ?>

                   <li><button name="sea" value="39" class="seat_style">39</button></li>
                   <?php
                      }
                    }
                   ?>
                </div>

                   
               </ul>
           </div>
        </div>
        <div class="bottom">
           <div style="color:#999; font-family:arial; font-size:16px; font-weight:bold; margin-top:10px; float:right; margin-right:100px;">Total: <?php print $price?></div> <br><br>
           <button class="butt" name="add">Enter Passenger Details</button>
           
           <div style="color:#999; font-family:arial; font-size:16px; font-weight:bold; margin-top:-25px; float:left; margin-left:30px;">Total Seat:<?php print $e; ?></div>
           <div style="color:#999; font-family:arial; font-size:16px; font-weight:bold; margin-top:-25px; float:left; margin-left:275px;">Seat No:
            <?php
               $seat_no_in=mysql_query("SELECT * FROM seat_no WHERE email='$email'AND session_id='$session' AND code='$code'");
      while($fetch_seat_no=mysql_fetch_array($seat_no_in))
      {
        ?>
          <?php print $fetch_seat_no['2']; ?>,

          <?php
      }
      ?>
           </div>
        </div>
    </div>
  </form>
</body>
<?php
  }
  else
  {
      print"<script>location='user_login.php'</script>";
  }
?>
</html>