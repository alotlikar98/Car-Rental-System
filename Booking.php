<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: Login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Booking</title>
   <style>


.form-control{
width: 50%;
}
.custom-select{
    width: 50%;
}
   </style>
</head>
<body>
<nav class="navbar background">
        <ul class="nav-list">
            <div class="logo"><img src="icon_logo/logo.jpg" alt="logo"></div>
            
           
        </ul>
        <div class="rightNav">

        <!-- <a href="profile.php"><input type="button" class=" btn-primary" value="Profile" ></a> -->
        <a href="logout.php"><input type="button" class=" btn-primary" value="Logout" ></a>

        </div>

       
</nav>
    <section class="main-form">
    <h2 class="text-center pt-1 font-weight-bold mt-3"> Rent Car</h2>
    <div class="container " id="formsetting">


      <!--    Adding Car Details      -->
      <form method="post" action="" >
        <div class="form-group text-center" >
          <label for="fromdate">From Date</label>
         <center> <input type="date" class="form-control text-center"  name="fromdate" required="required" ></center>
        </div>
        <div class="form-group text-center" >
          <label for="tilldate">Till Date</label>
         <center> <input type="date" class="form-control text-center"  name="tilldate" required="required"></center>
        </div>
        <div class="form-group text-center">
      <label  for="payment">Payment</label>
      <center> <select class="custom-select mr-sm-2" name="payment" required="required" ></center>
        <option selected>Choose...</option>
        <option value="cash">Cash</option>
        <option value="cheque">Cheque</option>
        <option value="Debit/CreditCard">Debit/CreditCard</option>
      </select>
    </div>

        <div class="form-group">
           
           <center><input type="submit" class="btn btn-success px-3 mt-4" name="book" value="Book Details"> </center>
           <br>
           <br>
           <br>
         </div>
       

         
</div>
</section>
<div class="form-group mt-4">
         <center><a href="Dashboard.php"><input type="button" class=" btn-primary" value="Back" ></a></center>
         
         </div>
<?php
    include 'footer.php';

?>


</body>
</html>

<?php

if(isset($_POST['book'])){
  $fromdate=$_POST['fromdate'];
  $tilldate=$_POST['tilldate'];
  $payment=$_POST['payment'];


  if((!isset($fromdate)) ||(empty($fromdate)) ){
    $fromdate='fromdate';
  }
  if((!isset($tilldate)) ||(empty($tilldate)) ){
    $tilldate='tilldate';
  }
  if((!isset($payment)) ||(empty($payment)) ){
    $payment='payment';
  }
  $conn=mysqli_connect('localhost','root','','carrental');


  $sql="insert into rentcar (fromdate,tilldate,payment) values('$fromdate','$tilldate','$payment')";
  $run=mysqli_query($conn,$sql);
  if($run){
  
    echo "<script language='javascript'>"; 
    echo "alert('Your Book has been done sucessfully please check your email id')";
    echo "</script>"; 
    header('Location: Dashboard.php');
    } 
    else{
      echo "<script language='javascript'>";
     echo "alert('Error! please enter your correct details')";
     echo "</script>"; 
    }

}

?>