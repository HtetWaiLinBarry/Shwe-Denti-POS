<?php 
include('connect.php');

if(isset($_REQUEST['mid']))
{
	$MemberID=$_REQUEST['mid'];
	$delete="DELETE From LabMember WHERE MemberID='$MemberID'";
	$runquery=mysqli_query($connection,$delete);
	if($runquery)
{
	echo "<script>alert('Member has been successfully Deleted')</script>";
	echo "<script>location='Member_View.php'</script>";
}
}
 ?>