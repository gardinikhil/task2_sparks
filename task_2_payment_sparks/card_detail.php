<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{   
    header('location: donate_amt.php');
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
    <title>Card Details</title>
</head>
<body>
    <div class="detail-head">
        <div class="container pt-5 pb-2 text-light">
            <h2><strong>Enter payment datails</strong></h2>
        </div>
    </div>
    <div class="container mt-5">
        <?php
            session_start();
            if($_SESSION['pay_type'] == 'card')
            {
                echo'
                <form action="card_detail.php" method="POST">
                    <input type="tel" name="card_num" pattern="[0-9]{12}" placeholder="Enter card Number" class="input-group" required>
                    <input type="text" placeholder="Card holder Name" name="card-name" class="input-group" required>
                    <input type="date" name="exp_date" placeholder="Card expiry date" class="input-group" required>
                    <input type="text" placeholder="CVV" class="input-group" name="cvv" required>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Proceed</button>
                    </div>
                </form>
                ';
            }
            elseif($_SESSION['pay_type'] == 'phonePe')
            {
                echo '
                <form action="card_detail.php" method="POST">
                    <input type="text" name="upi_id" placeholder="Enter UPI id" class="input-group" required>
                    <input type="password" name="upi_pass" placeholder="password" class="input-group" required>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Proceed</button>
                    </div>
                </form>
                ';
            }
        ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>