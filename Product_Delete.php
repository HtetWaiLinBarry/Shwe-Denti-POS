<?php 
include('connect.php');

if(isset($_REQUEST['pid']))
{
	$ProductID=$_REQUEST['pid'];
	$delete="DELETE From Product WHERE ProductID='$ProductID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Product has been successfully Deleted')</script>";
	echo "<script>location='Product_View.php'</script>";
}
}
 ?>