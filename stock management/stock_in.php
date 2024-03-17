<?php
 require 'header.php';
 require 'connect.php';
 $sel=mysqli_query($connect, "SELECT * FROM stock_in");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<style type="text/css">
	table{
		background-color: darkseagreen;
		margin-top:-36em;
		margin-left:20em;
		width:55em;

	}
</style>
<table border="4">
	<tr>
		<th>id</th>
		<th>product_name</th>
		<th>date</th>
		<th>quantity</th>
		<th>unit_price</th>
		<th>total_price</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
      while ($data=mysqli_fetch_assoc($sel)) {
      	// code...
      
 	?>
 	 <tr>
 	 	<td> <?php echo $data['id']; ?></td>
 	 	<td> <?php echo $data['product_name']; ?></td>
 	 	<td> <?php echo $data['date']; ?></td>
 	 	<td> <?php echo $data['quantity']; ?></td>
 	 	<td> <?php echo $data['unit_price']; ?></td>
 	 	<td> <?php echo $data['total_price']; ?></td>
 	 	

 	 	<td> <a href="exportproduct.php?export=<?php echo $data['id']; ?>">export</a></td>
 	 	<td> <a href="deletestock_in.php?delete=<?php echo $data['id']; ?>">delete </a></td>
 	 </tr>
 	<?php

       }
 	?></table>
