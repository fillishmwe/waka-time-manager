<?php
 require 'header.php';
 require 'connect.php';
 
  /*session_start();
if(!isset($_SESSION['user'])){
	$_SESSION['user']=$user;
	$_SESSION['pass']=$pass;

	echo "<script>alert('go to login'),location.href='index.php'</script>";
} else{
	echo"<script>alert('you are fail'), location.href='product.php'</script>";
}
*/ 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>product</title>

	<style type="text/css">
		form{
			background-color:darkseagreen;
			margin-left: 20em;
			margin-top: -38em;
			border-radius: 4px;
			height:10em;
			
			
			margin-left: 22em;
		}
		input[type=text]{
			margin-left:em;
	         height:2em;
			width:30em;
		}
		input[type=submit]{
			  border-radius:5px;
			  margin-left:7em;
			  background-color:rgb(97, 233, 97);
			  width:30em;
			  height:2.45em;
		}
		table{
			margin-left:5em;
			padding:1em;

		}
		h2{
			text-align: center;
			text-decoration: underline;
			margin-top:2em;
		}
	</style>
</head>
<body>
     <form method="POST">
     	  <h2> ADD NEW PRODUCT</h2>
     	<table class="table-borderd">    
     		<tr>
     			<td>product_name</td>
     			<td><input type="text" class="form-control" name="product_name" required></td>
     		</tr>
     		<tr>
     			<td colspan="5" align="center">
     				<input type="submit" class="btn btn-success" name="send" value="Add New">
     			</td>
     		</tr>
     	</table>
     </form>
</body>
</html>
 <?php
 require 'connect.php';

 if(isset($_POST['send'])){
	
 $product=$_POST['product_name'];
 $insert= mysqli_query($connect, "INSERT INTO `product`(`id`, `product_name`) VALUES ('','$product')");
 
  if ($insert) {
  	// code...
  	echo "<script>alert('data is inserted')</script>";
	header("location:viewproduct.php");
  }
  else{
  	echo"<script>alert('inserted data is failed')</script>";
	header("location:product.php");
  }

  }
   

?>