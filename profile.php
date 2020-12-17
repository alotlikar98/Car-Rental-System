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
	font-size: 25px;
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
<h3 class="text-center text-white pb-4 pt-2 font-weight-bold text-dark" >Display Profile</h3>
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
		<div class="form-group" >
          <label > <b> Email </b></label>
          <input type="text" class="form-control text-center"  value="<?php echo $email;?>" disabled>
        </div>
	
		<div class="form-group" >
          <label > <b>Contact </b></label>
          <input type="text" class="form-control text-center"  value="<?php echo $mobile;?>" disabled >
        </div>
		<div class="form-group" >
		<a href="Dashboard.php"> <input type="button" class="btn btn-success px-4 mt-4"value="Go Back"></a>
        </div>
		</center>
</form>
</div>
</section>
	

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>