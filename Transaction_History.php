<?php

     // due to privacy reason i am not showing my database details 
     $connection = mysqli_connect('localhost','User name','Password','Database name');
  $query = "SELECT * FROM `transaction_details` ORDER BY Data_and_Time DESC";
  $results = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />  
  <link rel="stylesheet" href="./main1.css">
</head>
<body>
    <nav id="nav">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Global Bank</label>
        <ul>
            <li> <a  href="./index.html">Home</a> </li>
            <li> <a href="./about.html">About</a> </li>
            <li> <a  class="active" href="./Transaction.html">Transaction</a> </li>
            <li> <a href="./Serivces.html">Services</a> </li>
            <li> <a href="./My_Account.php">My Account</a> </li>
        </ul>
    </nav>
    
  <section id="history">
    
      <div class = "transaction_history">
     <h1>Transaction History</h1>
        <table>
          <tr>
            <th>Date-And-Time</th>
            <th>Transaction ID</th>
            <th>Name(A/c)</th>
            <th>Amount</th>
            <th>Remarks</th>
          </tr>
          
          <?php foreach($results as $ke => $value){ ?>

              <tr>
            <td> <?=$value['Data_and_Time'];?> </td>
            <td> <?=$value['Transaction_ID'];?></td>
            <td><?=$value['User_Name'];?></td>
            <td> <?=$value['Transaction_Amount'];?></td>
            <td> <?=$value['Message'];?></td>
          </tr>
          
          <?php } ?>
      </div>
  </section>

      </div>
  </section>
<script src="main.js"></script>
</body>
</html>
