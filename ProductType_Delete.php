<?php 
include('connect.php');

if(isset($_REQUEST['ptid']))
{
	$ProductTypeID=$_REQUEST['ptid'];
	$delete="DELETE From ProductType WHERE ProductTypeID='$ProductTypeID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Product Type has been successfully Deleted')</script>";
	echo "<script>location='ProductType_View.php'</script>";
}
}
 ?>