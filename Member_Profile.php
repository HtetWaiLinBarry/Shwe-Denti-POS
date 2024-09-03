<?php 
include('connect.php');
include('mheader.php');
 ?>
 		<?php 
 		if(isset($_REQUEST['mid']))
 		{
 		$MemberID=$_REQUEST['mid'];
 		$select=mysqli_query($connection,"SELECT * FROM LabMember WHERE MemberID='$MemberID'");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$mid=$data['MemberID'];
 			$uname=$data['User_Name'];
 			$fname=$data['First_Name'];
 			$lname=$data['Last_Name'];
 			$email=$data['Email'];
 			$qua=$data['Qualification'];
 			$phno=$data['Phone_No'];
 			$add=$data['Address'];
 			$labid=$data['Lab_ID'];
 			$ccode=$data['City_Code'];
 			$llocation=$data['Lab_Location'];
 		}
 	}
 		 ?>
 	<form>
 		 <table width=40% align="center">
 		<tr>
 			<td>Member ID</td>
 			<?php echo "<td>$mid</td>" ?>
 		</tr>
 		<tr>
 			<td>User Name</td>
 			<?php echo "<td>$uname</td>"; ?>
 		</tr>
 		<tr>
 			<td>Full Name</td>
 			<?php echo "<td>$fname $lname</td>"; ?>
 		</tr>
 		<tr>
 			<td>Email</td>
 			<?php echo "<td>$email</td>"; ?>
 			
 		</tr>
 		<tr>
 			<td>Qualification</td>
 			<?php echo "<td>$qua</td>"; ?>
 			
 		</tr>
 		<tr>
 			<td>Phone Number</td>
 			<?php echo "<td>$phno</td>"; ?>
 			
 		</tr>	
 		<tr>
 			<td>Address</td>
 			<?php echo "<td>$add</td>"; ?>
 		</tr>
 		<tr>
 			<td>Laboratory ID</td>
 			<?php echo "<td>$labid</td>"; ?>
 		</tr>
 		<tr>
 			<td>City Code</td>
 			<?php echo "<td>$ccode</td>"; ?>
 		</tr>
 		<tr>
 			<td>Laboratory Location</td>
 			<?php echo "<td>$llocation</td>"; ?>
 		</tr>

 	</table>
 </form>

 <?php include ('footer.php'); ?>
