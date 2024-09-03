<?php 

include('connect.php');
include('mheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Company ID</th>
 			<th>Company Name</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Company");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$cid=$data['CompanyID'];
 			$company=$data['CompanyName'];
 			echo "<tr>";
 			echo "<td>$cid</td>";
 			echo "<td>$company</td>";;
 			echo "<td>
 			<a href='Company_Update.php?cid=$cid'>Update</a> /
 			<a href='Company_Delete.php?cid=$cid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
