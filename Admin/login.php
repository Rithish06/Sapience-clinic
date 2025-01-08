    <?php
error_reporting(0);
session_start();


 
include('conn.php');

$emailError = $passwordERR = "";
$passwordError = $password = "";


if(isset($_POST['login']))
{

   
        if(empty($_POST['email'])){
            $emailError = "email is required";
        }
        else{
            $email =($_POST["email"]);
        }


        if(empty($_POST['password'])){
            $passwordError = "password required";
        }
        else{
            $password =($_POST["password"]);
        }
   

	 
    $query1="select * from admin where  email='$email' and  password='$password'";
    $result1=mysqli_query($conn,$query1) or die(mysqli_error($conn));
   $row=mysqli_num_rows($result1);
$res=mysqli_fetch_array($result1);
   
	
    if($row==1) 
    {
  
      $_SESSION['name']=$res['name'];	
      $_SESSION['email']=$res['email'];	
    
      echo "<script>window.open('enquiry.php','_self')</script>";
    }
    else
   {
       echo "<script>alert('Email or password is incorrect!')</script>";
   }
 }



   
?>



<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Sapiens Clinic</title>

<link rel="shortcut icon" href="saplogo.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<center ><img class="img-fluid mt-5" src="saplogo.png" width="100px" height="100px" alt="Logo">
</center>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="saplogo.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap" >
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>

<form action="" method="POST">
<div class="form-group">
<input class="form-control" type="text" name="email" placeholder="Email">
</div>
<div class="form-group">
<input class="form-control" type="password" name="password" placeholder="Password">
</div>
<div class="form-group">
<button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
</div>
</form>

<!-- <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div> -->
<div class="login-or">
<span class="or-line"></span>
 
</div>

<!-- <div class="social-login">
<span>Login with</span>
<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
</div> -->


</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

 </html>