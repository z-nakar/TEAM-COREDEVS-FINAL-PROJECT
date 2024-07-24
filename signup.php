<?php
include('connect.php');
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    if($password !== $cpassword){ // if passwords don't match
        header('Location: signup.php?error=password doesnt match!');
    }
    else if(strlen($password) < 6){ // if password is less than 6 characters
        header('Location: signup.php?error=password must be at least 6 characters');
    }
    else { // if there is no error >> this will proceed
        // check if the email is already existing 
        $stmt1 = $con->prepare("SELECT * FROM users WHERE user_email = ?");
        $stmt1->bind_param('s', $email);
        $stmt1->execute();
        $stmt1->store_result();
        
        // check if the email is already exist; this error will prompt
        if($stmt1->num_rows != 0){
            header('Location: signup.php?error=Email is already existed');
        }
        else{
            // create a user and store it in the database
            $stmt = $con->prepare("INSERT INTO users (user_name, user_email, user_password) VALUES (?, ?, ?)");
            $stmt->bind_param('sss', $name, $email, md5($password));


            
            // if account is created successfully
            if($stmt->execute()){
                $user_id = $stmt->insert_id;
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = $name;
                $_SESSION['logged_in'] = true;
                header('Location: account.php?register_success=You Registered Successfully!');
            }
            else{
                header('Location: signup.php?error=Invalid Creation, Please Try Again.');
            }
        }   
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
    <title>Sign Up Page</title>
</head>
<body>
<?php include('header.php')?>


        <!--Sign Up-->
        <section class="my-5 py-5">
            <div class="container text-center mt-3 pt-5">
                <h2 class="form-weight-bold">Sign Up</h2>
                <hr class="mx-auto">
            </div>
            <div class="mx-auto container">
                <form id="signup-form" method="POST" action="signup.php">
                    <p style="color: red;"><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="signup-fullname" name="name" placeholder="Enter your Full name" required/>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" id="signup-email" name="email" placeholder="Enter your email" required/>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" id="signup-password" name="password" placeholder="Enter your password" required/>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password:</label>
                        <input type="password" class="form-control" id="signup-cpassword" name="cpassword" placeholder="Confirm your password" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn_" id="signup-btn" name="register" value="Login"/>
                    </div>
                    <div class="form-group">
                        <p>Don't have an account?<a id="login-url" class="btn_" href="signin.php"> Sign up here!</a></p>
                    </div>
                </form>
            </div>
        </section>

     
     
















        <?php include('footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>