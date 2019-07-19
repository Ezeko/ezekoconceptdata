<?php

include ('connect.php');
include ('log_validate.php');

$amount = $_POST['amount'];
$user =$_POST['user'];
$payment_means=$_POST['payment_means'];
$remarks=$_POST['remarks'];
$time = $_POST['time'];
$admin= $username;



 $sql = "SELECT * FROM `users` WHERE username= '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $balance = $row['balance'];
        $bal = $balance - $amount;
        
        $que = "UPDATE `users` SET balance='$bal' WHERE username='$user'";

if (($conn -> query($que))=== true) {


$wal= "INSERT INTO `wallet history` (username, service, payment_means, remarks, previous, amount, current, date, admin)
VALUES('$user', 'DEBIT', '$payment_means', '$remarks', '$balance', '$amount', '$bal', NOW(), '$admin' )";
$que_result= mysqli_query($conn, $wal) or die(mysqli_error($conn));


echo "<script> alert('Debited Successfully'); window.location.replace('debit_user.php');</script>"; }

else {

echo ("error" . $conn->error);
}
    }
} else {
    echo strtoupper($user . ' is not a registered member'); "<br />";
    
    echo "<br><script>window.location.replace('debit_user.php');</script>";
} 





$conn->close();

?>