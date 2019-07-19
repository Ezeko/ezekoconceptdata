<?php
include ('connect.php');
//get id from form
$di=$_REQUEST['id'];

$t= date_default_timezone_set("Africa/Lagos");
$t = date('Y-d-m H:i:s');
$imm = "UPDATE `orders`  set del_date='$t' WHERE id= '$di'";
$que = mysqli_query($conn, $imm) or die(mysqli_error($conn));
$sql = "UPDATE `orders`  set status='APPROVED' WHERE id= '$di'";
$result = $conn->query($sql);

if ($result=== true) {
      
    
    echo "<script>alert('DATA APPROVED'); window.location.replace('admin_data.php');</script>";

    }



?>
