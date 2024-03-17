<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>product</title>
 	<style type="text/css">
 		body{
 			background-image: url("kcch.jpg");
 			margin-left:2em;
			margin:-1em;
			margin-top:-1.25em;
 			margin-right:0.25em;
 		}
 		.header{
			background-color:darkseagreen;
			height: 4em;
			box-sizing:border-box;
			color:dark;
		}
		h1{
			font-size: 2em;
			font-family:sans-serif;
			font-style:normal;
			color: black;
			margin-left:8em;
		}
		.header a{
			float: right;
			margin-top: -1.55em;
			margin-bottom:2em;
			margin-right:4em;
			text-decoration: none;
			font-size: 1.90em;
			font-family:verdana;
			color: black;
		}
		.menu{
			background-color:darkseagreen;
			width:17em;
			margin-top: 4em;
			border-radius:4px;
			height:29em;
		}
		.menu ul{
            padding:1em;
		}
		.menu ul li{
			padding:1.45em;
			font-size:-1em;
			margin-left:3em;
			color: black;
			list-style: none;

		}
		.menu ul li a{
			font-family:sans-serif;
			color: black;
			text-decoration: none;
		}
		.font-brand{
			font-size:3em;
			float:right;
		}
		.footer{
			text-align: center;
			color:black;
			margin-top:5.42em;
		}
 	</style>
 </head>
 <body>
	<div class="container my-3">
 	<div class="header">
 		<h1>STOCK MANAGMENT SYSTEM</h1>
 		<a href="report.php">REPORT</a>
 	</div>
     <div class="menu">
     	<ul>
     		<li> <a href="home.php">Home</a> </li>
     		<li> <a href="product.php">Product</a> </li>
     		<li> <a href="viewproduct.php">View product</a> </li>
            <li> <a href="stock_in.php">Stock_in</a> </li>
            <li> <a href="stock_out.php">Stock_out</a> </li>
            <li> <a href="logout.php">Logout</a> </li>
     	</ul>
     </div>
	  <div class="font-brand">
	  <p><i class="fa-brands fa-square-facebook"></i></p>
	  </div>
     <div class="footer">
     	<p>kitchen stock management report@gmail.com</p>
     </div>
	 </div>
 </body>
 </html>