<?php 
include('connect.php');
include('mheader.php');

if (isset($_POST['btnregister']))
{
	
	$username=$_POST['txtusername'];
	$firstname=$_POST['txtfirstname'];
	$lastname=$_POST['txtlastname'];
	$email=$_POST['txtemail'];
	$qualification=$_POST['txtqualification'];	
	$phnum=$_POST['txtphnum'];
	$add=$_POST['txtadd'];
	$pass=$_POST['txtpass'];
	$labid=$_POST['cboLaboratoryID'];
	$citycode=$_POST['txtcitycode'];
	$location=$_POST['cbolocation'];
	$databaseid=$_POST['cboDatabaseID'];


	
	$select="SELECT count(MemberID) from LabMember where Email='$email'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO LabMember(User_Name,First_Name,Last_Name,Email,Qualification,Phone_No,Address,Password,Lab_ID,City_Code,Lab_Location,Database_ID)
			 	 values('$username','$firstname','$lastname','$email','$qualification','$phnum','$add','$pass','$labid','$citycode','$location','$databaseid')";

		$ret=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret) 
		{
			
			
			echo "<script> alert('Member has been registered SUCCESSFULLY!') </script>";
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

 ?>

<html>
<head>
	<title>Member Registration</title>
</head>
<body>


<form action="Member_Register.php" method="POST" >
	<table align=Left>

		<H1>Member Registration</H1>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="txtusername" placeholder="Enter User Name Here"></td>
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
			<td>Qualification</td>
			<td><input type="text" name="txtqualification" placeholder="Enter Qualification" required></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="txtphnum" placeholder="Enter your Phone Number"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="txtadd" placeholder="Enter your Address"></td>
		</tr>
		<tr>
			<td>Laboratory ID</td>
			<td>
				<select name="cboLaboratoryID">
					<option>Choose Laboratory ID</option>
					<?php  
					$LQuery="SELECT * FROM Laboratory";
					$L_ret=mysqli_query($connection,$LQuery);
					$L_count=mysqli_num_rows($L_ret);

					for($i=0;$i<$L_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($L_ret);
						$LaboratoryID=$arr['LaboratoryID'];
						$Lab_Title=$arr['Lab_Title'];
						echo "<option value='$LaboratoryID'>$LaboratoryID ~ $Lab_Title </option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>City Code</td>
			<td><input type="text" name="txtcitycode" placeholder="Your respective city code"></td>
		</tr>
		<tr>
			<td>Lab Location</td>
			<td>
				<select name="cbolocation">
					<option>Choose Laboratory ID</option>
					<?php  
					$LbQuery="SELECT * FROM Laboratory";
					$Lb_ret=mysqli_query($connection,$LbQuery);
					$Lb_count=mysqli_num_rows($Lb_ret);

					for($i=0;$i<$Lb_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Lb_ret);
						$LaboratoryID=$arr['LaboratoryID'];
						$Lab_Location=$arr['Lab_Location'];
						$Lab_Title=$arr['Lab_Title'];
						echo "<option value='$LaboratoryID'>$LaboratoryID ~ $Lab_Location ~ $Lab_Title </option>";
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
						$MemberID=$arr['MemberID'];
						echo "<option value='$DatabaseID'>$DatabaseID ~$MemberID</option>";
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