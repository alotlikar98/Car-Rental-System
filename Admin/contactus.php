<?php
include '../db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <title>Contact US</title>
</head>
<body>
<?php include 'slide.php'; ?>
<section class="main-form">
<h2 class="text-center text-danger pt-3 font-weight-bold">Car Rental System</h2>
<div class="container bg-danger" id="formsetting">
<h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Contact Us Query</h3>


<div class="row">
    
    <div class="col-md-12 col-sm-12 col-12">
        <table class="table table-bordered table-white ">
        <thead>
        <tr>
        <th class="text-bold">Sno</th>
        <th class="text-bold">Name</th>
        <th class="text-bold">Email</th>
        <th class="text-bold">Messsage</th>
        </tr>
        <tbody>
<?php
 $conn=mysqli_connect('localhost','root','','carrental');
 $sql="SELECT * FROM contactus";
 $run=mysqli_query($conn,$sql);
 $i=1;
 while($row=mysqli_fetch_assoc($run)){



?>
        <td class="text-white"><?php echo $i++;     ?></td>
        <td class="text-white"><?php echo  $row['cname'];     ?></td>
        <td class="text-white"><?php echo $row['cemail'];  ?></td>
        <td class="text-white"><?php  echo $row['cdescrip']; ?></td>
        </tbody>
        <?php } ?>
        </thead>

        </table>
</body>
</html>