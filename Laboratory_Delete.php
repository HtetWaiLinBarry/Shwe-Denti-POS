<?php 
include('connect.php');

if(isset($_REQUEST['lid']))
{
	$LaboratoryID=$_REQUEST['lid'];
	$delete="DELETE From Laboratory WHERE LaboratoryID='$LaboratoryID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Laboratory has been successfully Deleted')</script>";
	echo "<script>location='Laboratory_View.php'</script>";
}
}
 ?>