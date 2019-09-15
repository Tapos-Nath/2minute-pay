<?php
include("../../../database/connection.php");
$name=$_POST['name'];
$customer_id=$_POST['customer_id'];
$bill_no=$_POST['bill_no'];
$zip_code=$_POST['zip_code'];
$date=$_POST['date'];
$address=$_POST['address'];
$taka=$_POST['taka'];
$company_name=$_POST['company_name'];
?>

<html>
<head>
<style type="text/css">
.design{height:35px; 
        width:70px;
		margin-left:5px;
		color:#FFFFFF;
		background:#3FACCF;
		border:none;
		border-radius:5px;
		cursor:pointer;
		font-family:cursive;
	    float:left;}
</style>
</head>
<body>
<?php
 if(isset($_POST['add']))
 {
     mysql_query("INSERT INTO watter_bill_info(`name`,`id`,`bill_no`,`zip_code`,`date`,`address`,`price`,`company_name`)
	               VALUE('$name','$customer_id','$bill_no','$zip_code','$date','$address','$taka','$company_name')");
				   if(mysql_affected_rows()>0)
				   {
				     print"<script>alert('data added successfull')</script>";
				   }
				   else
				   {
				    print"<script>alert('data added unsuccessfull')</script>";
				   }
 
 }
?>
<form name="form1" method="post" enctype="multipart/form-data">
<div class="wrapper" style="height:auto; width:450; border:1px solid #999999; float:left;">
  <table width="450" border="0">
    <tr>
      <td height="46" colspan="2" style="font-size:20px;font-family:sans-serif;font-weight:600; margin-left:40px; margin-top:10px;float:left;">Electric Bill INFO </td>
    </tr>
    <tr>
      <td width="207" height="43">Name:</td>
      <td width="227"><label>
        <input type="text" name="name" Placeholder="Name" style="height:35px; width:200px; border-radius:5px; border-radius:5px; background:#F2F2F2; float:left;">
      </label></td>
    </tr>
		  <tr>
      <td height="39">Customer_ID:</td>
      <td><input type="text" name="customer_id" placeholder="Customer ID" style="height:35px; width:200px; border-radius:5px; border-radius:5px; background:#F2F2F2; float:left;"/></td>
    </tr>
    <tr>
      <td height="39">Bill No:</td>
      <td><input type="text" name="bill_no" style="height:35px; width:200px; border-radius:5px; border-radius:5px; background:#F2F2F2; float:left;"/></td>
    </tr>
	    <tr>
      <td height="39">Zip Code:</td>
      <td><input type="text" name="zip_code" style="height:35px; width:200px; border-radius:5px; border-radius:5px; background:#F2F2F2; float:left;"/></td>
    </tr>
	  <tr>
      <td height="39"> Date:</td>
      <td><input type="date" name="date" style="height:35px; width:200px; border-radius:5px; border-radius:5px; background:#F2F2F2; float:left;"/></td>
    </tr>
    <tr>
      <td height="52"> Address:</td>
      <td><label>
        <input type="text" name="address" placeholder="Address...." style="height:50px; border-radius:5px; width:200px; background:#F2F2F2; float:left;"/>
      </label></td>
    </tr>
	  <tr>
      <td height="39"> Taka:</td>
      <td><input type="text" name="taka" style="height:35px; width:200px; border-radius:5px; border-radius:5px; background:#F2F2F2; float:left;"/></td>
    </tr>
	  <tr>
      <td height="39">Wasa Name:</td>
      <td>
	    <select name="company_name" style="height:35px; width:200px; border-radius:5px; border-radius:5px; background:#F2F2F2; float:left;">
		 <option>Wasa name</option>
		  <?php
		   $select=mysql_query("SELECT * FROM watter_company");
		   while($fetch_name=mysql_fetch_array($select))
		   {
		   ?>
		    <option><?php print $fetch_name['0']; ?></option> 
		   <?php
		   }
		   ?>
		   
		  ?>
		</select>
	  </td>
    </tr>
    <tr>
      <td height="60" colspan="2">
        <input type="submit" name="add" value="Add" class="design">
        <input type="submit" name="edit" value="Edit" class="design">
        <input type="submit" name="delete" value="Delete" class="design">
        <input type="submit" name="view" value="View" class="design">
      </td>
    </tr>
	<?php print $table; ?>
  </table>
</form>
</div>
</body>
</html>