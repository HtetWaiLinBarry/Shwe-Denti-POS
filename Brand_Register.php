<?php 
include('connect.php');
include('mheader.php');

if (isset($_POST['btnregister']))
{
	$brandname=$_POST['txtbrandname'];

	
	$select="SELECT count(BrandID) from Brand where BrandName='$brandname'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Brand(BrandName)
			 	 values('$brandname')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Brand has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='Brand_View.php'</script>";
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
	<title>Brand Registration</title>
</head>
<body>


<form action="Brand_Register.php" method="POST">
	<table align=left>

		<H1>Brand Registration</H1>
		<tr>
			<td>Brand Name</td>
			<td><input type="text" name="txtbrandname" placeholder="Enter Brand Name"></td>
		</tr>
		
		<tr>
			<td>
				<input type="submit" name="btnregister" value="Register">
				<input type="reset" name="btncancel" value="Cancel">
			</td>
		</tr>
	</table>

</form>
</body>
</html>