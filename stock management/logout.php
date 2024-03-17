<?php
   require 'connect.php';
    session_start();
    
     session_unset();
     session_destroy();
     echo"<sript> alert('Are you sure to logout here?')</script>";
     header("location:index.php");
     
?>