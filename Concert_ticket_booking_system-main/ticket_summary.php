<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Booking </title>
    <link rel="stylesheet" href="css/style3.css" />
    <?php
      include("partials/bootstrap.php");
      // include "config/constants.php";
    ?>
  </head>
  <body>
    <div class="ticket-booking">
      <h1 style="text-align:center">Book Tickets</h1>
      <?php
        if(isset($_GET['ID']))
        {
          include "config/constants.php";
          $ID = mysqli_real_escape_string($conn, $_GET['ID']);
         // echo $ID;
          
          $sql = "SELECT * FROM concert WHERE concert_id = '$ID'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
       }
       $_SESSION['venue'] = $row['venue_name'];
       $_SESSION['artist'] = $row['artist_name'];
       $_SESSION['date'] = $row['date'];
       $_SESSION['time'] = $row['time'];
       $_SESSION['id'] = $ID;
       
      ?>
     
      <form action="" method="POST">
        <p ><span class="lab">Concert Artist: </span><?php echo $row['artist_name']?><br /></p>
        <p ><span class="lab">Venue: </span><?php echo $row['venue_name']?><br /></p>
        <p ><span class="lab">Event date: </span><?php echo $row['date']?><br /></p>
        <p ><span class="lab">Event time: </span><?php echo $row['time']?><br /></p>
        <label for="quantity"><p class="lab">No Of Tickets: </p></label>
        <input type="number" id="quantity" name="quantity" min="1" max="20" required><br/>
        <p><span class="lab">Ticket Category :</span></p>
        <input type="radio" id="cat1" name="category" value="1" required> <label for="cat1">VIP (Rs.1500)</label><br />
        <input type="radio" id="cat2" name="category" value="2"> <label for="cat2">Front Row (Rs.850)</label><br />
        <input type="radio" id="cat3" name="category" value="3"> <label for="cat3">General Admission (Rs.680)</label><br />
        <input type="submit" name="submit" value="Payment">
      </form>
    </div>
    <?php 
       if(isset($_POST['submit']))
        {
         
         
          // ********* NEEDED TO OBTAIN EMAIL ID FOR MAILING PURPOSE
          $user = $_SESSION['username'];
          $cust_search = "SELECT * FROM customer WHERE username='$user'";
          //echo $user.'<br/>';
          $cust_fire = mysqli_query($conn, $cust_search);
          $row1 = mysqli_fetch_array($cust_fire);
          $cust_id = $row1['customer_id'];

          $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
          $category = mysqli_real_escape_string($conn, $_POST['category']);
          
          
          $_SESSION['quantity'] = $quantity;

          if ($category == 1) {
              $cost = $quantity * 1500;
          }
          if ($category == 2) {
              $cost = $quantity * 850;
          }
          if ($category == 3) {
              $cost = $quantity * 680;
          }
          
          $_SESSION['cost'] = $cost;
          $_SESSION['category'] = $category;

         
          // echo $quantity.'<br/>';
          // echo $category.'<br/>';
          // echo $cost.'<br/>';
          // echo $ID.'<br/>';
          // echo $cust_id.'<br/>';
         

         
      
          // echo $_SESSION['quantity'].'<br/>';
          // echo $_SESSION['category'].'<br/>';
          // echo $_SESSION['cost'].'<br/>';
          // echo $_SESSION['id'].'<br/>';
          // echo $_SESSION['cust_id'].'<br/>';
          ?>
          <script>
             location.replace("payment.php");
          </script>
          <?php
          
         
         
         
          
          // 
          //
          //
          // 
          // echo $cost;
          // $pay = 0;
          // $sql1 = "INSERT INTO tickets SET
          // customer_id = '$cust_id',
          // concert_id = '$ID',
          // quantity = '$quantity',
          // category = '$category',
          // cost = '$cost',
          // payment_status = '$pay'";

          // $res = mysqli_query($conn, $sql1) ;
         

          // if($res==TRUE)
          // {
          //    echo "<script>alert('Order placed')</script> ";
          
          
           
            
          //  }
          //  else
          //  {
          //   echo "<script>alert('Failed to place order :(')</script> ";
          //   // //Failed to insert
          //   // $_SESSION['add'] = "Failed to add New User";
          //   // //redirect page to main page
          //   // header("location:".SITEURL.'signup.php');
          //  }

        }
      ?>
  </body>
</html>