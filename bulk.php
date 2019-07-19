<?php
include ('connect.php');

$id=$_POST['bulk_id'];
$type= $_POST['slct_type'];

$t= date_default_timezone_set("Africa/Lagos");
$t = date('Y-d-m H:i:s');


if ($type==='BULK_APPROVE'){
$imm = "UPDATE `orders`  set del_date='$t' WHERE id= '$di'";
$que = mysqli_query($conn, $imm) or die(mysqli_error($conn));
$sql = "UPDATE `orders`  set status='BULK_APPROVED' WHERE status='PENDING' AND id<= '$id'";
$result = $conn->query($sql);

if ($result=== true) {
      
    
    echo "<script>alert('DATA BULK APPROVED SUCCESSFULLY'); window.location.replace('admin_data.php');</script>";
exit();
    }

} else if ($type==='BULK_CANCEL'){
$imm = "UPDATE `orders`  set del_date='$t' WHERE id= '$di'";
$que = mysqli_query($conn, $imm) or die(mysqli_error($conn));

$sql = "UPDATE `orders`  set status='BULK_CANCELLED' WHERE status='PENDING' AND id<= '$id'";
$result = $conn->query($sql);

if ($result=== true) {
      
    
    echo "<script>alert('DATA BULK CANCELLED SUCCESSFULLY'); window.location.replace('admin_data.php');</script>";
exit();
    }

} else 
echo "<script>alert('SELECT BULK TYPE!!!'); window.location.replace('admin_data.php');</script>";








?>
