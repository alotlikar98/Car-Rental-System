<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="icon" href="../admin-with-cogwheels.png" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:lightgray;
  
  
 
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.wrapper{
    text-align: center;
    margin: 40px 420px;
    padding: 80px;
}


input[type=text], input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}
.forms{

    padding: 30px;
}




    </style>
</head>
<body>
<div class="wrapper">

        <h2>Admin-Login</h2>
  
        <form action="Admin.php" method="post" class="forms">

            <div class="form-group">

                <label> <b> USERNAME: </b> </label>

                <input type="text" name="adminname" required="required" >

          
            </div>    
            <div class="form-group">
            
                <label> <b> PASSWORD: </b> </label>

                <input type="password" name="password" required="required" >

            </div>
            <div class="form-group">

                <input type="submit" class="btn btn-primary" value="Login">

            </div>
            <p>This Site is only for Admin Only. User can Register Through <a href="../signup.php">Here</a> </p>

        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include_once('database.php'); 
   
function test_input($data) { 
      
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data; 
} 
   
if ($_SERVER["REQUEST_METHOD"]== "POST") { 
      
    $adminname = test_input($_POST["adminname"]); 
    $password = test_input($_POST["password"]); 
    $stmt = $conn->prepare("SELECT * FROM admin"); 
    $stmt->execute(); 
    $users = $stmt->fetchAll(); 
      
    foreach($users as $user) { 
          
        if(($user['adminname'] == $adminname) &&  
            ($user['password'] == $password)) { 
                header("Location: AddCar.php"); 
        } 
        else { 
            echo "<script language='javascript'>"; 
            echo "alert('WRONG INFORMATION')"; 
            echo "</script>"; 
            die(); 
        } 
    } 
} 

?>