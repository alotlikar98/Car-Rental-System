<?php

include '../db.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User Login</title>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="../admin-with-cogwheels.png" type="image/icon type">
</head>

<body>
<?php include 'slide.php'; ?>
       <!--    Display  User Register  Details      -->
       <section class="main-form">
<h2 class="text-center text-danger pt-3 font-weight-bold">Car Rental System</h2>
<div class="container bg-danger" id="formsetting">
<h3 class="text-center text-white pb-4 pt-2 font-weight-bold"> User Register Details</h3>


<div class="row">
    
    <div class="col-md-12 col-sm-12 col-12">
        <table class="table table-bordered table-white ">
        <thead>
        <tr>
        <th class=" text-white">Sno</th>
        <th class=" text-white">User Name</th>
        <th class=" text-white">Full Name</th>
    
        <th class=" text-white">Email</th>
        <th class=" text-white">Contact</th>
       

        </tr>
        </thead>
    <!--php -->
    <?php
    $conn=mysqli_connect('localhost','root','','carrental');
    $sql="SELECT * FROM registers";
    $run=mysqli_query($conn,$sql);
    $i=1;
    while($row=mysqli_fetch_assoc($run)){




?>


        <tbody>
        <tr>
        <td class="text-white"> <?php echo $i++;     ?></td>
        <td class="text-white"> <?php echo $row['username'];  ?></td>
        <td class="text-white"><?php echo $row['fname'];  ?></td>
        <td class="text-white"><?php echo $row['email'];  ?></td>
        <td class="text-white"><?php echo $row['contact'];  ?></td>

        
        
        </tr>
        
        
        </tbody>
<?php } ?>
        </table>
    

        </div>
        </div>
        </div>

</section>

       
     
     
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         
</body>
</html>