<?php 

include('connect.php');
include('mheader.php');

 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Brand ID</th>
 			<th>Brand Name</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Brand");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$bid=$data['BrandID'];
 			$bname=$data['BrandName'];
 			echo "<tr>";
 			echo "<td>$bid</td>";
 			echo "<td>$bname</td>";
 			echo "<td>
 			<a href='Brand_Update.php?bid=$bid'>Update</a> /
 			<a href='Brand_Delete.php?bid=$bid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
