<?php 
include('connect.php');
include('mheader.php');

if (isset($_POST['btnregister']))
{
	$company=$_POST['txtcompany'];
	
	$select="SELECT count(CompanyID) from Company where CompanyName='$company'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Company(CompanyName)
			 	 values('$company')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Company Data has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='Company_View.php'</script>";
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
	<title>Company Registration</title>
</head>
<body>


<form action="Company_Register.php" method="POST">
	<table align=left>

		<H1>Company Registration</H1>
		<tr>
			<td>Company</td>
			<td><input type="text" name="txtcompany" placeholder="Enter Company's Name"></td>
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