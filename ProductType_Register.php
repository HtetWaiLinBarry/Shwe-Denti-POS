<?php 
include('connect.php');
include('mheader.php');

if (isset($_POST['btnregister']))
{
	$ptype=$_POST['txtptype'];
	
	$select="SELECT count(ProductTypeID) from ProductType where ProductType='$ProductType'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO ProductType(ProductType)
			 	 values('$ptype')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Product Type Data has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='ProductType_View.php'</script>";
		}
		else
		{
			echo "<p>Something went wrong.".mysqli_error($connection)."</p>";
		}
	}
	else
	{
		echo "<p>Something's wrong!</p>";
	}

	
}

 ?>

<html>
<head>
	<title>Product Type Registration</title>
</head>
<body>


<form action="ProductType_Register.php" method="POST">
	<table align=left>

		<H1>Product Type Registration</H1>
		<tr>
			<td>Product Type</td>
			<td><input type="text" name="txtptype" placeholder="Product Type Name"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnregister" value="Register">
				<input type="reset" name="btncancel" value="Cancel">
			</td>
		</tr>
	</table>

</form>
</body>
</html>