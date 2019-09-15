<?php
include("../../../database/connection.php");
$name=$_POST['name'];
$id=$_POST['id'];
$mb=$_POST['mb'];
$price=$_POST['price'];
$date=$_POST['date'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Package information</title>
</head>

<body bgcolor="#FFFFFF">
<?php
 if(isset($_POST['add']))
 {
   if(!empty($name) && !empty($id) && !empty($mb) && !empty($price) && !empty($date))
     {
       mysql_query("INSERT INTO data_card_info(`name`,`id`,`mb`,`price`,`date`)VALUE('$name','$id','$mb','$price','$date')");
	    if(mysql_affected_rows()>0)
		{
		 print"<script>alert('Data added successfull')</script>";
		}
		else
		{
		 print"<script>alert('data added Unsuccessfull')</script>";
		}
      }
	  else
	  {
	   print"<script>alert('Please Insert Data')</script>";
	  }		
 }
?>

<?php
 if(isset($_POST['delete']))
 {
      mysql_query("DELETE FROM data_card_info WHERE id='$id'");
         if(mysql_affected_rows()>0)
		 {
		   print"<script>alert('Delete Successfull')</script>";
		 }
		 else
		 {
		   print"<script>alert('Delete Unsuccessfull')</script>";
		 }
 }
?>
<?php
 if(isset($_POST['edit']))
 {
       mysql_query("UPDATE data_card_info SET name='$name', mb='$mb', price='$price', date='$date' WHERE id='$id'");
             if(mysql_affected_rows()>0)
			 {
			   print"<script>alert('Edit Successfull')</script>";
			 }
			 else
			 {
			  print"<script>alert('Edit Unsuccessfull')</script>";
			 }
 
 }

?>

<?php
 if(isset($_POST['view']))
 {
    $select=mysql_query("SELECT * FROM data_card_info");
	 $total_feild=mysql_num_fields($select);
	 $table.="<table width='500px' height='auto' border='1px'>";
	 $table.="<tr>";
	 $table.="<td>";
	 $table.="NAME";
     $table.="</td>";
	 $table.="<td>";
	 $table.="ID";
     $table.="</td>";
	 $table.="<td>";
	 $table.="MB";
     $table.="</td>";
	 $table.="<td>";
	 $table.="PRICE";
     $table.="</td>";
	 $table.="<td>";
	 $table.="DATE";
     $table.="</td>";	 
	 $table.="</tr>";
	while($fetch=mysql_fetch_array($select))
	{
	 $table.="<tr>";
	for($x=0; $x<$total_feild; $x++)
	{
	 $table.="<td>";
	 $table.=$fetch[$x];
	 $table.="</td>";
	} 
	 $table.="</tr>";	
	}  
	 $table.="</table>";
 }
?>

		<form name="form" method="post" enctype="multipart/form-data">
			<table height="200px"width="500px" bgcolor="#CCCCCC" border="">
			<tr>
				<td colspan="4" height="8" align="center" bgcolor="#CCCCCC">  <h1>Data Card information </h1></td>
			</tr>
				
				<tr>
				<td>Operator Name</td>
				<td>
					<select name="name">				
					<option>operator  Name</option>
					 <option>Grameenphone</option>
					 <option>Banglalink</option>
					 <option>Robi</option>
					 <option>Teletalk</option>				 
					</select>
				</td>
				
			</tr>
				<tr>
					<td> ID:</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td> MB:</td>
					<td><input type="text" name="mb"></td>
				</tr>
				<tr>
					<td> Price:</td>
					<td><input type="text" name="price"></td>
				</tr>
				<tr>
					<td> Date:</td>
					<td><input type="date" name="date" class="date"></td>
				</tr>
				
				<tr>
				
				<td align="center" colspan="4" ><a>
				<input type="submit" name="add" value="ADD">
				 <input type="submit" name="delete" value="DELETE"> 
				 <input type="submit" name="edit" value="Edit"> 
				 <input type="submit" name="view" value="VIEW"></td></a>
			</tr>
			<?php print $table; ?>
			</table> 
		</form>	
	</body>
</html>