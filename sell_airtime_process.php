<?php
session_start ();
include ('connect.php');
$username=$_SESSION['username'];
$numb=$_POST['number1'];
$numbr=$_POST['number2'];
$ntwrk=$_POST['slct1'];
$amount=$_POST['amount'];

$t= date_default_timezone_set("Africa/Lagos");
$t = date('Y-d-m H:i:s');


$ins="SELECT * FROM `users` WHERE username='$username'";
$que=mysqli_query($conn, $ins) or die(mysqli_error($conn));
$row= mysqli_fetch_assoc($que);
$balance=$row['balance'];


$sql="INSERT INTO `airtime_history` (sale_date, username, network, phonenumber, ournumber, previous, amount, current, del_date, status)

VALUES ('$t', '$username', '$ntwrk', '$numbr', '$numb', '$balance', '$amount', '$balance', 'nil', 'PENDING' )";

$query=mysqli_query($conn, $sql) or die(mysqli_error($conn));



echo "<script> alert('Airtime sent Successfully. Your wallet will be updated when approved'); window.location.replace('sell_airtime.php');</script>"; 



?>