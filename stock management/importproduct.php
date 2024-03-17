<?php
   require 'header.php';
   require 'connect.php';
   
    //if (isset($_POST['send'])) {
    	// code...
    
   $id=$_GET['import'];
   $sel= mysqli_query($connect,"SELECT * FROM product WHERE id='$id'");
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>importproduct</title>
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  	<style type="text/css">
  	      form{
			background-color: darkseagreen;
			border-radius: 4px;
			margin-top: -36em;
			margin-left: 20em;
			
		}
		table{
			margin-left: 6em;
			width:25em;
			margin-top:2em;
		}
		input[type]{
			margin-left:2em;
	         height:2em;
			width:35em;
		}
		input[type=submit]{
			  border-radius:5px;
			  margin-left:9em;
			  background-color:rgb(97, 233, 97);
			  width:36em;
			  height:2.45em;
		}
  		h4{
  			text-align: center;
			text-decoration: underline;
			font-size:1.24em;
  		}
  	</style>
  </head>
  <body>
       <form method="POST">
       	   <?php
             while ($data=mysqli_fetch_assoc( $sel)) {
             	// code...

             
       	   ?>
       	 <h4> IMPORT PRODUCT</h4>
       	 <table>
       	 	<tr>
       	 		<td>id</td>
       	 		<td> <input type="id" class="form-control" name="id" required="" value="<?php echo $data['id']?>" readonly></td>
       	 	</tr>
       	 	<tr>
       	 		<td>product_name</td>
       	 		<td> <input type="name" class="form-control"name="product_name" required="" value="<?php echo $data['product_name']?>"readonly>

                <?php

                  }
                  //}
                  
                 
                ?>
       	 		</td>
       	 	</tr>
       	 	<tr>
       	 		<td>date</td>
       	 		<td> <input type="date" class="form-control" name="date" required=""></td>
       	 	</tr>
       	 	<tr>
       	 		<td>quantity</td>
       	 		<td> <input type="number" id="quantity" class="form-control" name="quantity" required=""></td>
       	 	</tr>
       	 	<tr>
       	 		<td>unit_price</td>
       	 		<td> <input type="number" id="unit_price" class="form-control" name="unit_price" onchange="total()" required=""></td>
       	 	</tr>
       	 	<tr>
       	 		<td>total_price</td>
       	 		<td> <input type="number" id="total_price" class="form-control" name="total_price" required=""></td>
       	 	</tr>
       	 	<tr>
       	 		<td colspan="6" align="center"> <input type="submit" class="btn btn-success" name="send" value="send"></td>
       	 	</tr>
       	 </table>
       </form>
  </body>
  <script>
	function total() {
		let unit_price=document.getElementById("unit_price").value;
		let quantity=document.getElementById("quantity").value;
		let  total_price=unit_price * quantity;
		  document.getElementById("total_price").value=total_price;
		  console.log(total_price);

		
	}
  </script>
  </html>
  <?php
  require 'connect.php';
   if (isset($_POST['send'])) {
   	// code...

   $id=$_POST['id'];
   $name=$_POST['product_name'];
   $date=$_POST['date'];
   $quantity=$_POST['quantity'];
   $unit_price=$_POST['unit_price'];
   $total=$quantity*$unit_price;

   $insert= mysqli_query($connect, "INSERT INTO `stock_in`(`id`, `product_name`, `date`, `quantity`, `unit_price`, `total_price`) VALUES ('','$name','$date','$quantity','$unit_price','$total')");

    if ($insert) {
    	// code...
    	echo "<script>alert('data is imported')</script>";
		 header("location:stock_in.php");
    }else{
    	echo "<script>alert('data is imported fail')</script>";
		header("location:importproduct.php");
    }
   }
?>