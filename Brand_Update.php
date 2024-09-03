<?php 
	include('connect.php');

 if(isset($_POST['btnUpdate']))
{
	$BrandID=$_POST['cboBrandID'];
	$BrandName=$_POST['txtbname'];
	$update=mysqli_query($connection,"UPDATE Brand SET BrandName='$BrandName' WHERE BrandID='$BrandID'");
	if($update)
	{
		echo "<script>alert('Brand has been successfully updated!')</script>";
		echo "<script>location='Brand_view.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Brand Update</title>
</head>
<body>
<form action="Brand_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
		<tr>
			<td>Select Brand</td>
			<td>
				<select name="cboBrandID">
					<option>Choose Brand</option>
					<?php  
					$RoQuery="SELECT * FROM Brand";
					$Ro_ret=mysqli_query($connection,$RoQuery);
					$Ro_count=mysqli_num_rows($Ro_ret);

					for($i=0;$i<$Ro_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Ro_ret);
						$BrandID=$arr['BrandID'];
						$BrandName=$arr['BrandName'];
						echo "<option value='$BrandID'>$BrandID ~ $BrandName</option>";
					}
					?>
				</select>
			</td>
		</tr>
	<tr>
		<td>Brand Name</td>
		<td>
			<input type="text" name="txtbname" required/>
		</td>
	</tr>

<tr>
		<td>
			<input type="submit" name="btnUpdate" value="Update">
			<input type="reset" name="btnCancel" value="Cancel">
		</td>
	</tr>                                                                                                                                                                          
</table>
<legend align="center">Brand Update</legend>
		</fieldset>
</form>
</body>
</html>