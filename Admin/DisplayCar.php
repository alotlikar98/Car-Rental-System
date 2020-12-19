<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Car</title>
    
    <link rel="icon" href="../admin-with-cogwheels.png" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<body>
<?php include 'slide.php';?>


<!--    Display Car Details      -->
<section class="main-form">
<h2 class="text-center text-dark pb-3 font-weight-bold">Car Rental System</h2>
<div class="container " id="formsetting">
<h3 class="text-center text-dark pb-4 pt-2 font-weight-bold">View Car Details</h3>


<div class="row">
    
    <div class="col-md-12 col-sm-12 col-12">
        <table class="table table-bordered  ">
        <thead>
        <tr>
        <th>Sno</th>
        <th>Car Name</th>
        <th>Model</th>
        <th>Fuel</th>
        <th>Seating Cap</th>
        <th>Price</th>
        <th>Image</th> 
         <th>Action</th>    
        </tr>
        </thead>
    <!--php -->
    <?php
    $conn=mysqli_connect('localhost','root','','carrental');
    $sql="SELECT * FROM addcar";
    $run=mysqli_query($conn,$sql);
    $i=1;
    while($row=mysqli_fetch_assoc($run)){




?>


        <tbody>
        <tr>
        <td class="text-dark font-weight-bold"> <?php echo $i++;     ?></td>
        <td class="text-dark font-weight-bold"> <?php echo $row['carname'];  ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['model'];  ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['fueltype'];  ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['seating'];  ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['price'];  ?></td>
        <td>
        <a href="carimg/ <?php echo $row['images']; ?>">
        <img src="<?php echo $row['images'];  ?>" width="70" height="50">
        </a>
        
        
        </td>
        <td>
        
        <a href="delete_car.php?delete_car=<?php echo $row['c_id']; ?>"> <img src="../icon_logo/close.png" style="width:20px; height: 20px;"  > </a>
        </td>
        
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