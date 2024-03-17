<?php
 require 'header.php';
 require 'connect.php';

 $sel= mysqli_query($connect, "SELECT * FROM stock_out");

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
		width:57em;

	}
</style>
  <table border="4">
  	 <tr>
  	 	<th>id</th>
  	 	<th>product_name</th>
  	 	<th>date</th>
  	 	<th>quantity</th>
  	 	<th colspan="1">Action</th>
  	 </tr>
  	 <?php
     while ($data= mysqli_fetch_assoc($sel)) {
       	// code...   
  	 ?>
  	 <tr>
  	   <td> <?php echo $data['id'];?></td>
  	   <td> <?php echo $data['product_name'];?></td>
  	   <td> <?php echo $data['date'];?></td>
  	   <td> <?php echo $data['quantity'];?></td>

  	    <td> <a href="deletestock_out.php?delete=<?php echo $data['id'];?>">delete</a></td>
  	   </tr>
     <?php
      }
   ?></table>