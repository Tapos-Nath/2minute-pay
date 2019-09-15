<?php
mysql_connect('localhost','root','');
mysql_select_db('project');
$company_name=$_POST['company_name'];
$company_id=$_POST['company_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
 .design{height:35px;
         width:60px;
		 margin-left:10px;
		 border:none;
		 color:#FFFFFF;
		 background:#1A1A1A;
		 font-size:16px;
		 font-family:cursive;
		 border-radius:5px;
		 cursor:pointer;
		 float:left;
		 
		 }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operator Form</title>
</head>
		
<body bgcolor="#FFFFFF">
<?php
 if(isset($_POST['add']))
 {
  if(!empty($company_name) && !empty($company_id))
  {
  mysql_query("INSERT INTO electricity_company(`company_name`,`company_id`)VALUE('$company_name','$company_id')");
   if(mysql_affected_rows()>0)
   {
    print"<script>alert('Data Added successfull')</script>";
   }
   else
   {
    print"<script>alert('Data Added Unsuccessfull')</script>";
   }
  }
  else
  {
   print "<script>alert('Please Insert Data')</script>";
  } 
 }
?>
<?php
 if(isset($_POST['edit']))
 {
  if(!empty($company_id))
  {
    mysql_query("UPDATE electricity_company SET company_name='$company_name' WHERE company_id='$company_id'");
	 if(mysql_affected_rows()>0)
	 {
	  print"<script>alert('Data Edit Successfull')</script>";
	 }
	 else
	 {
	  print"<script>alert('Data Edit Unsuccessfull')</script>";
	 }
   }
   else
   {
    print"<script>alert('Please Enter company ID')</script>";
   }	 
 }
?>
<?php
 if(isset($_POST['delete']))
 {
  if(!empty($company_id))
  {
   mysql_query("DELETE FROM electricity_company WHERE company_id='$company_id'");
    if(mysql_affected_rows()>0)
	{
	  print"<script>alert('Delete Successfull')</script>";
	}
	else
	{
	  print"<script>alert('Delete Unsuccessfull')</script>";
	}
  }
  else
  {
   print "<script>alert('Please Enter company Id')</script>";
  }	
 }
?>

<?php
 if(isset($_POST['view']))
 {
   $select=mysql_query("SELECT * FROM electricity_company");
    $total_fields=mysql_num_fields($select);
	$table.="<table width='300px' height='auto' border='1px'>";
	$table.="<tr>";
	$table.="<td>";
	$table.="COMPANY_NAME";
	$table.="</td>";
	$table.="<td>";
	$table.="COMPANY_ID";
	$table.="</td>";
	$table.="</tr>";
   while($fetch_value=mysql_fetch_array($select))
   {
    $table.="<tr>";
   for($x=0; $x<$total_fields; $x++)
   {
    $table.="<td>";
	$table.=$fetch_value[$x];
	$table.="</td>";
   }	
	$table.="</tr>";
   }	
	$table.="</table>";
 }
?>
<form id="form1" name="form1" method="post" enctype="multipart/form-data">
	<div class="form">
		<table height="231"width="500px" bgcolor="#CCCCCC" border="">
		<tr>
			<td colspan="4" height="8" align="center" bgcolor="#CCCCCC">  <h1>Electricity Company</h1></td>
		</tr>
            
            <tr>
			<td>Company Name</td>
			<td>
              <input type="text" name="company_name"/>
			  </td>
			</tr>
			<tr>
                <td>Gas Company ID</td>
                <td><input type="text" name="company_id"></td>
            </tr>
			 <tr>
            <td height="67" colspan="4" align="center">
              
                <input type="submit" name="add" value="Add"  class="design"/>
                <input type="submit" name="edit" value="Edit" class="design" />
                <input type="submit" name="delete" value="Delete" class="design" />
                <input type="submit" name="view" value="View" class="design"/>
         </td>
		 <?php print $table; ?>
        </tr>
	  </table>
	</div>
	</form>
</body>
</html>

			
           



