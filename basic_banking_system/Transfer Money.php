<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Banking System</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="./View all customers.php">View All Customers</a></li>
                <li><a href="#">Transfer Money</a></li>
                <li><a href="./Transfer History.php">Transfer History</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="transfer-form">
            <h2>Transfer Money</h2>
            <form id="transferForm" method="post" action="">
                <div class="form-group">
                    <label for="sender">Sender:</label>
                    <select id="sender" name="sender">
                        <!-- Options for sender will be dynamically populated here -->
                        
                         <?php
                             include('./include files/conDB.php');
                             $sql='select * from customers;';
                             $result=mysqli_query($conn,$sql);
                             $row=mysqli_num_rows($result);
                             for($i=1;$i<=$row;$i++){
                              $data=mysqli_fetch_assoc($result);
                              echo "<option value='".$data['id']."'>".$data['name']."</option>";
                             }
                         ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="receiver">Receiver:</label>
                    <select id="receiver" name="receiver">
                        <!-- Options for receiver will be dynamically populated here -->
                          <?php
                             //include('./include files/conDB.php');
                             $sql='select * from customers;';
                             $result=mysqli_query($conn,$sql);
                             $row=mysqli_num_rows($result);
                             for($i=1;$i<=$row;$i++){
                              $data=mysqli_fetch_assoc($result);
                              echo "<option value='".$data['id']."'>".$data['name']."</option>";
                             }
                         ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount" min="1" required>
                </div>
                <button type="submit">Transfer</button>
            </form>
        </section>
    </main>
     <?php
        if ($_SERVER['REQUEST_METHOD']=='POST'){
        $sender=$_POST['sender'];
        $receiver=$_POST['receiver'];
        $amount=$_POST['amount'];
        // sender data and receiver data select
        $senderSql="select * from customers where id='$sender';";
        $receiverSql="select * from customers where id='$receiver';";

        // sender and receiver query execution
        $senderresult=mysqli_query($conn, $senderSql);
        $receiverresult=mysqli_query($conn, $receiverSql);


        // sender and receiver data fetching
        $senderData=mysqli_fetch_assoc($senderresult);
        $receiverData=mysqli_fetch_assoc($receiverresult);

       



         // checking suffiency of balance 
        if ($senderData['balance']!=0  ){
         //error on same transfer
        if ($sender===$receiver ){
        echo "<p style='text-align: center; color: red;'>You can't Transfer Money with Same Customer  Please Choose Another Customer!</p>";
        exit();
        }
        // error if enter value is greater than sender balance
        if ($amount>$senderData['balance']){
         echo "<p style='text-align: center; color: red;'>Insufficient Balance for  Money Transfer please Add Money!</p>";
        exit();
       }
        
                //deduction of sender balance
        $senderUpdatedBalance= $senderData['balance']-$amount;
        //added to receiver balance 
        $receiverUpdatedBalance= $receiverData['balance']+$amount;


        //update the balance of sender after deduction 
        $senderUpdatedBsql="update customers set balance='$senderUpdatedBalance' where id='$sender'";
        $senderUpdatedBresult=mysqli_query($conn,$senderUpdatedBsql);


        //update the balance of reveiver after Transfer
        $receiverUpdatedBsql="update customers set balance='$receiverUpdatedBalance' where id='$receiver'";
        $receiverUpdatedBresult=mysqli_query($conn,$receiverUpdatedBsql);
        
        echo "<p style='text-align: center; color: green;'>Transfer of Rs." . $amount . " from Customer " . $senderData['name']. " to Customer " . $receiverData['name']. " is  successful!</p>";
        

         //data intertion in translation history Tabale
        
         $senderName=$senderData['name'];
         $receiverName=$receiverData['name'];
         // Generate a random 10-digit number
         $transactionId = mt_rand(1000000000, 9999999999);

         $transectionHsql="INSERT INTO Transaction_History (`Transaction ID`, Sender_Name, Receiver_Name, Amount, Date) VALUES($transactionId,'$senderName', '$receiverName',$amount, current_timestamp)";
         $transactionHresult=mysqli_query($conn, $transectionHsql);
         
            
        }
        else{
                   echo "<p style='text-align: center; color: red;'>Insufficient Balance for  Money Transfer please Add Money!</p>";
          
    
        }

        

        }
      ?>

    <footer>
        <p>&copy; 2024 Banking System. All rights reserved.</p>
    </footer>
    <script>

        
    </script>
</body>
</html>