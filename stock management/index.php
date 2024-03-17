<?php
 include "connect.php";

if(isset($_POST['send'])){



$user = $_POST['user_name'];
$pass = $_POST['password'];
   
	  $sel="SELECT * FROM user WHERE user_name='$user' AND password='$pass'";
	     $query=mysqli_query($connect, $sel);
     if (mysqli_num_rows($query)>0) {

		 session_start();
		 $_SESSION['user']=$data['user_name'];


        echo"<script>alert('you are loged in'), location.href='header.php'</script>";

  }
  else{
	 echo"<script>alert('not found'), loction.href='index.php'</script>";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css///bootstrap.min.css">
	<style type="text/css">
		body{
			background-image: url("kcch.jpg");
			background-repeat: no-repeat;
			background-position: center;
			background-size:100em auto;

		}

		form{
			
			margin:10em auto;
			margin-bottom:3em;
			margin-left:25em;
			width:31%;
			height:24em;
			border-radius:5px;
			box-shadow: 10px 10px 15px 15px darkseagreen;
			border-style: ridge;

		}
		h1{
			text-align: center;
			color:rgb(49, 88, 49);
		}
		.login{
			text-align: center;
		}
		.element{
			border-radius:5px;
		}
		input[type=submit]{
			border-radius:5px;
			font-size:1em;
			 height:2.25em;
			width: 10em;
		
		}
		input[type=text]{
			font-size:1.25em;
			margin-left:6px;
			width:16em;
			height:1.55em;
			border-radius:3px;
		}
		input[type=submit]{
			background-color:rgb(97, 233, 97);
			 width:20em;
		}
		
	</style>
</head>
<body>
     <form method="POST">
             <div class="header">
     		<h1>Login form</h1>
     		</div>
     		<div class="login">
     			 <br> user_name<br>
				<input type="text" class="form-control" name="user_name" placeholder="username">
                      <br>
                  <br>password:<br>
				 <input type="text" class="form-control" name="password" placeholder="password">
     			 <br><br>
     			 <input type="submit" class="btn btn-success" name="send" value="Login"><br>

			     <p>If you don't have an account &nbsp;&nbsp;<a href="register.php">Signup</a></p>
     		</div>
    
     	
     </form>
</body>
</html>


 