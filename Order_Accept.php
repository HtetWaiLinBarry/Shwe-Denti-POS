<?php 
include('connect.php');
include('header.php');

if (isset($_POST['btnregister']))
{
	$loid=$_POST['cboloid'];
	$pid=$_POST['cbopid'];
	$mid=$_POST['cbomid'];
	$brand=$_POST['txtbrandname'];
	$ptype=$_POST['cboptype'];
	$uname=$_POST['txtuname'];
	$lid=$_POST['cbolid'];
	$email=$_POST['txtemail'];

	
	$select="SELECT count(OrderID) from AcceptOrder where Brand='$Brand'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO AcceptOrder(LabOrderID,ProductID,MemberID,Brand,Product_Type,User_Name,Lab_ID,Email)
			 	 values('$loid','$pid','$mid','$brand','$ptype','$uname','$lid','$email')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Order has been accepted.') </script>";
			echo "<script>location='Order_Data.php'</script>";
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
</head>
<body>


<form action="Order_Accept.php" method="POST">
	<table align=center>

		<H1 align=center><b>Laboratory Orders</b></H1>
		<tr>
			<td>Order ID</td>
			<td>
				<select name="cboloid">
					<option>Choose Order ID</option>
					<?php  
					$LoQuery="SELECT * FROM LabDoctorOrder";
					$Lo_ret=mysqli_query($connection,$LoQuery);
					$Lo_count=mysqli_num_rows($Lo_ret);

					for($i=0;$i<$Lo_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Lo_ret);
						$LabOrderID=$arr['LabOrderID'];
						$FirstName=$arr['FirstName'];
						$LastName=$arr['LastName'];
						$Due_Date=$arr['Due_Date'];
						$NumOfOrders=$arr['NumOfOrders'];
						$Status=$arr['Status'];
						echo "<option value='$LabOrderID'>$LabOrderID ~ $FirstName $LastName ~ $Due_Date ~ $NumOfOrders ~ $Status</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Product ID</td>
			<td>
				<select name="cbopid">
					<option>Choose Product ID</option>
					<?php  
					$PQuery="SELECT * FROM Product";
					$P_ret=mysqli_query($connection,$PQuery);
					$P_count=mysqli_num_rows($P_ret);

					for($i=0;$i<$P_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($P_ret);
						$ProductID=$arr['ProductID'];
						$ProductType=$arr['ProductType'];
						$Quantity=$arr['Quantity'];
						$Quality=$arr['Quality'];
						$Durability=$arr['Durability'];
						echo "<option value='$ProductID'>$ProductID ~ $ProductType ~ $Quantity ~ $Quality ~ $Durability</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Member ID</td>
			<td>
				<select name="cbomid">
					<option>Choose Member ID</option>
					<?php  
					$MQuery="SELECT * FROM LabMember";
					$M_ret=mysqli_query($connection,$MQuery);
					$M_count=mysqli_num_rows($M_ret);

					for($i=0;$i<$M_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($M_ret);
						$MemberID=$arr['MemberID'];
						$User_Name=$arr['User_Name'];
						$First_Name=$arr['First_Name'];
						$Last_Name=$arr['Last_Name'];
						echo "<option value='$MemberID'>$MemberID ~ $User_Name ~ $First_Name ~ $Last_Name</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Brand Name</td>
			<td><input type="text" name="txtbrandname" placeholder="Enter Brand Name"></td>
		</tr>
		<tr>
			<td>Product Type</td>
			<td>
				<select name="cboptype">
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
			<td>User Name</td>
			<td>
				<input type="text" name="txtuname" required/>
			</td>
		</tr>
		<tr>
			<td>Laboratory ID</td>
			<td>
				<select name="cbolid">
					<option>Choose Laboratory ID</option>
					<?php  
					$LbQuery="SELECT * FROM Laboratory";
					$Lb_ret=mysqli_query($connection,$LbQuery);
					$Lb_count=mysqli_num_rows($Lb_ret);

					for($i=0;$i<$Lb_count;$i++) 
					{ 
						$arr=mysqli_fetch_array($Lb_ret);
						$LaboratoryID=$arr['LaboratoryID'];
						$Lab_Title=$arr['Lab_Title'];
						echo "<option value='$LaboratoryID'>$LaboratoryID ~ $Lab_Title</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="text" name="txtemail" placeholder="Enter Email" required/>
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