<?php 
	include('connect.php');

if(isset($_REQUEST['ptid']))
{
	$ProductTypeID=$_REQUEST['ptid'];
	$ptype=$_POST['txtptype'];
	$update=mysqli_query($connection,"UPDATE ProductType SET ProductType='$ProductType' WHERE ProductTypeID='$ProductTypeID'");
	if($update)
	{
		echo "<script>alert('Laboratory has been successfully updated!')</script>";
		echo "<script>location='Laboratory_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Product Type Update</title>
</head>
<body>
<form action="Laboratory_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
		<tr>
			<td>Product Type</td>
			<td><input type="text" name="txtptype" placeholder="Product Type Name"></td>
		</tr>                                                                                                                                                                         
</table>
<legend align="center">Product Type Update</legend>
		</fieldset>
</form>
</body>
</html>