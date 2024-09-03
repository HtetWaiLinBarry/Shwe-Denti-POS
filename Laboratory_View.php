<?php 

include('mheader.php');
include('connect.php');

 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<br>
 		<br>
 		<tr>
 			<th>Laboratory ID</th>
 			<th>Laboratory Location</th>
 			<th>Laboratory Title</th>
 			<th>Number of Members</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Laboratory");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$lid=$data['LaboratoryID'];
 			$location=$data['Lab_Location'];
 			$title=$data['Lab_Title'];
 			$numofmem=$data['NumOfMembers'];
 			echo "<tr>";
 			echo "<td>$lid</td>";
 			echo "<td>$location</td>";
 			echo "<td>$title</td>";
 			echo "<td>$numofmem</td>";
 			echo "<td>
 			<a href='Laboratory_Update.php?lid=$lid'>Update</a> /
 			<a href='Laboratory_Delete.php?lid=$lid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
