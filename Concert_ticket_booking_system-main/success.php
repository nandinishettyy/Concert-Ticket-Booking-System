<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Successful Booking</title>
<?php require_once "partials/bootstrap.php";
include "config/constants.php";?>
<link rel="stylesheet" href="css/successstyle.css">
</head>
<body>
<div class="login" style="padding-top: 2%;">
<?php 
    if(isset($_POST['submit']))
    {
       
        $pay = 1;

        $sql1 = "INSERT INTO tickets SET
          concert_id = '{$_SESSION['id']}',
          quantity = '{$_SESSION['quantity']}',
          category = '{$_SESSION['category']}',
          cost = '{$_SESSION['cost']}',
          payment_status = '$pay'";

          $res = mysqli_query($conn, $sql1) ;
          echo $res;
         

          if($res)
          {
            
             $user = $_SESSION['username'];
             $cust_search = "SELECT * FROM customer WHERE username='$user'";
             //echo $user.'<br/>';
             $cust_fire = mysqli_query($conn, $cust_search);
             $row1 = mysqli_fetch_array($cust_fire);
             $cust_mail = $row1['email'];
             $to_email = '$cust_mail';
             $subject = "Succesful payment!";
             $body = "Hi, These are your tickets for the concert. Meet you there
                 Concert name : ".$_SESSION['artist'].'<br/>'."Venue : ".$_SESSION['venue'].'<br/>'.
                 "Date : ".$_SESSION['date'].'<br/>'."Time : ".$_SESSION['time'].'<br/>'."Total cost : ".$_SESSION['cost'].'<br/>';
             $headers = "From : concertsbooking.musicana1234@gmail.com";
             echo "<script>alert('Hurray! Tickets Booked!')</script> ";
     
         if (mail($to_email, $subject, $body, $headers)) {
             echo "Email successfully sent to".$to_email."...";
         } else {
             echo "Email sending failed...";
         }
          
            ?>
            <script>
              location.replace("success.php");
            </script> 
            <?php
          
           
            
           }
           else
           {
            echo "<script>alert('Failed to place order :(')</script> ";
           
           }

        //********************* */ SEND EMAIL HERE ************************
       
    }
?>
	
	<form action="home.php" style="border: 1px solid;">
		<div class="head">
			<h1><b>Awesome!</b></h1>
		</div>
		<div class="bd1" style="text-align: center; padding: 14%;">
			<p style="padding-bottom: 10%;">Your transaction has been successful. <br>Check your email for booking details.</P>
			<a href="home.php">Click here to goto Home Page.</a>  
		</div>
	</form>
</div>


</body>
</html>