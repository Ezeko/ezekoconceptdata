<?php
include ('connect.php');
//get id from form
$di=$_REQUEST['id'];


$t= date_default_timezone_set("Africa/Lagos");
$t = date('Y-d-m H:i:s');
$imm = "UPDATE `airtime_history`  set del_date='$t' WHERE id= '$di'";
$que = mysqli_query($conn, $imm) or die(mysqli_error($conn));


$sql = "UPDATE `airtime_history`  set status='CANCELLED' WHERE id= '$di'";
$result = $conn->query($sql);

if ($result=== true) {


    echo "<script>alert('AIRTIME CANCELLED SUCCESSFULLY'); window.location.replace('airtime_update.php');</script>";

    }



?>
