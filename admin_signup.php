<?php
include('connect.php');
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    if($password !== $cpassword){ // if passwords don't match
        header('Location: admin_signup.php?error=password doesnt match!');
    }
    else if(strlen($password) < 6){ // if password is less than 6 characters
        header('Location: admin_signup.php?error=password must be at least 6 characters');
    }
    else { // if there is no error >> this will proceed
        // check if the email is already existing 
        $stmt1 = $con->prepare("SELECT * FROM admin_tb WHERE admin_email = ?");
        $stmt1->bind_param('s', $email);
        $stmt1->execute();
        $stmt1->store_result();
        
        // check if the email is already exist; this error will prompt
        if($stmt1->num_rows != 0){
            header('Location: admin_signup.php?error=Email is already existed');
        }
        else{
            // create a user and store it in the database
            $stmt = $con->prepare("INSERT INTO admin_tb (admin_username, admin_email, admin_password) VALUES (?, ?, ?)");
            $stmt->bind_param('sss', $name, $email, md5($password));


            
            // if account is created successfully
            if($stmt->execute()){
                $user_id = $stmt->insert_id;
                $_SESSION['admin_id'] = $user_id;
                $_SESSION['admin_email'] = $email;
                $_SESSION['admin_username'] = $name;
                $_SESSION['logged_in'] = true;
                header('Location: admin_login.php?register_success=You Registered Successfully!');
            }
            else{
                header('Location: admin_signup.php?error=Invalid Creation, Please Try Again.');
            }
        }   
    }
}
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
   <style>
    .register-photo {
  background:#f1f7fc;
  padding:80px 0;
}

.register-photo .image-holder {
  display:table-cell;
  width:auto;
  background:url(assets/img/Logo.png);
  background-size:cover;
}

.register-photo .form-container {
  display:table;
  max-width:900px;
  width:90%;
  margin:0 auto;
  box-shadow:1px 1px 5px rgba(0,0,0,0.1);
}

.register-photo form {
  display:table-cell;
  width:400px;
  background-color:#ffffff;
  padding:40px 60px;
  color:#505e6c;
}

@media (max-width:991px) {
  .register-photo form {
    padding:40px;
  }
}

.register-photo form h2 {
  font-size:24px;
  line-height:1.5;
  margin-bottom:30px;
}

.register-photo form .form-control {
  background:#f7f9fc;
  border:none;
  border-bottom:1px solid #dfe7f1;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
  text-indent:6px;
  height:40px;
}

.register-photo form .form-check {
  font-size:13px;
  line-height:20px;
}

.register-photo form .btn-primary {
  background:#000000;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:35px;
  text-shadow:none;
  outline:none !important;
}

.register-photo form .btn-primary:hover, .register-photo form .btn-primary:active {
  background:#eb3b60;
}

.register-photo form .btn-primary:active {
  transform:translateY(1px);
}

.register-photo form .already {
  display:block;
  text-align:center;
  font-size:12px;
  color:#6f7a85;
  opacity:0.9;
  text-decoration:none;
}


   </style>
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="admin_signup.php">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="name" name="name" placeholder="Username"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="cpassword" placeholder="Password (repeat)"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" name="register"type="submit">Sign Up</button></div><a href="#" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>