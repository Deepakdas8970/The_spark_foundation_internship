<?php
session_start();
 include('./config.php');
    $amount = $_POST['paymentAmount']/100;
    $paymentId = $_POST['paymentid'];
 $sql="INSERT INTO txtDetails(amount,payment_id,added_date) VALUES('$amount','$paymentId',current_timestamp())";
 $result=mysqli_query($conn,$sql);
 if ($result) {
        echo('done');
        $_SESSION['paymentid']=$paymentId;
        $_SESSION['paymentAmount']=$amount;
 }

?>