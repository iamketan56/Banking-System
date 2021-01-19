<?php

     // due to privacy reason i am not showing my database details 
     $connection = mysqli_connect('localhost','User name','Password','Database name');

  $data = mysqli_query($connection,"SELECT * FROM account_holder_data");

  if($row = mysqli_fetch_array($data))
  {
    $name = $row['AC_Name'];
    $Mobile = $row['Mobile_No'];
    $DOB = $row['D_O_B'];
    $Ac_Number = $row['AC_Number'];
    $Amount = $row['Ammount_Availble'];
   
  }


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
            <li> <a  href="./Transaction.html">Transaction</a> </li>
            <li> <a href="./Serivces.html">Services</a> </li>
            <li> <a class="active" href="./My_Account.php">My Account</a> </li>
        </ul>
    </nav>
    
  <section id="my_Account">
      <div class="user_info">
         <h2>Ketan's Profile</h2>
          <div id="user_img">
              <img src="./images/ketan.png" alt="user" >
</div>       
  
          <div class="user_content">
            
          <h3>Name : <?php echo $name; ?> </h3>
          <hr>
          <h3>Mobile No : <?php echo $Mobile ?> </h3>
          <hr>
          <h3>DOB : <?php echo $DOB ?></h3>
          <hr>
          <h3>A/C No: <?php echo $Ac_Number ?></h3>
          <hr>
        <h3>Balance: <?php echo $Amount ?> Rs</h3>
        
       
        </div>

      </div>
  </section>
<script src="main.js"></script>
</body>
</html>
