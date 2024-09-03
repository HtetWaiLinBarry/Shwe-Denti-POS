<?php 
include('connect.php');

if(isset($_REQUEST['bid']))
{
	$BrandID=$_REQUEST['bid'];
	$delete="DELETE From Brand WHERE BrandID='$BrandID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Brand has been successfully Deleted')</script>";
	echo "<script>location='Brand_View.php'</script>";
}
}
 ?>