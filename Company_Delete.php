<?php 
include('connect.php');

if(isset($_REQUEST['cid']))
{
	$CompanyID=$_REQUEST['cid'];
	$delete="DELETE From Company WHERE CompanyID='$CompanyID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Company has been successfully Deleted')</script>";
	echo "<script>location='Company_View.php'</script>";
}
}
 ?>