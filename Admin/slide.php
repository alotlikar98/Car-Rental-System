<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/sidebar.css" >
</head>
<style>
  
  .imge{
width:50px;
height:50px;
margin-left:75px;
margin-bottom:20px;
}

  
  </style>
<body>
<div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <img src="../icon_logo/logo.jpg" alt="logo" class="imge">
        <a href="AddCar.php">Add Car Detail</a>
        <br>
        <a href="DisplayUser.php">Display User</a>
        <br>
        <a href="DisplayCar.php">Display Car</a>
        <br>
        <a href="Contactus.php">ContactUs Querry</a>
       <br>
        <a href="Logout.php">Log Out</a>
      </div>
      
      <div id="main">
        <button class="openbtn" onclick="openNav()">☰ </button>  
       
      </div>
      <script src="js/slide.js"></script>
</body>
</html>