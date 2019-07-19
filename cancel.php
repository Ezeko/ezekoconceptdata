<?php
include ('connect.php');
//get id from form
$di=$_REQUEST['id'];
$network=$_REQUEST['network'];
$number=$_REQUEST['number'];
$admin= $_SESSION['username'];
$data=$_REQUEST['data'];

$amt=$_REQUEST['amount'];
$user=$_REQUEST['username'];

$sql="SELECT * FROM `users` WHERE username='$user'";
$query=mysqli_query($conn, $sql) or die(mysqli_error($conn));

$row= mysqli_fetch_assoc($query);
$balance= $row['balance'];

$bal= $balance + $amt ;


$t= date_default_timezone_set("Africa/Lagos");
$t = date('Y-d-m H:i:s');
$imm = "UPDATE `orders`  set del_date='$t' WHERE id= '$di'";
$que = mysqli_query($conn, $imm) or die(mysqli_error($conn));


$sql = "UPDATE `orders`  set status='CANCELLED' WHERE id= '$di'";
$result = $conn->query($sql);

if ($result=== true) {

$ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$user', 'CANCELLED DATA', '$network', '$number', '$data', '$balance', '$amt', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));
      
$sql="UPDATE `users`  set balance='$bal' WHERE username= '$user'";  
$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
    echo "<script>alert('DATA CANCELLED AND REFUNDED'); window.location.replace('admin_data.php');</script>";

    }



?>
