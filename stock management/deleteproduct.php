<?php
 require 'connect.php';
 $id=$_GET['delete'];
 $del=mysqli_query($connect,"DELETE FROM product WHERE id='$id'");

 if ($del) {
 	// code...
 	echo "<script>alert('data is deleted')</script>";
	header("location:viewproduct.php");
 }
 else{
 	echo "<script>alert('data is not daleted')</script>";
	header("location:viewproduct.php");
 }
?>