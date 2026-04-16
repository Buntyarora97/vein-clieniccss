<?php
session_start(); 
session_destroy(); 
header("location:index.php"); 
echo "<script> alert('Successfully Logged out');</script>";
?>
