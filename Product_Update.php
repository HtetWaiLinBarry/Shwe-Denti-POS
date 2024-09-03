<?php 
	include('connect.php');

 if(isset($_POST['btnUpdate']))
{
	$ProductID=$_POST['cboProductID'];
	$BrandID=$_POST['cboBrandID'];
	$ProductTypeID=$_POST['cboProductTypeID'];
	$BrandName=$_POST['cboBrandName'];
	$ProductType=$_POST['cboProductType'];
	$Quantity=$_POST['txtQuantity'];
	$Quality=$_POST['cboQuality'];
	$Durability=$_POST['txtDurability'];
	$Expiry_Date=$_POST['txtExpiry'];
	$FirstOrderDate=$_POST['txtfirstorder'];
	$update=mysqli_query($connection,"UPDATE Product SET ProductID='$ProductID', BrandID='$BrandID', ProductTypeID='$ProductTypeID', BrandName='$BrandName', ProductType='$ProductType', Quantity='$Quantity', Quality='$Quality', Durability='$Durability', Expiry_Date='$Expiry_Date', FirstOrderDate='$FirstOrderDate' WHERE ProductID='$ProductID'");
	if($update)
	{
		echo "<script>alert('Product has been successfully updated!')</script>";
		echo "<script>location='Product_View.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}




 ?>

<html>
<head>
	<title>Product Update</title>
</head>
<body>
<form action="Product_View.php" method="post">
			<fieldset>
	<table width="70%" align="center">
		<tr>
			<td>Select Product To Update</td>
			<td>
					<select name="cboProductID">
					<option>Choose Product ID</option>
					<?php  
					$PQuery="SELECT * FROM Product";
					$P_ret=mysqli_query($connection,$PQuery);
					$P_count=mysqli_num_rows($P_ret);

					for($i=0;$i<$P_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($P_ret);
						$ProductID=$arr['ProductID'];
						$FirstOrderDate=$arr['FirstOrderDate'];
						echo "<option value='$ProductID'>$ProductID ~ $FirstOrderDate</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Brand Identification</td>
			<td>
				<select name="cboBrandID">
					<option>Choose Brand ID</option>
					<?php  
					$BrQuery="SELECT * FROM Brand";
					$Br_ret=mysqli_query($connection,$BrQuery);
					$Br_count=mysqli_num_rows($Br_ret);

					for($i=0;$i<$Br_count;$i++) 
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
			<td>Product Type Identification</td>
			<td>
				<select name="cboProductTypeID">
					<option>Choose Product Type ID</option>
					<?php  
					$PtQuery="SELECT * FROM ProductType";
					$Pt_ret=mysqli_query($connection,$PtQuery);
					$Pt_count=mysqli_num_rows($Pt_ret);

					for($i=0;$i<$Pt_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Ro_ret);
						$ProductTypeID=$arr['ProductTypeID'];
						$ProductType=$arr['ProductType'];
						echo "<option value='$ProductTypeID'>$ProductTypeID ~ $ProductType</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Brand Name</td>
			<td>
				<select name="cboBrandName">
					<option>Choose Brand Name</option>
					<?php  
					$BrnQuery="SELECT * FROM Brand";
					$Brn_ret=mysqli_query($connection,$BrnQuery);
					$Brn_count=mysqli_num_rows($Brn_ret);

					for($i=0;$i<$Brn_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Brn_ret);
						$BrandID=$arr['BrandID'];
						$BrandName=$arr['BrandName'];
						echo "<option value='$BrandName'>$BrandID ~ $BrandName</option>";
					}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Product Type</td>
			<td>
				<select name="cboProductType">
					<option>Choose Product Type</option>
					<?php  
					$PtyQuery="SELECT * FROM ProductType";
					$Pty_ret=mysqli_query($connection,$PtyQuery);
					$Pty_count=mysqli_num_rows($Pty_ret);

					for($i=0;$i<$Pty_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Pty_ret);
						$ProductTypeID=$arr['ProductTypeID'];
						$ProductType=$arr['ProductType'];
						echo "<option value='$ProductType'>$ProductTypeID ~ $ProductType</option>";
					}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Quantity</td>
			<td>
				<input type="text" name="txtquantity" required/>
			</td>
		</tr>

		<tr>
			<td>Quality</td>
			<td>
				<select name="cboQuality">
					<option>Choose Quality</option>
					<option>Good</option>
					<option>Average</option>
					<option>Very Good</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Durability</td>
			<td>
				<input type="text" name="txtdurability" required/>
			</td>
		</tr>

		<tr>
			<td>Expiry Date</td>
			<td>
				<input type="text" name="txtExpiry" required/>
			</td>
		</tr>

		<tr>
			<td>First Order Date</td>
			<td>
				<input type="text" name="txtfirstorder" required/>
			</td>
		</tr>		<td>
			<input type="submit" name="btnUpdate" value="Update">
			<input type="reset" name="btnCancel" value="Cancel">
		</td>
	</tr>                                                                                                                                                                          
</table>
<legend align="center">Product Update</legend>
		</fieldset>
</form>
</body>
</html>