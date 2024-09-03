<?php 
include('connect.php');

if(isset($_REQUEST['did']))
{
	$DoctorID=$_REQUEST['did'];
	$delete="DELETE From Doctor WHERE DoctorID='$DoctorID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Doctor has been successfully Deleted')</script>";
	echo "<script>location='Doctor_View.php'</script>";
}
}
 ?>