<?php 
include('connect.php');
include('mheader.php');

if(isset($_REQUEST['mid']))
    {
    $mid=$_REQUEST['mid'];

if (isset($_POST['btnregister']))
{
	$privilege=$_POST['cboprivilege'];
	$username=$_POST['txtusername'];
	$qualification=$_POST['txtqualification'];
	$firstname=$_POST['txtfirstname'];
	$lastname=$_POST['txtlastname'];
	$email=$_POST['txtemail'];
	$add=$_POST['txtadd'];
	$phnum=$_POST['txtphnum'];
	$pass=$_POST['txtpass'];
	$mid=$_POST['txtmedicalid'];
	$clocation=$_POST['txtclocation'];
	$citycode=$_POST['txtcitycode'];
	$location=$_POST['cbolocation'];


	$select="SELECT count(DoctorID) from Doctor where Email='$email'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Doctor(Privilege,User_Name,Qualification,FirstName,LastName,Email,Address,Phone_No,Password,Medical_ID,Clinic_Location,City_Code,Lab_Location)
			 	 values('$privilege','$username','$qualification','$firstname','$lastname','$email','$add','$phnum','$pass','$mid','$clocation','$citycode','$location')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Doctor has been registered SUCCESSFULLY!') </script>";
			echo "<script>location='Doctor_Login.php'</script>";
		}
		else
		{
			echo "<p>Something went wrong.".mysqli_error($connection)."</p>";
		}
	}
	else
	{
		echo "<p>Choose Another Email</p>";
	}

	
}
}

 ?>

<html>
<head>
	<title>Doctor Registration</title>
</head>
<body>


<form action="Doctor_Register.php" method="POST" >
	<table align=center>

		<H1 align="center">Doctor Registration</H1>
		<tr>
			<td>Privilege</td>
			<td>
				<select name="cboprivilege">
					<option>Choose Privilege</option>
					<option>Surgeon</option>
					<option>Professor</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="txtusername" placeholder="Enter User Name Here"></td>
		</tr>
		<tr>
			<td>Qualification</td>
			<td><input type="text" name="txtqualification" placeholder="Enter Qualification" required></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="txtfirstname" placeholder="Enter First Name Here"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="txtlastname" placeholder="Enter Last Name Here" required></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="email" name="txtemail" placeholder="Enter Email" required></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="txtadd" placeholder="Enter your Address"></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="txtphnum" placeholder="Enter your Phone Number"></td>
		</tr>
		<tr>
			<td>Medical ID</td>
			<td><input type="text" name="txtmedicalid" placeholder="Enter Medical ID"></td>
		</tr>
		<tr>
			<td>Clinic Location</td>
			<td><input type="text" name="txtclocation" placeholder="Enter Clinic Location"></td>
		</tr>
		<tr>
			<td>City Code</td>
			<td><input type="text" name="txtcitycode" placeholder="Your respective city code"></td>
		</tr>
		<tr>
			<td>Lab Location</td>
			<td>
				<select name="cbolocation">
					<option>Choose Laboratory Location</option>
					<?php  
					$LQuery="SELECT * FROM Laboratory";
					$L_ret=mysqli_query($connection,$LQuery);
					$L_count=mysqli_num_rows($L_ret);

					for($i=0;$i<$L_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($L_ret);
						$LaboratoryID=$arr['LaboratoryID'];
						$Lab_Location=$arr['Lab_Location'];
						echo "<option value='$LaboratoryID'>$LaboratoryID ~ $Lab_Location</option>";
					}
					?>
				</select>
			</td>
		<tr>
			<td>Password</td>
			<td><input type="password" name="txtpass" placeholder="Enter Password" required></td>
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