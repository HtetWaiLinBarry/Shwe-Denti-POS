<?php 
	include('connect.php');

if(isset($_REQUEST['did']))
{
	$DoctorID=$REQUEST['did'];
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
	$databaseid=$_POST['cboDatabaseID'];
	$update=mysqli_query($connection,"UPDATE Doctor SET Privilege='$privilege',User_Name='$username',Qualification='$qualification',First_Name='$firstname',Last_Name='lastname',Email='$email',Address='$add',Phone_No='$phnum',Password='$pass',Medical_ID='$mid',Clinic_Location='$clocation',City_Code='$citycode',Lab_Location='$location',DatabaseID='$databaseid' WHERE DoctorID='$DoctorID'");
	if($update)
	{
		echo "<script>alert('Doctor has been successfully updated!')</script>";
		echo "<script>location='Doctor_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Doctor Update</title>
</head>
<body>
<form action="Doctor_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
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
			<td>Database ID</td>
			<td>
				<select name="cboDatabaseID">
					<option>Choose Database ID</option>
					<?php  
					$DQuery="SELECT * FROM Dbs";
					$D_ret=mysqli_query($connection,$DQuery);
					$D_count=mysqli_num_rows($D_ret);

					for($i=0;$i<$D_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($D_ret);
						$DatabaseID=$arr['DatabaseID'];
						$DoctorID=$arr['DoctorID'];
						echo "<option value='$DatabaseID'>$DatabaseID ~$DoctorID</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="txtpass" placeholder="Enter Password" required></td>
		</tr>
<tr>
		<td>
			<input type="submit" name="btnUpdate" value="Update">
			<input type="reset" name="btnCancel" value="Cancel">
		</td>
	</tr>                                                                                                                                                                          
</table>
<legend align="center">Laboratory Update</legend>
		</fieldset>
</form>
</body>
</html>