<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
include 'slide.php';
?>
<section class="main-form">
<h2 class="text-center text-dark pb-3 font-weight-bold">Car Rental System</h2>
<div class="container " id="formsetting">
<h3 class="text-center text-dark pb-5 pt-2 font-weight-bold"> Manage Booking Details</h3>


<div class="row">
    
    <div class="col-md-12 col-sm-12 col-12">
        <table class="table table-bordered  ">
        <thead>
        <tr>

        <th>Sno</th>
        <th> Name</th>
        <th> Email</th>
        <th>Contact</th>
        <th>Carname</th>
        <th>Model</th>
        <th>Price</th>
        <th>FromDate</th>
        <th>TillDate</th>
        <th>Payment</th>
        <th>Action</th>

        </tr>
        </thead>
    <!--php -->
    <?php
    $conn=mysqli_connect('localhost','root','','carrental');
    $i=1;
    
    $sql = "SELECT registers.fname,registers.email,registers.contact,addcar.carname,addcar.model,addcar.price,rentcar.fromdate,rentcar.tilldate,rentcar.payment FROM registers JOIN addcar ON  addcar.reg_id=registers.id JOIN rentcar ON rentcar.r_id=addcar.ci_id ";
    if ($result = $conn->query($sql)) {

        while(($row = $result->fetch_assoc())!== null){
        
           


?>


        <tbody>
        <tr>
        
      <td class="text-dark font-weight-bold"><?php echo $i++?></td>
      <td class="text-dark font-weight-bold"><?php echo $row['fname']; ?></td>
      <td class="text-dark font-weight-bold"><?php echo $row['email']; ?></td>
      <td class="text-dark font-weight-bold"><?php echo $row['contact']; ?></td>

        <td class="text-dark font-weight-bold"><?php echo $row['carname']; ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['model']; ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['price']; ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['fromdate']; ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['tilldate']; ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['payment'];?></td>
        <td>
        <a href="#"><img src="../icon_logo/edit.png" style="width:20px; height: 20px;"  ></a>
		||
		<a href="#"><img src="../icon_logo/close.png" style="width:20px; height: 20px;"  ></a>
        
        </td>

        
        
        </tr>
        
        
        </tbody>
<?php }
 $result->free();
     }
?>
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