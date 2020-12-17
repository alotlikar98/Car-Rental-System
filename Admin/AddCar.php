<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car Detail</title>
    
    <link rel="icon" href="../icon_logo/admin-with-cogwheels.png" type="image/icon type">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>

body{
  background-color:#e3d4d3;
}
  .header{
    text-align: center;
    margin-top: -28px;
    margin-bottom: 35px;
  }
.input-group{
  text-align: center;
  margin: auto;
  width: 60%;
}
.form-group{
  margin: auto;
  text-align: center;
  margin-top: -11px;
  font-weight: bold;
  align-items: center;
}
.form-control{
  margin: auto;
  width: 50%;
  margin-bottom: 14px;
}



</style>

</head>
<body>
 <!-- Sidebar -->
<?php include 'slide.php'; ?>

  <section class="main-form">
<h2 class="text-center text-danger pt-1 font-weight-bold">Car Rental System</h2>
<div class="container bg-danger" id="formsetting">
<h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Add Car Details</h3>

      <!--    Adding Car Details      -->
      <form method="post" action="AddCar.php" enctype="multipart/form-data">
        <div class="form-group" >
          <label for="carname">Car Name</label>
          <input type="text" class="form-control text-center" placeholder="Car Name" name="carname" >
        </div>
        <div class="form-group" >
          <label for="model">model</label>
          <input type="text" class="form-control text-center" placeholder="model" name="model" >
        </div>

      
        <div class="form-group">
          <label for="fueltype">Fuel Type</label>
          <input type="text" class="form-control text-center"  placeholder=" Fuel" name="fueltype">
        </div>
        
        <div class="form-group">
          <label for="seating">Seating Capacity</label>
          <input type="number" class="form-control"  min="1" max="5" name="seating">
        </div>

        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control text-center"  placeholder="Price" name="price">
        </div>

     

        <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="images" class="form-control" value=""/> 
        
        
        </div>

          <div class="form-group">
           
            <input type="submit" class="btn btn-success px-5 mt-4" name="add" value="Add Details">
            
          </div>

         <br>

         <br>
          
      
      </form>

      </div>

</section>

    
       <!-- Script Tags -->
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         
</body>
</html>


<?php
 $match_error=$size_error= '';

if(isset($_POST['add'])){
  $carname =$_POST['carname']; 

  $model =$_POST['model']; 

  $fuel=$_POST['fueltype'];

  $seating=$_POST['seating'];

  $price=$_POST['price'];
 
  



 

  $image_tmp=$_FILES['images']['tmp_name'];
  $folder = "carimg/".basename($_FILES['images']['name']);


if((!isset($carname)) ||(empty($carname)) ){
    $carname='carname';
  }
  if((!isset($model)) ||(empty($model)) ){
    $model='model';
  }
  
if((!isset($fuel)) ||(empty($fuel)) ){
  $fuel='fueltype';
}

if((!isset($price)) ||(empty($price)) ){
  $price='price';
}
 



       move_uploaded_file($image_tmp,$folder);
       $conn=mysqli_connect('localhost','root','','carrental');
       
       $sql= "insert into addcar (carname,model,fueltype,seating,price,images) values ('$carname','$model','$fuel','$seating','$price','$folder')";
       $run=mysqli_query($conn,$sql);
      
    
       if($run){
        echo "<script language='javascript'>"; 
        echo "alert('Record Added Sucessfully')";
        echo "</script>"; 
      
       } 
       else{
        echo "<script language='javascript'>"; 
        echo "alert('Error!')";
        echo "</script>"; 

       }


  }
   

?>