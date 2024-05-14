<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Customers</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Banking System</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">View All Customers</a></li>
                <li><a href="./Transfer Money.php">Transfer Money</a></li>
                <li><a href="./Transfer History.php">Transfer History</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="customer-list">
            <h2>All Customers</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody id="customerTable">
                    <!-- Customer data will be inserted here -->
                   
                    <?php
                    include('./include files/conDB.php');
                    $sql='select * from customers;';
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_num_rows($result);
                    
                    
                    for($i=1;$i<=$row;$i++ ){
                    $data=mysqli_fetch_assoc($result);
                     echo " <tr style='text-align: center;'>
                            <td>".$data['id']."</td>
                            <td>".$data['name']."</td>
                            <td>".$data['email']."</td>
                            <td>".$data['balance']."</td>
                    </tr>";
                     
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