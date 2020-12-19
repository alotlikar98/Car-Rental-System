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
<h2 class="text-center text-dark pt-3 font-weight-bold">Car Rental System</h2>
<div class="container " id="formsetting">
<h3 class="text-center text-dark pb-4 pt-2 font-weight-bold">Contact Us Query</h3>


<div class="row">
    
    <div class="col-md-12 col-sm-12 col-12">
        <table class="table table-bordered  ">
        <thead>
        <tr>
         <th >Check</th>
        <th >Sno</th>
        <th>Name</th>
        <th>Email</th>
        <th>Messsage</th>
        <th>Action</th>
        </tr>
        <tbody>
<?php
 $conn=mysqli_connect('localhost','root','','carrental');
 $sql="SELECT * FROM contactus";
 $run=mysqli_query($conn,$sql);
 $i=1;
 while($row=mysqli_fetch_assoc($run)){



?>
          <td><input type="checkbox" class="checkbox" /></td>
        <td class="text-dark font-weight-bold"><?php echo $i++;     ?></td>
        <td class="text-dark font-weight-bold"><?php echo  $row['cname'];     ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['cemail'];  ?></td>
        <td class="text-dark font-weight-bold"><?php  echo $row['cdescrip']; ?></td>
        <td>
        <a href="#"><img src="../icon_logo/edit.png" style="width:20px; height: 20px;"  ></a>
		||
		<a href="#"><img src="../icon_logo/close.png" style="width:20px; height: 20px;"  ></a>
        </td>
        </tbody>
        <?php } ?>
        </thead>

        </table>
</body>
</html>