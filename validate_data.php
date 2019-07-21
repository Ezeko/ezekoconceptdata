<?php
include ('connect.php');
include ('log_validate.php');

$username=$_SESSION['username'];
$network= $_POST['slct1'];
$number = $_POST['number'];
$amount = $_POST['slct2'];
$d= date_default_timezone_set("Africa/Lagos");
$t = date('Y-d-m H:i:s', time());



 $sql = "SELECT * FROM `users` WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
    $balance = $row['balance'];
    $bal = $balance - $amount;
        
        if ($balance < $amount){
                header('refresh:2; url=data.php');
        
        die('INSUFFICIENT BALANCE!!!!');
        
       
        

        
        }
        else {
        /*  SWITCH STATEMENT TO ENTER DATA AMOUNT*/
        
       if ($network==='MTN'){
       switch ($amount){
       case (450) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '500MB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','500MB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;


       case (750) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '1GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','1GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;

       case (1300) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '2GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));


$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','2GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
       break;
       
              case (2050) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '3GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','3GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;


       case (3100) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '5GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));


$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','5GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;

default: echo"check your details";

       }
       
       } 
       

       if ($network==='AIRTEL'){
       switch ($amount){
       case (1000) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '1.5GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','1.5GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



       case (1950) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '3.75GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','3.75GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;




       case (3000) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '5.5GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));
       
$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','5.5GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;
      

       }
       
       } 



       if ($network==='ETISALAT'){
       switch ($amount){
       case (300) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '250MB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','250MB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



       case (400) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '500MB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','500MB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



       case (700) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '1GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','1GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;

       
       
              case (1050) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '1.5GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','1.5GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;




       case (1300) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '2GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','2GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



       case (2000) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '3GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','3GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



       case (3200) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '5GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','5GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



       }
       
       }
       
       //IF NETWORK, ADD CORRESPONDING AMOUNT TO WALLET HISTORY AND ORDER HISTORY
             if ($network==='GLO'){
       switch ($amount){
       case (950) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '1.6GB/2GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','1.6/2GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



       case (1900) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '3.65GB/4.5GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','3.65/4.5GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;


       case (2350) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '5.7GB/7.2GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));
       
       $ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','5.7/7.2GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;

       
       
  case (2750) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '7GB/8.25GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','7/8.25GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;


 case (3650) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '10GB/12.5GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','10/12.5GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



 case (4550) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '12.5GB/15.6GB', '$balance', '$amount', '$bal', '$t', '$admin' )";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));

$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount,data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','12.5/15.6GB' )";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



 case (7100) : $ins="INSERT INTO `wallet history` (username, service, payment_means, number, data, previous, amount, current, date, admin)
VALUES('$username', 'DATA', '$network', '$number', '20GB/25GB', '$balance', '$amount', '$bal', '$t', '$admin')";
$que_result= mysqli_query($conn, $ins) or die(mysqli_error($conn));


$ord= "INSERT INTO `orders` (ord_date, username, number, Status, network, amount, data)
VALUES('$t', '$username', '$number', 'PENDING', '$network','$amount','20/25GB')";
$ord_result= mysqli_query($conn, $ord) or die(mysqli_error($conn));
break;



       } 
       
       } 



        
         $que = "UPDATE `users` SET balance='$bal' WHERE username='$username'";

if (($conn -> query($que))=== true) {




echo "<script> alert('Data ordered Successfully'); window.location.replace('data.php');</script>"; }


        
        
        
        }}}
        
        


    


$conn->close();


?>