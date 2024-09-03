<?php 
	include('connect.php');

 if(isset($_POST['btnUpdate']))
{
	$MemberID=$_REQUEST['mid'];
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
	$location=$_POST['txtlocation'];
	$databaseid=$_POST['cboDatabaseID'];
	$update=mysqli_query($connection,"UPDATE LabMember SET User_Name='$username',First_Name='$firstname',Last_Name='$lastname',Email='$email',Qualification='$qualification',Phone_No='phnum',Address='$add',Password='$pass',Lab_ID='$labid',City_Code='$citycode',Lab_Location='$location',Database_ID='$databaseid' WHERE First_Name='$firstname' AND MemberID='$MemberID'");
	if($update)
	{
		echo "<script>alert('Member has been successfully updated!')</script>";
		echo "<script>location='Member_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Member Update</title>
</head>
<body>
<form action="Member_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
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
						$Lab_Location=$arr['Lab_Location'];
						$Lab_Title=$arr['Lab_Title'];
						echo "<option value='$LaboratoryID'>$LaboratoryID ~ $Lab_Location ~ $Lab_Title </option>";
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
			<td><input type="text" name="txtlocation" placeholder="Laboratory Location"></td>
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