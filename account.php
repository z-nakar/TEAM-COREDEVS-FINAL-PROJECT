<?php
session_start();
include('connect.php');
if(!isset($_SESSION['logged_in'])){
    header('location: signin.php');
}
if(isset($_GET['logout'])){
    if(isset($_SESSION['logged_in'])){
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        header('location: signin.php');
        exit;
    }
}

if(isset($_POST['change_password'])){
    $password = $_POST['password'];
    $cpassword = $_POST['confirm-password'];
    $user_email = $_SESSION['user_email'];

    if($password !== $cpassword){ // if passwords don't match
        header('Location: account.php?error=password doesnt match!');
    }
    else if(strlen($password) < 6){ // if password is less than 6 characters
        header('Location: account.php?error=password must be at least 6 characters');
    }else{//no errors
        $stmt = $con->prepare("UPDATE users SET user_password = ? WHERE user_email =?");
        $stmt->bind_param('ss', md5($password), $user_email);
        if($stmt->execute()){
            header('Location: account.php?message_=Password has been updated successfully!');

        }else header('location:account.php?error=Password could not update successfully');
    }
}

//get orders that will display below
if(isset($_SESSION['logged_in'])){
    $user_id = $_SESSION['user_id'];
    $stmt = $con->prepare("SELECT * FROM orders WHERE user_id=?");
    $stmt->bind_param('s', $user_id );
    $stmt->execute();
    $orders = $stmt->get_result();


}





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
    <title>Account Page</title>
</head>
<body>
       
<?php include('header.php')?>



                <!--Account-->
            <section class="my-5 py-5">
                <div class="row container mx-auto">
                    <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
                    <p class="text-center" style="color: red"><?php if(isset($_GET['register_success'])){ echo $_GET['register_success']; }?></p>
                    <p class="text-center" style="color: green"><?php if(isset($_GET['login_success'])){ echo $_GET['login_success']; }?></p>
                        <h3 class="font-weight-bold header">Account Info</h3>
                        <hr class="mx-auto">
                        <div class="account-info">
                            <p>Name: <span><?php if(isset($_SESSION['user_name'])){ echo $_SESSION['user_name'];}?></span></p>
                            <p>Email: <span><?php if(isset($_SESSION['user_email'])){ echo $_SESSION['user_email'];}?></span></p>
                            <p><a href="#orders" id="order-btn">Your orders</a></p>
                            <p><a href="account.php?logout=1" id="logout-btn">Logout</a></p>
                        </div>
                    </div>

                    <div class="text-center mt-3 pt-5  col-lg-6 col-md-12 col-sm-12">
                        <form action="account.php" id="account-info" method="POST">
                            <p class="text-center" style="color: red"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
                            <p class="text-center" style="color: green"><?php if(isset($_GET['error'])){ echo $_GET['message_']; }?></p>
                            <h3>Change Password</h3>
                            <hr class="mx-auto">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="account-password" name="password" placeholder="Enter your new password" required/>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="account-password-confirm" name="confirm-password" placeholder="Confirm new password" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Change Password" name="change_password"class="btn" id="change-pass-btn"/>
                            </div>
                        </form>
                    </div>
                </div>
            </section>


           <!--Orders-->
           <section id="orders" class="order container text-center my-5 py-3">
            <div class="container mt-2">
                <h2>Your Order/s</h2>
                <hr class="mx-auto">
            </div>

            <table class="mt-5 pt-5">
                <tr>
                    <th>Order ID</th>
                    <th>Order Cost</th>   
                    <th>Order Status</th>  
                    <th>Date</th>  
                </tr>
                <?php while ($row = $orders->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <span><?php echo $row['order_id']; ?></span>
                        </td>
                        <td>
                            <span><?php echo $row['order_cost']; ?></span>
                        </td>
                        <td>
                            <span><?php echo $row['order_status']; ?></span>
                        </td>
                        <td>
                            <span><?php echo $row['order_date']; ?></span>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </section>


     
     














        <?php include('footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>