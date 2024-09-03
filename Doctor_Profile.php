<?php 
include('connect.php');
include('header.php');
 ?>
 		<?php 
 		if(isset($_REQUEST['did']))
 		{
 		$DoctorID=$_REQUEST['did'];
 		$select=mysqli_query($connection,"SELECT * FROM Doctor WHERE DoctorID='$DoctorID'");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$did=$data['DoctorID'];
 			$pri=$data['Privilege'];
 			$uname=$data['User_Name'];
 			$fname=$data['FirstName'];
 			$lname=$data['LastName'];
 			$email=$data['Email'];
 			$add=$data['Address'];
 			$phno=$data['Phone_No'];
 			$pass=$data['Password'];
 			$mid=$data['Medical_ID'];
 			$clocation=$data['Clinic_Location'];
 			$ccode=$data['City_Code'];
 			$llocation=$data['Lab_Location'];
 		}
 	}
 		 ?>
 	<form>
 		 <table width=40% align="center">
 		<tr>
 			<td>Doctor ID</td>
 			<?php echo "<td>$did</td>" ?>
 		</tr>
 		<tr>
 			<td>Privilege</td>
 			<?php echo "<td>$pri</td>"; ?>
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
 			<td>Address</td>
 			<?php echo "<td>$add</td>"; ?>
 			
 		</tr>	
 		<tr>
 			<td>Phone Number</td>
 			<?php echo "<td>$phno</td>"; ?>
 		</tr>
 		<tr>
 			<td>Password</td>
 			<?php echo "<td>$pass</td>"; ?>
 		</tr>
 		<tr>
 			<td>Medical ID</td>
			<?php echo "<td>$mid</td>"; ?> 			
 		</tr>
 		<tr>
 			<td>Clinic Location</td>
 			<?php echo "<td>$clocation</td>"; ?>
 		</tr>
 		<tr>
 			<td>City Code</td>
 			<?php echo "<td>$ccode</td>"; ?>
 		</tr>
 		<tr>
 			<td>Laboratory Location</td>
 			<?php echo "<td>$llocation</td>"; ?>
 		</tr>
 		<?php
 		echo "<tr>";
 			echo "<td>View My Orders</td>
 			<td><a href='Order_View.php?did=$did'>View</a></td>";
 		echo "</tr>";
 		?>

 	</table>
 </form>

 <?php include ('footer.php'); ?>
