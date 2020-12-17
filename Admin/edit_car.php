<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"carrental");
$carname="";
$fuel="";
$seating="";
$price="";
$ownername="";
$contact="";
$image="";  
$query = "select * from addcar where c_id = $_GET[edit_car]";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
$carname=$row['carname'];
$model=$row['model'];
$fuel=$row['fueltype'];
$seating=$row['seating'];
$price=$row['price']; 
$image=$row['images'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
    
    <link rel="icon" href="../admin-with-cogwheels.png" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
   .text-right{
    margin-right: 484px;
   }
   </style>
</head>
<body>
<?php include 'slide.php';?>




<!--    Display Car Details      -->
<section class="main-form">
<h2 class="text-center text-danger pt-3 font-weight-bold">Car Rental System</h2>
<div class="container bg-danger" id="formsetting">
<h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Edit Car Details</h3>

<form method="post" action="" enctype="multipart/form-data">
        <div class="form-group" >
          <label for="carname">Car Name</label>
          <input type="text" class="form-control text-center" placeholder="Car Name" name="carname" value= "<?php echo $carname; ?>" >
        </div>
        <div class="form-group" >
          <label for="model">model</label>
          <input type="text" class="form-control text-center" placeholder="model" name="model" >
        </div>

      
        <div class="form-group">
          <label for="fueltype">Fuel Type</label>
          <input type="text" class="form-control text-center"  placeholder=" Fuel" name="fueltype" value= "<?php echo $fuel ;?>">
        </div>
        
        <div class="form-group">
          <label for="seating">Seating Capacity</label>
          <input type="number" class="form-control"  min="1" max="5" name="seating" value= "<?php echo $seating; ?>">
        </div>

        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control text-center"  placeholder="Price" name="price" value= "<?php echo $price; ?>">
        </div>

        
        <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="images" class="form-control" value="<?php echo $image; ?>"/> 
        
        
        </div>
  

          <div class="form-group  text-right">
           
            <input type="submit" class="btn btn-success " name="update" value="Update Details">
            
          </div>
          
          
      
      </form>

        </div>

</section>


      
    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         
</body>
</html>
<?php
if(isset($_POST['update'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"carrental");
  $query = "update addcar set carname = '$_POST[carname]','model=$_POST[model]','fueltype=$_POST[fueltype]','seating=$_POST[seating]','price = $_POST[price]','images=$_POST[images]' where c_id = $_GET[edit_car]";
  $query_run = mysqli_query($connection,$query);
  header("location:DisplayCar.php");
}
?>