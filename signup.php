<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="person-icon.png" type="image/icon type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>

    .container{
    margin-top: 55px;
    }
    body{
    background: url(image/carimg.jpg);
}
  
    
    </style>
</head>
<body>
<div class="container">
<h3 class="text-black text-center pt-5 pb-4 font-weight-bold">CAR RENTAL SYSTEM</h3>
<h3 class="text-black text-center pt-5 pb-4 font-weight-bold">Register</h3>
    <div class="row">
        <div class="col-md-4 offset-md-4">
        
        <form action="signup.php" method="post">

        <div class="form-group text-center font-weight-bold text-white bg-dark">
        <label for="fname"> Full Name</label>
        <input type="text" name="fname" id="fname" class="form-control form-control-lg text-center"placeholder="Enter your First Name " required="required">
        </div>

        <div class="form-group text-center font-weight-bold text-white bg-dark">
        <label for="username"> username</label>
        <input type="text" name="username" id="username" class="form-control form-control-lg text-center"placeholder="Enter your username" required="required">
        </div>
        <div class="form-group text-center font-weight-bold text-white bg-dark">
        <label for="email"> email</label>
        <input type="text" name="email"  id = "email"class="form-control form-control-lg text-center"placeholder="Enter your username" required="required">
        </div>
        <div class="form-group text-center font-weight-bold text-white bg-dark">
        <label for="contact"> Contactno</label>
        <input type="text" name="contact" id="contact" class="form-control form-control-lg text-center"placeholder="Enter your username" required="required">
        </div>

        <div class="form-group text-center font-weight-bold text-white bg-dark">
        <label for="password"> Password</label>
        <input type="password" name="password" id="password" class="form-control form-control-lg text-center"placeholder="Enter your password" required="required">
        </div>

        <div class="form-group text-center font-weight-bold text-white bg-dark">
        <label for="password"> CPassword</label>
        <input type="password" name="cpassword" id="cpassword" class="form-control form-control-lg text-center"placeholder="Enter your password" required="required">
        </div>

        <div class="form-group">
        <button type="submit"  class="btn btn-primary btn-block btn-lg">Sign up</button>
    
        </div>
        <p class="text-center font-weight-bold text-white bg-dark">Already have a account<a href="Login.php">Log in</a></p>
        
        </form>
        </div>
    </div>
</div>
    
</body>
</html>

<!--  signup php tag   -->


 <?php


 if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $fname = $_POST['fname'] ;
    $username = $_POST["username"];
    $email= $_POST['email'];
     $contact=  $_POST['contact'] ;
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql="insert into registers (fname,username, email,contact,password,cpassword) values ('$fname', '$username','$email','$contact','$password',$cpassword) "; 
        $result = mysqli_query($conn, $sql);
        if ($result){
            header("location: Login.php");
        }
    }
    else{
        echo  "Passwords do not match or you are new user click on signup page";
    }
}

?>