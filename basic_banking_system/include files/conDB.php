<?php

        $servername='sql309.infinityfree.com';
        $username='if0_36488769';
        $password='Deep883921';
        $db='if0_36488769_banking_system';
        $conn=mysqli_connect($servername,$username,$password,$db);
        if (!$conn) {
              echo('connection failed');
        }

?>