<?php 
	include('connect.php');

 if(isset($_POST['btnUpdate']))
{
	$LaboratoryID=$_POST['cbolabid'];
	$Location=$_POST['txtlocation'];
	$Title=$_POST['txttitle'];
	$NumOfMem=$_POST['txtnumofmem'];
	$update=mysqli_query($connection,"UPDATE Laboratory SET Lab_Location='$Location' WHERE LaboratoryID='$LaboratoryID'");
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
	<title>Laboratory Update</title>
</head>
<body>
<form action="Laboratory_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
		<tr>
			<td>Select Laboratory</td>
			<td>
				<select name="cbolabid">
					<option>Choose Laboratory</option>
					<?php  
					$RoQuery="SELECT * FROM Laboratory";
					$Ro_ret=mysqli_query($connection,$RoQuery);
					$Ro_count=mysqli_num_rows($Ro_ret);

					for($i=0;$i<$Ro_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Ro_ret);
						$LaboratoryID=$arr['LaboratoryID'];
						$Lab_Location=$arr['Lab_Location'];
						$Lab_Title=$arr['Lab_Title'];
						$NumOfMem=$arr['NumOfMembers'];
						echo "<option value='$LaboratoryID'>$LaboratoryID ~ $Lab_Location ~ $Lab_Title ~ $NumOfMem</option>";
					}
					?>
				</select>
			</td>
		</tr>
	<tr>
		<td>Laboratory Location</td>
		<td>
			<input type="text" name="txtlocation" required/>
		</td>
	</tr>
	<tr>
		<td>Laboratory Title</td>
		<td>
			<input type="text" name="txttitle" required/>
		</td>
	</tr>
	<tr>
		<td>Number Of Members</td>
		<td>
			<input type="text" name="txtnumofmem" required/>
		</td>
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