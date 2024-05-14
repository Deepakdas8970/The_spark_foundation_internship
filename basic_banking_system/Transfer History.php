<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Banking System</h1>
        <nav>
            <ul>
                  <li><a href="index.html">Home</a></li>
                <li><a href="./View all customers.php">View All Customers</a></li>
                <li><a href="./Transfer Money.php">Transfer Money</a></li>
                <li><a href="#">Transfer History</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="transfer-history">
            <h2>Transfer History</h2>
            <table>
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody id="historyTable">
                    <!-- Transfer history will be dynamically populated here -->
                    <?php
                     include('./include files/conDB.php');
                     $sql="SELECT * FROM Transaction_History";
                     $result=mysqli_query($conn,$sql);
                     $row=mysqli_num_rows($result);
                     for ($i = 1; $i <= $row; $i++) {
                              $data=mysqli_fetch_assoc($result);
                              echo(" <tr style='text-align: center;'>
                                                          <td>".$data['Transaction ID']."</td>
                                                          <td>".$data['Sender_Name']."</td>
                                                          <td>".$data['Receiver_Name']."</td>
                                                          <td>".$data['Amount']."</td>
                                                          <td>".$data['Date']."</td>
                                                  </tr>");
                              
                     }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Banking System. All rights reserved.</p>
    </footer>
</body>
</html>