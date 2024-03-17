<?php
 require 'header.php';
 require 'connect.php';
 $sdate=$_POST['sdate'];
 $edate=$_POST['edate'];
 $sel=mysqli_query($connect,"SELECT * FROM stock_in WHERE date BETWEEN '$sdate' AND '$edate'");
?>

 <table border="5">
 	<tr>
 		<td colspan="4" align="center"> stock_in REPORT</td>
 	</tr>
 	<tr>
 		<th>id</th>
 		<th>product_name</th>
 		<th>date</th>
 		<th>quantity</th>
 		<th>unit_price</th>
 		<th>total_price</th>
 	</tr>
 	<?php
      while ($data=mysqli_fetch_array($sel)) {
      	// code...
      
 	?>
 	 <tr>
 	 	<td> <?php echo $data['id'];?></td>
 	 	<td> <?php echo $data['product_name'];?></td>
 	 	<td> <?php echo $data['date'];?></td>
 	 	<td> <?php echo $data['quantity'];?></td>
 	 	<td> <?php echo $data['unit_price'];?></td>
 	 	<td> <?php echo $data['total_price'];?></td>
 	 </tr>
 	<?php
     }
 	?></table>
 	<?php
     require 'connect.php';
     $sdate=$_POST['sdate'];
     $edate=$_POST['edate'];
     $sel=mysqli_query($connect,"SELECT * FROM stock_out WHERE date BETWEEN '$sdate' AND '$edate'");
 	?>
 	<style type="text/css">
     table{
		background-color: darkseagreen;
		padding:1,25em;
		margin-top: -20em;
		margin-left: 30em;

	}
	<th{
		color: black;
		background-color:darkcyan;
	}
 	</style>

 	<table border="5">
 	<tr>
 		<td colspan="4" align="center"> stock_out REPORT</td>
 	</tr>
 	<tr>
 		<th>id</th>
 		<th>product_name</th>
 		<th>date</th>
 		<th>quantity</th>
 		<th>ex_quantity</th>
 	</tr>
 	<?php
      while ($data=mysqli_fetch_array($sel)) {
      	// code...
      
 	?>
 	 <tr>
 	 	<td> <?php echo $data['id'];?></td>
 	 	<td> <?php echo $data['product_name'];?></td>
 	 	<td> <?php echo $data['date'];?></td>
 	 	<td> <?php echo $data['quantity'];?></td>
 	 	<td> <?php echo $data['ex_quantity'];?></td>
 	 </tr>
 	<?php
     }
 	?></table>

 