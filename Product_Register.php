<?php 
include('connect.php');
include('mheader.php');

if (isset($_POST['btnregister']))
{
	$BrandID=$_POST['cboBrandID'];
	$ProductTypeID=$_POST['cboProductTypeID'];
	$BrandName=$_POST['cboBrandName'];
	$ProductType=$_POST['cboProductType'];
	$Quantity=$_POST['txtquantity'];
	$Quality=$_POST['cboQuality'];
	$Durability=$_POST['txtdurability'];
	$Expiry_Date=$_POST['txtExpiry'];
	$FirstOrderDate=$_POST['txtfirstorder'];
	
	$select="SELECT count(ProductID) from Product where Durability='$Durability'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO Product(BrandID,ProductTypeID,BrandName,ProductType,Quantity,Quality,Durability,Expiry_Date,FirstOrderDate)
			 	 values('$BrandID','$ProductTypeID','$BrandName','$ProductType','$Quantity','$Quality','$Durability','$Expiry_Date','$FirstOrderDate')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Product Data has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='Product_View.php'</script>";
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
	<title>Product Registration</title>
</head>
<body>


<form action="Product_Register.php" method="POST">
	<table align=left>

		<H1>Product Registration</H1>
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
						$arr=mysqli_fetch_array($Br_ret);
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
						$arr=mysqli_fetch_array($Pt_ret);
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