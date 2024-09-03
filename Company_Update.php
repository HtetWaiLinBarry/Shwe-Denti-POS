<?php 
	include('connect.php');

if(isset($_REQUEST['cid']))
{
	$CompanyID=$_REQUEST['cid'];
	$CompanyName=$_POST['txtcompany'];
	$update=mysqli_query($connection,"UPDATE Company SET CompanyName='$CompanyName' WHERE CompanyID='$CompanyID'");
	if($update)
	{
		echo "<script>alert('Company has been successfully updated!')</script>";
		echo "<script>location='Company_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Company Update</title>
</head>
<body>
<form action="Company_Update.php" method="post">
			<fieldset>
	<table width="70%" align="center">
	<tr>
		<td>Company Name</td>
		<td>
			<input type="text" name="txtcompany" required/>
		</td>
	</tr>

<tr>
		<td>
			<input type="submit" name="btnUpdate" value="Update">
			<input type="reset" name="btnCancel" value="Cancel">
		</td>
	</tr>                                                                                                                                                                          
</table>
<legend align="center">Company Update</legend>
		</fieldset>
</form>
</body>
</html>