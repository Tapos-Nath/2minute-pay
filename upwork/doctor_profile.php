<?php
include('database/connect.php');
$id=$_GET['id'];
    $select_teacher=mysql_query("SELECT * FROM home_teacher WHERE id='$id'");
    $fetch_teacher=mysql_fetch_array($select_teacher);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>tunikhala</title>
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset/css/font-awesome.min.css">
        <link rel="stylesheet" href="asset/css/mdb.min.css">
        <style>
            .skill span{
                background:#E0E0E0;
                padding:5px 5px;
                border-radius: 3px;
                color:black;
                font-size: 12px;
                font-weight: 500;
                line-height: 40px;  
            }
        </style>
    </head>
    <body>
     <br><br><br>
     <div class="container">
         <div class="row">
             <div class="col-md-6 offset-md-3" style="border:2px solid silver;">
                 <div class="row" style="border-bottom:2px solid silver;">
                     <div class="col-md-4">
                         <img src="image/home_teacher/<?php print $fetch_teacher[0];?>.jpg" alt="" style="height:150px;width:150px;border-radius:100%;">
                     </div>
                     <div class="col-md-8">
                         <h2>Name : <?php print $fetch_teacher[1];?>.</h2>
                         <h4>Expart : <?php print $fetch_teacher[8];?></h4>
                         <p><i class="fa fa-maps"></i>Address : <?php print $fetch_teacher[9];?></p>
                         <div class="skill">
                           
                            
                        </div>
                     </div>
                 </div>
                 <h2 class="text-left">Over View</h2>
                 <div class="row">
                    
                     <div class="col-md-8">    
                         
<!--                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam temporibus rem similique quod quibusdam magni cumque quam nihil, incidunt quo officia laborum sunt eligendi, assumenda. Alias deleniti iure rem optio modi, dolorem cum placeat cupiditate quia. Libero sed vero, nemo odio iusto itaque, sunt tenetur quos cumque perspiciatis animi explicabo, dicta quas pariatur excepturi praesentium voluptate eaque similique repellendus. Voluptate, ab corrupti deleniti itaque sit vel commodi. Dolorum assumenda quidem iure maiores reprehenderit sequi, ratione natus, quasi nisi fuga praesentium? Quisquam veniam quasi porro modi blanditiis recusandae dolorem libero. Totam minus qui unde perspiciatis, sapiente quos esse corporis et atque.</p>-->
                 <p style=""><?php print $fetch_teacher[10];?></p>
                     </div>
                     <div class="col-md-4">
                        <a href="service.php?&page=contact_teacher&id=<?php print $fetch_teacher[0];?>" style="padding:10px 10px;background:orangered;color:white;text-align:center;margin-left: 10px;line-height: 80px;border-radius: 3px;font-family: 'Bree Serif', serif;">Book Now</a>

                     </div>
                 </div>
                 </div>
             </div>
         </div>
     </div>
      <script src="asset/js/jquery-3.1.1.min.js"></script>  
      <script src="asset/js/bootstrap.min.js"></script>  
      <script src="asset/js/mdb.min.js"></script>  
      <script src="asset/js/tether.min.js"></script>  
    </body>
</html>