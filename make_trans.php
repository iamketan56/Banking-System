<?php
     // due to privacy reason i am not showing my database details 
     $connection = mysqli_connect('localhost','User name','Password','Database name');

  $query = "SELECT * FROM `user_data`";
  
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
            <li> <a class="active" href="">Home</a> </li>
            <li> <a href="./about.html">About</a> </li>
            <li> <a class="active" href="./Transaction.html">Transaction</a> </li>
            <li> <a href="./Serivces.html">Services</a> </li>
            <li> <a href="./My_Account.php">My Account</a> </li>
        </ul>
    </nav>
    <section id = "transact">
        <div class="container_two">
            <form action="./Transaction_Succes.php" id="form" class="form" method="POST" >
                <h2> Send Money </h2>
                <div class="form-control_two">
                    <label for="username">Beneficiary Name</label>
                   <select name="Name" id="bene_Name">
                       <option>Choose Beneficiary Name </option>
                          <?php foreach($results as $ke => $value){ ?>
                            <option value="<?=$value['Name'] ; ?>"><?=$value['Name']."( A/c : " . $value['Account_Number'].")" ; ?></option>
                            <?php } ?>
                   </select>
                </div>
                <div class="form-control_two">
                    <label for="Amount">Ammount</label>
                    <input type="tel" id="account"  name="Amount" placeholder="Enter Amount">
                   
                </div>
                
                <div class="form-control_two">
                    <label for="Message">Remarks</label>
                  <textarea name="message" id="message" placeholder="Message"></textarea>
                   
                </div>
                <input type="submit"  Value ="Send" class="button" name="submit">
            </form>
         
        </div>
        <!-- UPDATE `account_holder_data` SET,`Ammount_Availble`= 8000 WHERE `AC_Number`='978548979111' -->
        </section>
<script src="./main.js"></script>
</body>
</html>

