<?php 

include('connect.php');
include('mheader.php');
if(isset($_REQUEST['mid']))
    {
    $mid=$_REQUEST['mid'];
    }
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Doctor ID</th>
 			<th>Privilege</th>
 			<th>User Name</th>
 			<th>Qualification</th>
 			<th>First Name</th>
 			<th>Last Name</th>
 			<th>Email</th>
 			<th>Address</th>
 			<th>Phone Number</th>
 			<th>Medical ID</th>
 			<th>Clinic Location</th>
 			<th>City Code</th>
 			<th>Lab Location</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Doctor");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$did=$data['DoctorID'];
 			$pri=$data['Privilege'];
 			$username=$data['User_Name'];
 			$qualification=$data['Qualification'];
 			$fname=$data['FirstName'];
 			$lname=$data['LastName'];
 			$email=$data['Email'];
 			$add=$data['Address'];
 			$phnum=$data['Phone_No'];
 			$mid=$data['Medical_ID'];
 			$clocation=$data['Clinic_Location'];
 			$citycode=$data['City_Code'];
 			$labloca=$data['Lab_Location'];
 			echo "<tr>";
 			echo "<td>$did</td>";
 			echo "<td>$pri</td>";
 			echo "<td>$username</td>";
 			echo "<td>$qualification</td>";
 			echo "<td>$fname</td>";
 			echo "<td>$lname</td>";
 			echo "<td>$email</td>";
 			echo "<td>$add</td>";
 			echo "<td>$phnum</td>";
 			echo "<td>$mid</td>";
 			echo "<td>$clocation</td>";
 			echo "<td>$citycode</td>";
 			echo "<td>$labloca</td>";
 			echo "<td>
 			<a href='Doctor_Update.php?did=$did'>Update</a> /
 			<a href='Doctor_Delete.php?did=$did'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
