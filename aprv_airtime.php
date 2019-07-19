<?php
session_start();
include ('connect.php');
//get parameters from form
$di=$_REQUEST['id'];
$atp=$_REQUEST['amountToPay'];
$network=$_REQUEST['network'];
$number=$_REQUEST['number'];
$admin= $_SESSION['username'];

$amt=$_REQUEST['amount'];
$user=$_REQUEST['username'];

$sql="SELECT * FROM `users` WHERE username='$user'";
$query=mysqli_query($conn, $sql) or die(mysqli_error($conn));

$row= mysqli_fetch_assoc($query);
$balance= $row['balance'];

$bal= $balance + $atp ;





$t= date_default_timezone_set("Africa/Lagos");
$t = date('Y-d-m H:i:s');
$imm = "UPDATE `airtime_history`  set del_date='$t' WHERE id= '$di'";
$que = mysqli_query($conn, $imm) or die(mysqli_error($conn));
$sql = "UPDATE `airtime_history`  set status='APPROVED', current='$bal' WHERE id= '$di'";
$result = $conn->query($sql);

if ($result=== true) {

$ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$user', 'AIRTIME SALE', '$network', '$number', '', '$balance', '$atp', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));
      
$sql="UPDATE `users`  set balance='$bal' WHERE username= '$user'";  
$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));

      
    
    echo "<script>alert('AIRTIME SALES APPROVED SUCCESSFULLY AND USER CREDITED'); window.location.replace('airtime_update.php');</script>";

    }



?>
