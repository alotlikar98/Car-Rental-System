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
    <title>Welcome</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

.form-control{
width: 50%;
}
    </style>
</head>

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
        <a href="profile.php"><input type="button" class=" btn-primary" value="Profile" ></a>
        <a href="logout.php"><input type="button" class=" btn-primary" value="Logout" ></a>


        </div>

       
 </nav>

 <section class="background firstSection" id="#Home">
        <div class="box-main">
            <div class="firstHalf">
   <center> <p class="text-big"> 
    Welcome  <?php echo $_SESSION['username']?>  </p> </center>
                
               
            </div>

        
        </section>

    <section class="section">
    <div class="paras">
    <h1 class="text-large"style="margin-bottom: 20px;"id="about"><b>About</b></h1>
    <p class="text-smalls">After more than 20 years in business, we decided to give a fresher look to our brand and our services. With our fully renewed fleet of vehicles, we are ready to meet all expectations and requirements.</p>
    <p style="text-align:center; font-weight:bolder; margin-bottom:10px;font-size: 20px;">Why Choose Us?</p>
    <p class="text-smalls">  If you want to book directly through a supplier, and not through a broker – choose Renaissance Rent A Car </p>
    <p class="text-smalls">this will give you better flexibility in terms of vehicle choices;  </p>
    <p class="text-smalls"> vehicle make and model will be confirmed, and not “similar” to those you selected; </p>
    <p class="text-smalls"> you can directly negotiate some of the terms and conditions, payment options, especially if you require unique or long term rental service;  </p>
    <p class="text-smalls">  you can book “commission free”; </p>
    <p class="text-smalls"> you can reach us 24/7 on our mobile numbers; </p>
    <p class="text-smalls"> you can call us free from the “Free call” service on our website;</p> </p>

    </div>
    </section>
   


    <section class="section" id="CarList">
    <div class="paras">

    <h1 class="text-large"> <b>Car List</b> </h1>
    <div class="container py-5">
    <div class="row mt-4">
    <?php
   $conn = mysqli_connect('localhost', 'root' );
  
   
   $db = mysqli_select_db($conn, 'carrental');
    $querry= 'SELECT * FROM addcar';
    $querry_run=mysqli_query($conn,$querry);
    $check_car=mysqli_num_rows($querry_run)>0;

    if($check_car){

        while($row=mysqli_fetch_assoc($querry_run)){



            
    ?>
    <div class="col-md-3 mt-4">
    <div class="card">
    <img src="Admin/<?php echo $row['images']; ?>"  width="250px" height="150px" alt="Car Images">
    <div class="card-body">
    <center>
    <h4 class="card-title"> <?php echo $row['carname']; ?>   </h4>
    <p class="card-text "> <b> Model:</b><?php echo $row['model']; ?> </p>
    <p class="card-text"> <b>Fuel: </b><?php echo $row['fueltype']; ?> </p>
    <p class="card-text"> <b>Seating Cap:</b><?php echo $row['seating']; ?> </p>
    <p class="card-text"> <b>Price: </b><?php echo $row['price']; ?> </p>
    </center>
    <center><a href="Booking.php?Book= <?php echo $row['c_id'];?> "> <input type="button" class=" btn-primary" value="Rent" ></a></center>

    </div>
    </div>
    
    </div>

    <?php
        }}
    ?>
    
    </div>
    
    </div>
    
    
    </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="text-center"> <b> Contact Us</b></h1>
        <form method="post" action="" >
        <div class="form-group text-center" >
          <label for="name">Name</label>
        <center> <input type="text" class="form-control text-center mb-3" placeholder="Enter your name" name="cname" required="required"> </center> 
        </div>
        <div class="form-group text-center" >
        <label for="email">Email</label>
         <center> <input type="text" class="form-control text-center" placeholder="Enter your email" name="cemail"required="required" > </center>
        </div>
        <div class="form-group text-center" >
    
        <div class="form-group text-center" >
        <label for="descrip">Message</label>
        <center>  <textarea class="form-control text-center" name="cdescrip" rows="3" placeholder="Enter your message"></textarea> </center>
        </div>
         
           <center> <input type="submit" class="btn btn-success px-3 mt-4" name="submit" value="contact"></center>
           <div class="form-group">
           
          
         </div>
    </form>
    </section>

    <?php
    include 'footer.php';

?>
<!-- Script Tags -->
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['cname'];
    $email=$_POST['cemail'];
    $description=$_POST['cdescrip'];

    if((!isset($name)) ||(empty($name)) ){
        $name='cname';
      }
    if((!isset($email)) ||(empty($email)) ){
        $email='cemail';
      }
    if((!isset($description)) ||(empty($description)) ){
        $description='cdescrip';
      }
      $conn=mysqli_connect('localhost','root','','carrental');

      $sql="insert into contactus (cname,cemail,cdescrip) values('$name','$email','$description')";
      $run=mysqli_query($conn,$sql);

      if($run){
        echo "<script language='javascript'>"; 
       echo "alert('Sucess!!  We will let you know')";
       echo "</script>"; 
        } 
        else{
            echo "<script language='javascript'>"; 
             echo "alert('Error! Enter your Correct Detail')";
             echo "</script>"; 
    
        }
    

}




?>