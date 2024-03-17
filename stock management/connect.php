<?php
  $connect= mysqli_connect("localhost", "root", "", "saint_anne");

  if (!$connect) {
  	// code...
  	echo "connection failed";
  }

