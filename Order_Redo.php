<?php 
include('connect.php');

if(isset($_REQUEST['did']))
{
	if(isset($_REQUEST['oid']))
	{
	$OrderID=$_REQUEST['oid'];
	$DoctorID=$_REQUEST['did'];
	$delete="DELETE From LabDoctorOrder WHERE LabOrderID='$OrderID' AND DoctorID='$DoctorID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
		{
		echo "<script>alert('Your order has been undone. Going back to Order Menu . . . ')</script>";
		echo "<script>location='Doctor_Order.php'</script>";
		}
	}
}
 ?>