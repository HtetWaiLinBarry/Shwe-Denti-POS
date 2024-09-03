<?php 
	include('connect.php');

if(isset($_REQUEST['did']))
{
	if(isset($_REQUEST['oid']))
	{
	$did=$_REQUEST['did'];
	$oid=$_REQUEST['oid'];

	$update=mysqli_query($connection,"UPDATE LabDoctorOrder SET Status='Confirmed' WHERE DoctorID='$did' AND LabOrderID='$oid'");
	if($update)
	{
		echo "<script>alert('Your order has been confirmed. Going back to Menu Menu . . .')</script>";
		echo "<script>location='Doctor_Home.php'</script>";
	}
	else
	{
		echo mysqli_error($connection);
	}
}
}




 ?>