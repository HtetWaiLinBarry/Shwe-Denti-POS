<?php 

include('connect.php');

 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Order ID</th>
 			<th>Lab Order ID</th>
 			<th>Product ID</th>
 			<th>Member ID</th>
 			<th>Product Details</th>
 			<th>Brand Name</th>
 			<th>User Name</th>
 			<th>Laboratory ID</th>
 			<th>Email</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM AcceptOrder");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$oid=$data['OrderID'];
 			$loid=$data['LabOrderID'];
 			$pid=$data['ProductID'];
 			$mid=$data['MemberID'];
 			$ptype=$data['Product_Type'];
 			$bname=$data['Brand'];
 			$uname=$data['User_Name'];
 			$lid=$data['Lab_ID'];
 			$email=$data['Email'];
 			echo "<tr>";
 			echo "<td>$oid</td>";
 			echo "<td>$loid</td>";
 			echo "<td>$pid</td>";
 			echo "<td>$mid</td>";
 			echo "<td>$ptype</td>";
 			echo "<td>$bname</td>";
 			echo "<td>$uname</td>";
 			echo "<td>$lid</td>";
 			echo "<td>$email</td>";
 			echo "<td>
 			<a href='Order_Update.php?oid=$oid'>Update</a>
 			</td>";
 			echo "</tr>";
 		}


 		 ?>
 	</table>
 </form>
