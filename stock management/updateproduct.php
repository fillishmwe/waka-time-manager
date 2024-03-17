<?php
 require 'header.php';
 require 'connect.php';
 
 $id=$_GET['update'];
 $sel= mysqli_query($connect,"SELECT * FROM `product` WHERE id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>updateproduct</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<style type="text/css">
		form{
			background-color:darkseagreen;
			margin-left:20em;
			margin-top:-38em;
			height:13em;
			border-radius:4px;
		}
		input[type=text]{
			margin-left:em;
	         height:2em;
			 width:25em;
		}
		input[type=submit]{
			  border-radius:5px;
			  margin-left:7em;
			  background-color:rgb(97, 233, 97);
			  width:20em;
			  height:2.45em;
		}
		table{
			padding:2em;
			margin-left:5em;
			font-size: 1.25em;

		}
		h3{
			text-align: center;
			margin-bottom:4px;
			text-decoration:underline;
			margin-top: 2.45em;
		}
	</style>
</head>
<body>
     <form method="POST">
     	<?php
         while ($data=mysqli_fetch_assoc($sel)) {
         	// code...
        
     	?>
     	<h3>UPDATE PRODUCT</h3>
     	<table>
     	<tr>
     			<td>product_name</td>
     			<td><input type="text" class="form-control" name="product_name" required="" value="<?php echo $data['product_name'] ?>">

                <?php
                   }
                ?>
     			</td>
     		</tr>
     		<tr>
     			<td colspan="3" align="center">
     				<input type="submit" name="upd" class="btn btn-success"value="update">
     			</td>
     		</tr>
     		</table>
     </form>
</body>
</html>
<?php
 require 'connect.php';
 if (isset($_POST['upd'])) {
 	// code...
 
 $id=$_GET['update'];
 $name=$_POST['product_name'];
 $update= mysqli_query($connect, "UPDATE product SET product_name='$name' WHERE id='$id'");

 if ($update) {
 	// code...
 	echo "<script>alert('data is changed')</script>";
	header("location:viewproduct.php");

 }else{
 	echo "<script>alert('data is not changed')/script>";
	header("location:viewproduct.php");

 }
 }
?>