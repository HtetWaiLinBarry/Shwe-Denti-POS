<?php 
include('connect.php');
include('header.php');

if (isset($_POST['btnregister']))
{
	if(isset($_REQUEST['doid']))
	{
		$doctorid=$_REQUEST['doid'];
		$productid=$_POST['cbopid'];
		$brandid=$_POST['cbobid'];
		$brand=$_POST['cbobrand'];
		$ptype=$_POST['cboptype'];
		$uname=$_POST['txtuname'];
		$fname=$_POST['txtfname'];
		$lname=$_POST['txtlname'];
		$o1=$_POST['txto1'];
		$o2=$_POST['txto2'];
		$o3=$_POST['txto3'];
		$i1=$_POST['txti1'];
		$i2=$_POST['txti2'];
		$i3=$_POST['txti3'];
		$ddate=$_POST['txtdate'];
		$noo=$_POST['txtnoo'];


	
	$select="SELECT count(LabOrderID) from LabDoctorOrder where Brand='$brand'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO LabDoctorOrder(DoctorID,ProductID,BrandID,Brand,Product_Type,User_Name,FirstName,LastName,Order1,Order2,Order3,Image1,Image2,Image3,Due_Date,NumOfOrders,Status) values ('$doctorid','$productid','$brandid','$brand','$ptype','$uname','$fname','$lname','$o1','$o2','$o3','$i1','$i2','$i3','$ddate','$noo','On Hold')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{	
			echo "<script> alert('Your Order has been made. Please Check Your Order Information.') </script>";
			echo "<script>location='Order_Preview.php'</script>";
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
}

 ?>

<html>
<head>
	<title>Order</title>
</head>
<body id="body">


<form action="Doctor_Order.php" method="POST">
	<table align=left>

		<H1>Order</H1>
		<tr>
			<td>Product ID</td>
			<td>
			<select name="cbopid">
					<option>Product ID</option>
					<?php  
					$PQuery="SELECT * FROM Product";
					$P_ret=mysqli_query($connection,$PQuery);
					$P_count=mysqli_num_rows($P_ret);

					for($i=0;$i<$P_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($P_ret);
						$ProductID=$arr['ProductID'];
						$ProductType=$arr['ProductType'];
						echo "<option value='$ProductID'>$ProductID ~ $ProductType</option>";
					}
					?>
			</select>
			</td>
		</tr>
		<tr>
			<td>Brand ID</td>
			<td>
				<select name="cbobid">
					<option>Brand ID</option>
					<?php  
					$BQuery="SELECT * FROM Brand";
					$B_ret=mysqli_query($connection,$BQuery);
					$B_count=mysqli_num_rows($B_ret);

					for($i=0;$i<$B_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($B_ret);
						$BrandID=$arr['BrandID'];
						$BrandName=$arr['BrandName'];
						echo "<option value='$BrandID'>$BrandID ~ $BrandName</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Brand</td>
			<td>
				<select name="cbobrand">
					<option>Choose Brand</option>
					<?php  
					$BrQuery="SELECT * FROM Brand";
					$Br_ret=mysqli_query($connection,$BrQuery);
					$Br_count=mysqli_num_rows($Br_ret);

					for($i=0;$i<$Br_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Br_ret);
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
				<select name="cboptype">
					<option>Choose Product Type</option>
					<?php  
					$PtQuery="SELECT * FROM ProductType";
					$Pt_ret=mysqli_query($connection,$PtQuery);
					$Pt_count=mysqli_num_rows($Pt_ret);

					for($i=0;$i<$Pt_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Pt_ret);
						$ProductTypeID=$arr['ProductTypeID'];
						$ProductType=$arr['ProductType'];
						echo "<option value='$ProductType'>$ProductTypeID ~ $ProductType</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td>
				<input type="text" name="txtuname" required/>
			</td>
		</tr>
		<tr>
			<td>First Name</td>
			<td>
				<input type="text" name="txtfname" required/>
			</td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td>
				<input type="text" name="txtlname" required/>
			</td>
		</tr>
		<tr>
			<td>First Order (STL Only)</td>
			<td>
				<input type="file" name="txto1" required/>
			</td>
		</tr>
		<tr>
			<td>Second Order (STL Only)</td>
			<td>
				<input type="file" name="txto2" required/>
			</td>
		</tr>
		<tr>
			<td>Third Order (STL Only)</td>
			<td>
				<input type="file" name="txto3" required/>
			</td>
		</tr>
		<tr>
			<td>First Image</td>
			<td>
				<input type="file" name="txti1" required/>
			</td>
		</tr>
		<tr>
			<td>Second Image</td>
			<td>
				<input type="file" name="txti2" required/>
			</td>
		</tr>
		<tr>
			<td>Third Image</td>
			<td>
				<input type="file" name="txti3" required/>
			</td>
		</tr>
		<tr>
			<td>Due Date</td>
			<td>
				<input type="date" name="txtdate" required/>
			</td>
		</tr>
		<tr>
			<td>Number Of Orders</td>
			<td>
				<select name="noo">
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnregister" value="Order">
				<input type="reset" name="btncancel" value="Cancel">
			</td>
		</tr>
	</table>

</form>
</body>
</html>
