<?php 
include('connect.php');
include('mheader.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Product ID</th>
 			<th>Brand ID</th>
 			<th>Product Type ID</th>
 			<th>Brand Name</th>
 			<th>Product Type</th>
 			<th>Quantity</th>
 			<th>Quality</th>
 			<th>Durability</th>
 			<th>Expiry Date</th>
 			<th>First Order Date</th>
 			<th>Functions</th>
 		</tr>
 		<?php 
 		$select=mysqli_query($connection,"SELECT * FROM Product");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$pid=$data['ProductID'];
 			$bid=$data['BrandID'];
 			$ptid=$data['ProductTypeID'];
 			$bname=$data['BrandName'];
 			$pttype=$data['ProductType'];
 			$quantity=$data['Quantity'];
 			$quality=$data['Quality'];
 			$durability=$data['Durability'];
 			$expiry=$data['Expiry_Date'];
 			$firstorder=$data['FirstOrderDate'];
 			echo "<tr>";
 			echo "<td>$pid</td>";
 			echo "<td>$bid</td>";
 			echo "<td>$ptid</td>";
 			echo "<td>$bname</td>";
 			echo "<td>$pttype</td>";
 			echo "<td>$quantity</td>";
 			echo "<td>$quality</td>";
 			echo "<td>$durability</td>";
 			echo "<td>$expiry</td>";
 			echo "<td>$firstorder</td>";
 			echo "<td>
 			<a href='Product_Update.php?pid=$pid'>Update</a> /
 			<a href='Product_Delete.php?pid=$pid'>Delete</a>
 			</td>";
 			echo "</tr>";
 		}
 		 ?>
 	</table>
 </form>
