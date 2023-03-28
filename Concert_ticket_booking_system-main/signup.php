<?php 
session_start();
?>

<html>
  <head>
    <title>Signup</title>
    <meta characterset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <?php
        include("partials/bootstrap.php");
        include("config/constants.php"); //database connections
    ?>
  <script>
    function validateform() {
      var name = document.myform.name.value;
      var email = document.myform.email.value;
      var password = document.myform.password.value;
      var city = document.myform.city.value;
      if (name != "" && email != "" && city != "" && password != "") {
        alert("Sign In Successfull!", name, email, password, city);
      }
    }
  </script>

  <body>
    <div class="signupcontainer">
      <div class="contentbox1">
        <form action="" name="myform" id="sign" onsubmit="validateform()" method="POST">
          <div class="label2">
            <label>Name</label>
            <input
              id="inputbox2"
              type="text"
              name="name"
              class="form-control"
              size="50"
              required
            />
          </div>

          <div class="label2">
            <label>Username</label>
            <input
              id="inputbox2"
              type="text"
              name="username"
              class="form-control"
              required
            />
          </div>

          <div class="label2">
            <label>E-mail</label>
            <input
              id="inputbox2"
              type="text"
              name="email"
              class="form-control"
              required
            />
          </div>

          <div class="label2">
            <label>Password</label>
            <input
              id="inputbox2"
              type="password"
              id="password"
              name="password"
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
              title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
              required
              class="form-control"
            />
          </div>
          <div>
            <button type="submit" name="submit" value="SIGN-UP" class=" signupbutton">SIGN-UP</button>
              <!-- SIGN-UP -->
            <!-- </button> -->
          </div>
        </form>
      </div>
    </div>
   
   <?php
      //Process value from form and save in database
      //check whether the submit button is clicked
      if(isset($_POST['submit'])) //checks whether certain property is set or not
      {
        //1.Get data from the form
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']); //pwd encryption
      
        $pass = password_hash($password, PASSWORD_BCRYPT);//encryption using hashing

        $emailquery = "SELECT * FROM customer WHERE email='$email' ";
        $result = mysqli_query($conn, $emailquery);

        if(mysqli_num_rows($result) > 0)
        {
         echo "<script>alert('Email id already registered!')</script> ";
        }
        else
        {
         //2.sql query to save the data to database
          $sql = "INSERT INTO customer SET
          customer_name = '$name',
          username = '$username',
          email = '$email',
          password = '$pass'";

     
          // 3.Executing query and saving into database
          $res = mysqli_query($conn, $sql) ;
          // 4.check whether the query is executed data inserted into table else some error msg
          if($res==TRUE)
          {
          // //Data inserted
            echo "<script>alert('Successfully added new user!')</script> ";
          ?>
          <script>
            location.replace("home.php");
          </script>
          
          <?php
          }
          else
          {
            echo "Failed to Add new Customer :(";
            // //Failed to insert
            // $_SESSION['add'] = "Failed to add New User";
            // //redirect page to main page
            // header("location:".SITEURL.'signup.php');
          }
    
        
        }
      }
     
    
    
    
    ?>

  </body>
</html>
