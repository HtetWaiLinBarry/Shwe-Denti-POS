<?php 
include('connect.php');
include('mheader.php');

if (isset($_POST['btnregister']))
{
	$location=$_POST['txtlocation'];
	$title=$_POST['txttitle'];
	$numofmem=$_POST['txtnumofmem'];
	
	$select="SELECT count(LaboratoryID) from Laboratory where Lab_Location='$location'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Laboratory(Lab_Location,Lab_Title,NumOfMembers)
			 	 values('$location','$title','$numofmem')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Laboratory Data has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='Laboratory_View.php'</script>";
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
	<title>Laboratory Registration</title>
</head>
<body>


<form action="Laboratory_Register.php" method="POST">
	<table align=left>

		<H1>Laboratory Registration</H1>
		<tr>
			<td>Laboratory Location</td>
			<td><input type="text" name="txtlocation" placeholder="Enter Laboratory Location"></td>
		</tr>
		<tr>
			<td>Laboratory Title</td>
			<td><input type="text" name="txttitle" placeholder="Enter Laboratory Title"></td>
		</tr>
		<tr>
			<td>Number Of Members</td>
			<td><input type="text" name="txtnumofmem" placeholder="Enter Number of Members"></td>
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