<?php
  include 'connect.php';
  if(isset($_POST['submit'])){

    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    
     $sql="INSERT INTO register(username,email,password) VALUES('$name','$email','$pass')";
      $query=mysqli_query($connect,$sql);

       if($query){
          echo"user sucsessfully!";
          header("location:index.php");
       }else{
        echo"register failed";
        header("location:register.php");
       }
     
  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
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
			width: 28%;
			height:25em;
			border-radius:5px;
			box-shadow: 10px 10px 15px 15px darkseagreen;
			border-style: ridge;

		}
		h1{
			text-align: center;
			color:rgb(49, 88, 49);
		}
		.regist{
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
			background-color:rgb(97, 233, 97);
			width:20em;
			margin-left:5px;
			text-align:center;
		
		}
		input[type=text]{
			
			font-size:1.25em;
			margin-left:6px;
			width:16em;
			border-radius:3px;
		}
		
	</style>
</head>
<body>
     <form method="POST">
     	<div class="header">
     		<h1>Register form</h1>
     		</div>
     		<div class="regst">
     			    &nbsp;  &nbsp;user_name<br>
				<input type="text" class="form-control" name="username" placeholder="username"><br><br>
				&nbsp;  &nbsp;Email:
                      <input type="text" class="form-control" name="email" palceholder="email"><br><br>
					  &nbsp;  &nbsp;password:<br>
				 <input type="text" class="form-control" name="password" placeholder="password"><br><br>
     			 <br>&nbsp;  &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;
     			 <input type="submit" class="btn btn-success" name="submit" value="sign up">
                  
			     <p>If you have an account go to &nbsp;&nbsp;<a href="index.php">Login</a></p>
     		</div>
     </form>
</body>
</html>
