<?php
 require 'header.php';
 require 'connect.php';
 $id=$_GET['export'];
 $sel=mysqli_query($connect,"SELECT * FROM stock_in WHERE id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exportproduct</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<style type="text/css">
		form{
			background-color: darkseagreen;
			border-radius: 4px;
			margin-top: -37em;
			margin-left: 20em;
			
		}
		table{
			margin-left:5em;
			width:25em;
			margin-top:2em;
		}
		input[type]{
			margin-left:em;
	         height:2em;
			width:35em;
		}
		input[type=submit]{
			  border-radius:5px;
			  margin-left:7em;
			  background-color:rgb(97, 233, 97);
			  width:35em;
			  height:2.45em;
		}
		h5{
			text-align: center;
			font-size: 1.25em;
			text-decoration: underline;

		}
	</style>
</head>
<body>
      <form method="POST">
      	<?php 
           while ($data=mysqli_fetch_assoc($sel)) {
           	// code...

          
      	 ?>
      	<h5> EXPORT PRODUCT</h5>
      	 <table>
      	 	<tr>
      	 		<td>id</td>
      	 		<td> <input type="id" class="form-control"name="id" required="" value="<?php echo $data['id'];?>" readonly></td>
      	 	</tr>
      	 	<tr>
      	 		<td>product_name</td>
      	 		<td> <input type="name" class="form-control"name="product_name" required="" value="<?php echo $data['product_name'];?>" readonly></td>
      	 	</tr>
      	 	
      	 	<tr>
      	 		<td>quantity</td>
      	 		<td> <input type="number" class="form-control" name="quantity" required="" value="<?php echo $data['quantity']; ?>" readonly>

                   <?php
                     }
                   ?>
      	 		</td>
      	 	</tr>
      	 	<tr>
      	 		<td>ex_quantity</td>
      	 		<td> <input type="number" class="form-control" name="ex_quantity" required="" ></td>
      	 	</tr>
      	 	<tr>
      	 		<td>date</td>
      	 		<td> <input type="date" class="form-control" name="date" required=""></td>
      	 	</tr>
      	 	<tr>
      	 		<td colspan="5" align="center"> <input type="submit" class="btn btn-success" name="send" value="send"></td>
      	 	</tr>
      	 </table>
      </form>
</body>
</html>
<?php
require 'connect.php';
if (isset($_POST['send'])) {
	// code...

$id=$_POST['id'];
$name=$_POST['product_name'];
$date=$_POST['date'];
$quantity=$_POST['quantity'];
$ex_quantity=$_POST['ex_quantity'];
$total=$quantity - $ex_quantity;

if ($ex_quantity>$quantity) {
	// code...
	echo "<script>alert('please check your balance'), location.href='exportstok_in.php'</script>";
}else{
	$insert=mysqli_query($connect, "INSERT INTO stock_out(`id`, `product_name`, `date`, `quantity`, `ex_quantity`) VALUES ('','$name','$date','$quantity','$ex_quantity')");



	$total=$quantity-$ex_quantity;
	$update=mysqli_query($connect, "UPDATE stock_in SET quantiy=quantity-'$total' WHERE id='$id'");
	$del=mysqli_query($connect, "DELETE FROM stock_in WHERE quantity=0");

  if ($insert) {
  	// code...
  	echo "<script>alert('data is exported')</script>";
	 header("location:stock_out.php");
  }
  else{
  	echo "<script>alert('exported data failed')</script>";
	header ("location:stock_in.php");
  }
}
}

?> 
