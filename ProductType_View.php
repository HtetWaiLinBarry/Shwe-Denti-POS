<?php 

include('connect.php');
include('mheader.php');

 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Product Type ID</th>
 			<th>Product Type</th>

 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM ProductType");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$ptid=$data['ProductTypeID'];
 			$ptype=$data['ProductType'];
 			echo "<tr>";
 			echo "<td>$ptid</td>";
 			echo "<td>$ptype</td>";
 			echo "<td>
 			<a href='ProductType_Update.php?ptid=$ptid'>Update</a> /
 			<a href='ProductType_Delete.php?ptid=$ptid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
