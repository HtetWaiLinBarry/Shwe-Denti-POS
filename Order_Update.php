<?php 
	include('connect.php');

if(isset($_REQUEST['oid']))
{
	$oid=$_REQUEST['oid'];
	$pid=$_POST['cbopid'];
	$mid=$_POST['cbomid'];
	$brand=$_POST['cbobrand'];
	$ptype=$_POST['cboptype'];
	$uname=$_POST['txtuname'];
	$lid=$_POST['txtlid'];
	$email=$_POST['txtemail'];

	$update=mysqli_query($connection,"UPDATE AcceptOrder SET ProductID='$pid' WHERE OrderID='$oid'");
	if($update)
	{
		echo "<script>alert('Your order has been confirmed. Going back to Menu Menu . . .')</script>";
		echo "<script>location='Doctor_Home'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}

 ?>

 <html>
<head>
	<title>Order Update</title>
</head>
<body>
<form action="Order_Update.php" method="post">
			<fieldset>
	<table width="70%" align="center">
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
						$BrandName=$arr['BrandName'];
						$ProductType=$arr['ProductType'];
						echo "<option value='$ProductID'>$ProductID ~ $BrandName ~ $ProductType</option>";
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
						$First_Name=$arr['First_Name'];
						$Last_Name=$arr['Last_Name'];
						echo "<option value='$MemberID'>$MemberID ~ $First_Name ~ $Last_Name</option>";
					}
					?>
				</select>
	    	</td>
	    </tr>
	    <tr>
	    	<td>Brand ID</td>
	    	<td>
	    		<select name="cbobrand">
					<option>Choose Brand</option>
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
	    		<input type="text" name="txtlid" required/>
	    	</td>
	    </tr>
	    <tr>
	    	<td>Email</td>
	    	<td>
	    		<input type="text" name="txtemail" required/>
	    	</td>
	    </tr>                                                                                                                                                      
</table>
<legend align="center">Order Update</legend>
		</fieldset>
</form>
</body>
</html>