<?php
 require 'connect.php';
 $id=$_GET['delete'];
 $del=mysqli_query($connect,"DELETE FROM stock_out WHERE id='$id'");

 if ($del) {
 	// code...
 	echo "<script>alert('imported data is deleted')</script>";
	header("location:stock_out.php");
 }
 else{
 	echo "<script>alert('imported data is not daleted')</script>";
	header("location:stock_out.php");
 }
?>