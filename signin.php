<?php
session_start();
include('connect.php');

    if(isset($_SESSION['logged_in'])){
        header('location: account.php');
        exit;
    }

    if(isset($_POST['login_btn'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $stmt = $con->prepare("SELECT user_id, user_name, user_email, user_password FROM users WHERE user_email = ? AND user_password = ? LIMIT 1");

        $stmt->bind_param('ss', $email, $password);
        if($stmt->execute()){
            $stmt->bind_result($user_id, $username, $user_email, $user_password);
            $stmt->store_result();
            if($stmt->num_rows()==1){
                $stmt->fetch();
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_email'] = $user_email;
                $_SESSION['logged_in'] = true;

                header('location: account.php?login_success=Log in successfully!');
                
            }else header('location: signup.php?error=Could not verify your account');

        }else{ //error 

            header('location: index.php?error=Something Went Wrong D:');
        }
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
    <title>Sign In Page</title>
</head>
<body>
<?php include('header.php')?>





        <!--Log IN-->
        <section class="my-5 py-5">
            <div class="container text-center mt-3 pt-5">
                <h2 class="form-weight-bold">Login</h2>
                <hr class="mx-auto">
            </div>
            <div class="mx-auto container">
                <form id="Login-form" action="signin.php" method="POST">
                    <p style="color: red" class="text-center" <?php if(isset($_GET['errpr'])){echo $_GET['error'];}?>></p>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" id="login-email" name="email" placeholder="Enter your email" required/>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter your password" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn_" id="login-btn" name="login_btn"value="Login"/>
                    </div>
                    <div class="form-group">
                        <p>Don't have an account?<a id="register-url" href="signup.php"class="btn_"> Sign up here!</a></p>
                    </div>
                </form>
            </div>
        </section>

     
     
















        <?php include('footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>