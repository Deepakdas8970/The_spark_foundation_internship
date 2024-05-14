<?php
 $serverName='localhost';
 $userName='root';
 $password='';
 $db='PaymentDetails';
 $conn=mysqli_connect($serverName,$userName,$password,$db);
 if (!$conn) {
         echo "database connection denied";
 }

?>