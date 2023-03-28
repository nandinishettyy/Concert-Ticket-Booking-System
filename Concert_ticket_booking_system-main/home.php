<?php  
  session_start();
  if(!isset($_SESSION['username'])){
    echo "<script>alert('You have logged out, please login to continue!')</script> ";
   ?>
   <script>location.replace('index.php');</script>
   <?php
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>CONCERT TICKET BOOKING </title>
  <link rel="stylesheet" href="css/style.css" />
 <?php
 include("partials/bootstrap.php");
 if(isset($_SESSION['add']))
 {
   echo $_SESSION['add'];
   unset($_SESSION['add']);
   
 }
 ?>
</head>

<body>
  <header>
    <?php
    include('partials/navbar.php');
    ?>

    <div class="back">

    <div class="welcome-text">
      <h1>MUSICANA</h1></div>
      <div>
      <p class="tagline">Adding joy through music...</p>

     <div class="booking"> <button type="button" class="btn "><a href="concerts.php">BOOK NOW!!!</a></button> </div>
    </div>
    
  </header>

</body>

</html>