<?php
 require 'header.php';
 require 'connect.php';
 /*session_start();
if(!isset($_SESSION['user'])){

 $user_name=$_SESSION['user'];
 $password=$_SESSION['pass'];
   
  echo"<script>alert('go to login'), location.href='index.php'</script>";
 }
 else{
	echo"<script>alert('not found'), location.href='viewproduct.php'</script>";
 }*/

 $sel=mysqli_query($connect, "SELECT * FROM product");
?>
<style type="text/css">
	table{
		background-color:darkseagreen;
		margin-left: 20em;
		width:57em;
		margin-top:-36em;
	}
	th{
		background-color:;
	   color: black;
	}
</style>
 <table border="4">
 	 <tr>
 	 	<th>id</th>
 	 	<th>product_name</th>
 	 	<th colspan="3">Action</th>
 	 </tr>

 	 <?php
      while($data=mysqli_fetch_assoc($sel)) {
      	// code...
      ?>
 	 <tr>
 	 	<td> <?php echo $data['id'];?> </td>
 	 	<td> <?php echo $data['product_name'];?> </td>

 	 	<td> <a href="updateproduct.php?update=<?php echo $data['id']; ?>">update</a></td>
 	 	<td> <a href="deleteproduct.php?delete=<?php echo $data['id']; ?>">delete </a></td>
 	 	<td> <a href="importproduct.php?import=<?php echo $data['id']; ?>">import</a></td>
 	 </tr>
 	 <?php
      }
 	?></table>

 	


 

