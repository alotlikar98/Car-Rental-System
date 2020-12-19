<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Message</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
include 'slide.php';
?>
<section class="main-form">
<h2 class="text-center text-dark pb-3 font-weight-bold">Car Rental System</h2>
<div class="container " id="formsetting">
<h3 class="text-center text-dark pb-4 pt-2 font-weight-bold"> User Message</h3>


<div class="row">
    
    <div class="col-md-12 col-sm-12 col-12">
        <table class="table table-bordered  ">
        <thead>
        <tr>
       
        <th class=" text-dark">check</th>
        <th class=" text-dark">Sno</th>
        <th class=" text-dark"> Name</th>
        <th class=" text-dark"> Email</th>
        <th class=" text-dark">Message</th>
        <th class=" text-dark">Action</th>
        
       

        </tr>
        </thead>
    <!--php -->
    <?php
    $conn=mysqli_connect('localhost','root','','carrental');
    $i=1;
    $select = "SELECT registers.id,registers.fname,registers.email ,message.descrip
    FROM registers JOIN message ON registers.m_id=message.m_id ";
    	$result = $conn->query($select);
        while($row = $result->fetch_assoc()){
        
           


?>


        <tbody>
        <tr>
      <td><input type="checkbox" class="checkbox" /></td>
      <td class="text-dark font-weight-bold"><?php echo $i++?></td>
      <td class="text-dark font-weight-bold"><?php echo $row['fname'] ?></td>
     <td class="text-dark font-weight-bold"><?php echo $row['email'] ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['descrip'] ?></td>
        <td>
        <a href="#"><img src="../icon_logo/edit.png" style="width:20px; height: 20px;"  ></a>
		||
		<a href="#"><img src="../icon_logo/close.png" style="width:20px; height: 20px;"  ></a>
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