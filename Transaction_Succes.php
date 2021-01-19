<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
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
            <li> <a href="">Home</a> </li>
            <li> <a href="./about.html">About</a> </li>
            <li> <a class="active" href="./Transaction.html">Transaction</a> </li>
            <li> <a href="./Serivces.html">Services</a> </li>
            <li> <a href="./My_Account.php">My Account</a> </li>
        </ul>
    </nav>
<?php
//Connection Part
 if(isset($_POST['submit']))
 {
     $name = $_POST['Name'];
     $amt = $_POST['Amount'];
     $remarks = $_POST['message'];
    

     // due to privacy reason i am not showing my database details 
     $connection = mysqli_connect('localhost','User name','Password','Database name');

    $data = mysqli_query($connection,"SELECT * FROM account_holder_data");    
            
     if($row = mysqli_fetch_array($data))
      {
        $intial = $row['Ammount_Availble'];
     }

    if ($amt <= $intial)
    {
     //Insert Data in database
   $query = "INSERT INTO `transaction_details`(`User_Name`, `Transaction_Amount`, `Message`) VALUES ('$name','$amt','$remarks')";
            //Update balance 
     $update =  "UPDATE `account_holder_data` SET `Ammount_Availble`= $intial - $amt WHERE `AC_Number`='978548979111'";
     if(mysqli_query($connection, $query))
     {
        echo "  <div class='success'>
        <img src='./images/tenor.gif' alt='this slowpoke moves' class='sucess-img' width=250/> 
        <br> 
        <h2 style = 'color:green;text-align:center;padding:10px;margin-top:20%'>Transaction Successful.<br> Do Transaction.</h2>        
    
    </div>";
    if(mysqli_query($connection , $update))
    {
  
    }
     }
     else{
        die(mysqli_error($connection));
        }
    }
else
{
    echo "   <div class='success'>
        <img src='./images/sm.PNG' alt='this slowpoke moves' class='sucess-img' width=250/> 
        <br> 
        <h2 style = 'color:rgb(207, 57, 57);text-align:center;padding:10px;margin-top:10%'>Insufficent Balance <br> <a href='./My_Account.php'>Check Your Account</a></h2 ";
}
}  

?>
</body>
</html>