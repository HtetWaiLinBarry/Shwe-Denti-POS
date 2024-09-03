<?php 

include('connect.php');
include('mheader.php');

 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Member ID</th>
 			<th>User Name</th>
 			<th>First Name</th>
 			<th>Last Name</th>
 			<th>Email</th>
 			<th>Qualification</th>
 			<th>Phone Number</th>
 			<th>Address</th>
 			<th>Password</th>
 			<th>Laboratory ID</th>
 			<th>City Code</th>
 			<th>Laboratory Location</th>
 			<th>Database ID</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM LabMember");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$mid=$data['MemberID'];
 			$uname=$data['User_Name'];
 			$fname=$data['First_Name'];
 			$lname=$data['Last_Name'];
 			$email=$data['Email'];
 			$qua=$data['Qualification'];
 			$phnum=$data['Phone_No'];
 			$add=$data['Address'];
 			$pass=$data['Password'];
 			$lid=$data['Lab_ID'];
 			$citycode=$data['City_Code'];
 			$labloca=$data['Lab_Location'];
 			$dbid=$data['Database_ID'];
 			echo "<tr>";
 			echo "<td>$mid</td>";
 			echo "<td>$uname</td>";
 			echo "<td>$fname</td>";
 			echo "<td>$lname</td>";
 			echo "<td>$email</td>";
 			echo "<td>$qua</td>";
 			echo "<td>$phnum</td>";
 			echo "<td>$add</td>";
 			echo "<td>$pass</td>";
 			echo "<td>$lid</td>";
 			echo "<td>$citycode</td>";
 			echo "<td>$labloca</td>";
 			echo "<td>$dbid</td>";
 			echo "<td>
 			<a href='Member_Update.php?mid=$mid'>Update</a> /
 			<a href='Member_Delete.php?mid=$mid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
