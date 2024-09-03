<?php 
include('connect.php');

if (isset($_POST['btnregister']))
{
	$mid=$_POST['txtmid'];
	$oid=$_POST['txtoid'];
	$fname=$_POST['txtfname'];
	$lname=$_POST['txtlname'];
	$email=$_POST['txtemail'];
	$order1=$_POST['txtorder1'];
	$order2=$_POST['txtorder2'];
	$order3=$_POST['txtorder3'];
	$sdate=$_POST['txtsdate'];
	$fdate=$_POST['txtfdate'];
	$nod=$_POST['txtnod'];
	
	$select="SELECT count(LabDeliveryID) from LabDelivery where MemberID='$mid'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{

		$insert="INSERT INTO LabDelivery(MemberID,LabOrderID,FirstName,LastName,Email,Order1,Order2,Order3,Start_Date,Finish_Date,NumOfDev,Status)
			 	 values('$mid','$oid','$fname','$lname','$email','$order1','$order2','$order3','$sdate','$fdate','$nod','On Hold')";

		$ret1=mysqli_query($connection,$insert);
		$row = mysqli_fetch_array($ret);

		if ($ret1) 
		{
			
			
			echo "<script> alert('Delivery Data has been SUCCESSFULLY Registered!') </script>";
			echo "<script>location='Delivery_Preview.php'</script>";
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
	<title>Laboratory Registration</title>
</head>
<body>


<form action="Laboratory_Register.php" method="POST">
	<table align=left>

		<H1>Laboratory Registration</H1>
		<tr>
			<td>Laboratory Location</td>
			<td><input type="text" name="txtlocation" placeholder="Enter Laboratory Location"></td>
		</tr>
		<tr>
			<td>Laboratory Title</td>
			<td><input type="text" name="txttitle" placeholder="Enter Laboratory Title"></td>
		</tr>
		<tr>
			<td>Number Of Members</td>
			<td><input type="text" name="txtnumofmem" placeholder="Enter Number of Members"></td>
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