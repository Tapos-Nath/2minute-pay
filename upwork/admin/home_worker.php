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
$id=$_POST['id'];    
$name=$_POST['name'];    
$age=$_POST['age'];    
$study=$_POST['study'];    
$exp=$_POST['exp'];
$expart=$_POST['expart'];
$p_address=$_POST['p_address'];    
$message=$_POST['message'];    
  

if(isset($_POST['add'])){
    if(!empty($id)&& !empty($name)&& !empty($age)&&!empty($study)&&!empty($exp)&&!empty($expart)&&!empty($p_address)&&!empty($message)){
        mysql_query("INSERT INTO home_worker(`id`,`name`,`age`,`study`,`exp`,`expart`,`p_address`,`message`)VALUES('$id','$name','$age','$study','$exp','$expart','$p_address','$message')");
        if(mysql_affected_rows()>0){
            $img="../image/home_worker/$id.jpg";
            move_uploaded_file($_FILES['img']['tmp_name'],$img);
//            print $img;
            $su='Successfull';
        }else{
            $un='Unsuccessfull';
        }
    }else{
        $f='Failed !!';
    }
}

if(isset($_POST['delete'])){
    mysql_query("DELETE FROM home_worker WHERE id='$id'");
    if(mysql_affected_rows()>0){
        $su='Delete Successfull';
    }else{
        $un='Delete Unsuccessfull !!!';
    }
}

if(isset($_POST['edit'])){
    mysql_query("UPDATE home_worker SET name='$name',age='$age',study='$study' WHERE id='$id'");
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
              <h2 class="text-center" style="border-bottom:2px solid black;padding:10px;">Home Worker</h2>
              <br>
              
               <div class="form-group">
                   <label for="">Id No.</label>
                   <input type="text" class="form-control" name="id">
               </div>
               <div class="form-group">
                   <label for="">Name</label>
                   <input type="text" class="form-control" name="name">
               </div>
                <div class="form-group">
                   <label for="">Age</label>
                   <input type="text" class="form-control" name="age">
               </div>
                <div class="form-group">
                   <label for="">Study</label>
                   <input type="text" class="form-control" name="study">
               </div>
                <div class="form-group">
                   <label for="">Exprence</label>
                   <input type="text" class="form-control" name="exp">
               </div>
                <div class="form-group">
                   <label for="">Expart</label><br>
                   <input type="text" class="form-control" name="expart">
               </div>
               
                <div class="form-group">
                   <label for="">Present Address</label>
                   <input type="text" class="form-control" name="p_address">
               </div><div class="form-group">
                   <label for="">About Self</label>
                   <textarea class="form-control" id="" cols="30" rows="5" name="message"></textarea>
               </div>
               <input type="file" name="img">
               <br>
               <span style="color:green;"><?php print $su?></span>
               <span style="color:red;"><?php print $un?></span>
               <span style="color:red;"><?php print $f?></span>
               <br>
               <input type="submit" class="btn btn-success" name="add" value="Add">
               <input type="submit" class="btn btn-success" name="delete" value="Delete">
               <input type="submit" class="btn btn-success" name="edit" value="Edit">
<!--               <input type="submit" class="btn btn-success" name="view" value="View">-->
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
                       <td>Name</td>
                       <td>Age</td>
                       <td>Study</td>
                       <td>exp</td>
                       <td>P_address</td>
                       <td>message</td>
                   </tr>
                   <?php
                    $select_table=mysql_query("SELECT * FROM home_worker");
                    while($fetch_table=mysql_fetch_array($select_table)){
                   ?>
                   <tr>
                       <td><?php print $fetch_table[0]?></td>
                       <td><?php print $fetch_table[1]?></td>
                       <td><?php print $fetch_table[2]?></td>
                       <td><?php print $fetch_table[3]?></td>
                       <td><?php print $fetch_table[4]?></td>
                       <td><?php print $fetch_table[5]?></td>
                       <td><?php print $fetch_table[6]?></td>
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