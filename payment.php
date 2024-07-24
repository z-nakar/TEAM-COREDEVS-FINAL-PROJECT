<?php
session_start();
include('connect.php');

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Payment Form</title>
</head>
<body>
<?php include('header.php')?>

        <!--Checkout-->
           <!--Sign Up-->
           <section class="my-5 py-5">
            <div class="container text-center mt-3 pt-5">
                <h2 class="form-weight-bold">Payment</h2>
                <hr class="mx-auto">
            </div>
            <div class="mx-auto container text-center">
                <p><?php if(isset($_SESSION['order_status']))echo $_GET['order_status'];?></p>
                <p>Total Payment: ₱<?php if(isset($_SESSION['total'])){echo $_SESSION['total'];}?></p>
                <form action="thankyou.php" method="POST">
                <div class="form-group mb-3">
                    <label for="payment-method" class="form-label">Choose Payment Method:</label>
                    <select id="payment-method" name="payment_method" class="form-select" required>
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="gcash">Gcash</option>
                        <option value="cod">Cash on Delivery</option>
                    </select>
                </div>
                <input class="btn btn-primary" value="Pay Now" type="submit"/>
            </form>
        </div>
    </section>
        

     
     
    <?php include('footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>