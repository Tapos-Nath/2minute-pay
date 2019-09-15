<?php
    include("../database/connect.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tunikhala</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
 <?php
$food_menu=$_POST['food_menu'];    
  

if(isset($_POST['add'])){
//     if(!empty($id)&& !empty($name)&& !empty($age)&& !empty($study)&& !empty($exp)&& !empty($expart)&& !empty($p_address)&& !empty($message)){
        mysql_query("INSERT INTO food_menu(`food_menu`)VALUES('$food_menu')");
        if(mysql_affected_rows()>0){
           
//            print $img;
            $su='Successfull';
        }else{
            $un='Unsuccessfull';
        }
//    }else{
//        $f='Failed !!';
//    }
}

if(isset($_POST['delete'])){
    mysql_query("DELETE FROM food_menu WHERE id='$id'");
    if(mysql_affected_rows()>0){
        $su='Delete Successfull';
    }else{
        $un='Delete Unsuccessfull !!!';
    }
}

if(isset($_POST['edit'])){
    mysql_query("UPDATE food_menu SET food_menu='$food_menu' WHERE id='$id'");
    if(mysql_affected_rows()>0){
        $su='Edit Successfull';
    }else{
        $un='Edit Unsuccessfull !!!';
    }
}



?>
  <br><br>
   <div class="container">
     <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
          
          <br>
           <div class="col-md-4 col-md-offset-1">
              <h2 class="text-center" style="border-bottom:2px solid black;padding:10px;">Food</h2>
              <br>
               <div class="form-group">
                   <label for="">Food Menu</label>
                   <input type="text" class="form-control" name="food_menu">
               </div>
               
               <br>
               <span style="color:green;"><?php print $su?></span>
               <span style="color:red;"><?php print $un?></span>
               <span style="color:red;"><?php print $f?></span>
               <br>
               <input type="submit" class="btn btn-success" value="ADD" name="add">
               <input type="submit" class="btn btn-success" value="DELETE" name="delete">
               <input type="submit" class="btn btn-success" value="EDIT" name="edit">
               <br>
           </div>
       </div>
       </form>
   </div>
   <br><br><br>
   <div class="container">
       <div class="row">
           <div class="col-md-6 col-md-offset-1">
               <table class="table table-bordered">
                   <tr>
                       <td>Id No</td>
                       <td>Food Menu</td>
                      
                   </tr>
                   <?php
                    $select_table=mysql_query("SELECT * FROM food_menu");
                    while($fetch_table=mysql_fetch_array($select_table)){
                   ?>
                   <tr>
                       <td><?php print $fetch_table[0]?></td>
                       <td><?php print $fetch_table[1]?></td>
                       
                   </tr>
                   <?php } ?>
               </table>
           </div>
       </div>
   </div>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>