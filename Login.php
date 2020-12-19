<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
<h3 class="text-black text-center pt-5 pb-4 font-weight-bold">Login</h3>
    <div class="row">
        <div class="col-md-4 offset-md-4">
        <form action="Login.php" method="post">
       

        <div class="form-group text-center font-weight-bold text-white bg-dark">
        <label for="username"> Username</label>
        <input type="text" name="username" id="username" class="form-control form-control-lg text-center" placeholder="Enter your Username" required="required">
        </div>


        <div class="form-group text-center font-weight-bold text-white bg-dark">
        <label for="password"> Password</label>
        <input type="password" name="password" id="password" class="form-control form-control-lg text-center" placeholder="Enter your Password" required="required">
        </div>

        <div class="form-group ">
        <button type="submit"  class="btn btn-primary btn-block btn-lg">Log in</button>
    
        </div>
        <p class="text-center text-white bg-dark">New  member <a href="Signup.php">Sign Up</a></p>
        
        
        </form>
        </div>
    </div>
</div>


<!-- Script tag -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>""
    
</body>
</html>
<?php
 require_once 'db.php';
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from registers where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: Dashboard.php");

    } 
    else{
    
        echo "<script> window.open('Login.php?error=login failed ' ,'_self') </script>";
    }
}
    
 




?>

