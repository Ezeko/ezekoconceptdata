<?php
session_start();
session_destroy();
$username=$_SESSION["username"];
$Username=strtoupper($username);
 echo "<script>alert('$Username Logged out successfully')</script>";


echo "<script>window.location.replace('login.php')</script>";
?>