<?php 
include ('connect.php');
$username = $_GET['username'];
$number = $_GET['number'];
$amount = 10000;


$sql = "SELECT * FROM `payers` WHERE p_balance>0 and p_username='$username'";
                                                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                                $count= mysqli_num_rows($result);
                                                
                                                if ($count>0){
                                                header('refresh:0, url=dashboard.php');

echo "<script>alert('You have a pledge to redeem.')</script>";

}

   else{                                              


$sql = "INSERT into `payers` (p_username, p_amount, p_phone_number, p_balance) values ('$username', '$amount', '$number', '10000')";
$result = mysqli_query($conn, $sql);
if ($result == true){
header('refresh:0, url=dashboard.php');

echo "<script>alert('You have successfully pledged #10000.')</script>";

}
else{
die(mysqli_error($conn));
}}
?>