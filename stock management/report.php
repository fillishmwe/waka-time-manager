<?php
 require 'header.php';
 require 'connect.php';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<style type="text/css">
	form{
		background-color: darkseagreen;
		margin-top: -36em;
		margin-left:20em;
		height:13em;
		border-radius:4px;
	}
	header{
		text-align:center;
		margin-bottom:1.45em;
		font-size: 1.25em;
		text-decoration: underline;
	}
	input[type]{
		width:30em;
		height:2.45em;
	}
	table{
		margin-left:7em;
		padding:em;
	}
	input[type=submit]{
		background-color:rgb(97, 233, 97);
		 margin-left:6em;
		 height:2.45em;
		 width:30em;
		 border-radius:4px;
	}
</style>
 <form method="POST" action="selectall.php">
  <table>
  	<header class="my-3">GENERATE REPORT</header>
  	<tr>
  	
  	<td>startingdate:</td><br>
  	<td> <input type="date" class="form-control" name="sdate" required></td>
  	</tr>
  	<tr>
  	<td>endingdate</td>
  	<td> <input type="date" class="form-control" name="edate" required></td>
  	</tr>
  	<tr>
  	<td colspan="6" align="center"> <input type="submit" class="btn btn-success my-3" name="send" value="REPORT"></td>
  	</tr>
  </table>
  </form>