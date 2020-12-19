<?php
	session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
		header("location: Login.php");
		exit;
	}
	else{
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"carrental");
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
	$query = "select * from registers where username = '$_SESSION[username]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['fname'];
		$email = $row['email'];
		$mobile = $row['contact'];
		$username=$row['username'];
	}}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/index.css">
	
  
</head>
<style>
.form-control{
	width: 50%;
}
.text-center{
	font-size: 20px;
	padding-top: 13px;
}
</style>
<body>
<nav class="navbar background">
        <ul class="nav-list">
            <div class="logo"><img src="icon_logo/logo.jpg" alt="logo"></div>
            <li><a href="#Home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#CarList">Car List</a></li>
          
        </ul>
        <div class="rightNav">
        <a href="Dashboard.php"><input type="button" class=" btn-primary" value="Home" ></a>
        <a href="logout.php"><input type="button" class=" btn-primary" value="Logout" ></a>


        </div>

       
 </nav>
 <section class="main-form">

<div class="container " id="formsetting">
<h3 class="text-center text-white pb-4 pt-3 font-weight-bold text-dark" >Display Profile</h3>
 <form>
		<center>
        <div class="form-group" >
          <label> <b> Name </b></label>
          <input type="text" class="form-control text-center" value="<?php echo $name;?>" disabled >
        </div>
        <div class="form-group" >
          <label > <b> Username </b></label>
          <input type="text" class="form-control text-center"  value="<?php echo $username;?>" disabled >
        </div>
		<div class="form-group pb-2" >
          <label > <b> Email </b></label>
          <input type="text" class="form-control text-center"  value="<?php echo $email;?>" disabled>
        </div>
	
		<div class="form-group" >
          <label > <b>Contact </b></label>
          <input type="text" class="form-control text-center"  value="<?php echo $mobile;?>" disabled >
        </div>
		
		</center>
</form>
</div>
</section>



<section class="main-form">

<div class="container"  id="formsetting">
<h3 class="text-center text-dark pb-4 pt-4 font-weight-bolder">Booking Details</h3>


<div class="row">
    
    <div class="col-md-12 col-sm-12 col-12">
        <table class="table table-bordered table-white ">
        <thead>
        <tr>
        
        <th>Name</th>
        <th>email</th>
		<th>carname</th> 
		<th>Model</th> 
        <th>price</th>
        <th>from date</th>
        <th>till date</th>
        <th>payment</th> 
         <th>Action</th>    
        </tr>
        </thead>
    <!--php -->
    <?php
    $conn=mysqli_connect('localhost','root','','carrental');
    $sql = "SELECT registers.fname,registers.email,addcar.carname,addcar.model,addcar.price,rentcar.fromdate,rentcar.tilldate,rentcar.payment FROM registers JOIN addcar ON  addcar.reg_id=registers.id JOIN rentcar ON rentcar.r_id=addcar.ci_id WHERE username= '$_SESSION[username]'";
    if ($result = $conn->query($sql)) {

while(($row = $result->fetch_assoc())!== null){




?>


        <tbody>
        <tr>
		<td class="text-dark font-weight-bold"> <?php echo $row['fname'];  ?></td>
		<td class="text-dark font-weight-bold"> <?php echo $row['email'];  ?></td>
        <td class="text-dark font-weight-bold"> <?php echo $row['carname'];  ?></td>
		<td class="text-dark font-weight-bold"> <?php echo $row['model'];  ?></td>
        <td class="text-dark font-weight-bold"><?php echo $row['price'];  ?></td>
		<td class="text-dark font-weight-bold"> <?php echo $row['fromdate'];  ?></td>
		<td class="text-dark font-weight-bold"> <?php echo $row['tilldate'];  ?></td>
		<td class="text-dark font-weight-bold"> <?php echo $row['payment'];  ?></td>
    
        <td>
		<a href="#"><img src="icon_logo/edit.png" style="width:20px; height: 20px;"  ></a>
		||
		<a href="#"><img src="icon_logo/close.png" style="width:20px; height: 20px;"  ></a>
		
        </td>
        
        </tr>
        
        
        </tbody>
<?php }} ?>
        </table>
    

        </div>
        </div>
        </div>

</section>
<center>
<div class="form-group" >
		<a href="Dashboard.php"> <input type="button" class="btn btn-success px-3 mt-4"value="Go Back"></a>
        </div>


		</center>
		<br> <br>
	
<?php

include 'footer.php';
?>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  
</body>
</html>