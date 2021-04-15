<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['pay_type'] = $_POST['pay_meth'];
    
    header('location: card_detail.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Donate</title>
</head>
<body>
    <div class="detail-head">
        <div class="container pt-5 pb-2 text-light">
            <h2><strong>Enter your details</strong></h2>
        </div>
    </div>
    <div class="container pt-5">
        <form action="donate.php" method="POST">
            <input type="text" name="name" id="name" class="input-group" placeholder="Enter your Name" required>
            <input type="tel" name="mob_no" id="mob_no" class="input-group" placeholder="Mobile Number" pattern="[6-9]{1}[0-9]{9}" required>
            <input type="text" name="state" id="state" class="input-group" placeholder="State" required>
            <input type="text" name="city" id="city" class="input-group" placeholder="Enter your City" required>
            <h5>Select payment Method:</h5>
            <br>
            <div>           
                <input type="radio" name="pay_meth" id="pay_meth" value="card">
                <img src="img/debit_credit.png" alt="" width="70px" class="img">
            </div>   
            <div>
                <input type="radio" name="pay_meth" id="pay_meth" value="phonePe">
                <img src="img/PhonePe-Logo.wine.svg" alt="" width="130px" class="img">
            </div> 
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Proceed</button>      
            </div>
        </form>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>