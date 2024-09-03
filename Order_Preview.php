<?php 

include('connect.php');
include('header.php');
 ?>
 <form>
 	<table border="1" width=100% align="center">
 		<tr>
 			<th>Order ID</th>
 			<th>Doctor ID</th>
 			<th>Product ID</th>
 			<th>Full Name</th>
 			<th>Product Details</th>
 			<th>Brand Name</th>
 			<th>First Order</th>
 			<th>Second Order</th>
 			<th>Third Order</th>
 			<th>First Image</th>
 			<th>Second Image</th>
 			<th>Third Image</th>
 			<th>Status</th>
 			<th>Functions</th>
 		</tr>
 		<?php
 		if(isset($_REQUEST['did']))
 		{
 		$DoctorID=$_REQUEST['did'];
 		$select=mysqli_query($connection,"SELECT * FROM LabDoctorOrder WHERE DoctorID='$DoctorID'");
 		$count=mysqli_num_rows($select);
 		for($i=0; $i < $count; $i++) {
 			$data=mysqli_fetch_array($select);
 			$oid=$data['LabOrderID'];
 			$did=$data['DoctorID'];
 			$pid=$data['ProductID'];
 			$fname=$data['FirstName'];
 			$lname=$data['LastName'];
 			$pdetail=$data['Product_Type'];
 			$bname=$data['Brand'];
 			$forder=$data['Order1'];
 			$sorder=$data['Order2'];
 			$torder=$data['Order3'];
 			$fimage=$data['Image1'];
 			$simage=$data['Image2'];
 			$timage=$data['Image3'];
 			$status=$data['Status'];
 			echo "<tr>";
 			echo "<td>$oid</td>";
 			echo "<td>$did</td>";
 			echo "<td>$pid</td>";
 			echo "<td>$fname $lname</td>";
 			echo "<td>$pdetail</td>";
 			echo "<td>$bname</td>";
 			echo "<td>$forder</td>";
 			echo "<td>$sorder</td>";
 			echo "<td>$torder</td>";
 			echo "<td>$fimage</td>";
 			echo "<td>$simage</td>";
 			echo "<td>$timage</td>";
 			echo "<td>$status</td>";
 			echo "<td>
 			<a href='Order_Confirm.php?did=$did&oid=$oid'>Confirm</a>
 			<a href='Order_Redo.php?did=$did&oid=$oid'>Redo</a>
 			</td>";
 			echo "</tr>";
 		}
 	}


 		 ?>
 	</table>
 </form>
