<?php session_start(); ?>
<html>
<head>
    <title>Login </title>
    <meta characterset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <?php include("partials/bootstrap.php");?>
</head>
<script>
    function validateform() {
        var name = document.myform.email.value;
        var password = document.myform.password.value;
        var isAdmin = document.myform.isadmin.value;
        if (name != "" && password != "") {
            if (isAdmin) {
                if ((email == 'shettynandini01@gmail.com' && password == 'Nan@999') || (name == 'concertadmin@gmail.com' && password == 'Admin1234')) {
                    alert('Go to admin home');
                } else {
                    alert('Invalid pass or email');
                }
            }
            else
            if (!isAdmin) {
                if ((email == 'shettyuser@gmail.com' && password == 'User@999')) {
                    alert('Go to user home');
                } else {
                    alert('Invalid pass or email');
                }
            }
        }
    }


</script>

<body>
<?php
 include("config/constants.php");

    //Check whether the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        //Process for login
        //1.Get data from login form
        $email = $_POST['email'];
        $password = $_POST['password'];
  

        //2.SQL to check whether the user with email id and password exists or not
        $email_search = "SELECT * FROM customer WHERE 
        email = '$email'";

        //3.Execute SQL query
        $res = mysqli_query($conn, $email_search);
        
        //4.count rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count)
        { 
            $email_pass = mysqli_fetch_assoc($res);

            $db_pass = $email_pass['password'];
            
            $_SESSION['username'] = $email_pass['username'];
            
            $pass_decode = password_verify($password, $db_pass); //inbuilt func to check both pwds
            
            if($pass_decode){
                //echo "login success!";
                echo "<script> alert('Login successful')</script>";
                //header('location:'.SITEURL.'home.php'); //Might want to change here********************************************
                ?>
                <script>
                    location.replace("home.php");
                </script>
                <?php
            }
            else{
                echo "Pwd incorrect";
                //echo "<script> alert('password incorrect')</script>";
                //header('location:'.SITEURL.'login.php');
            }
        }
        else{
            //user not available
            //$_SESSION['login'] = "<div class='failure'>Login unsuccessful.</div>";
            //Redirect to home page
            //  header('location:'.SITEURL.'login.php');
            echo "<script> alert('invalid email')</script>";
            //header('location:'.SITEURL.'login.php');
        }
    }

?>

   
    
    <div class="logincontainer">
    <div class="titles">
    <h1 style="color:black; height: 36px; font-weight:bold;">MUSICANA</h1>
    <p>Adding joy through music...</p>
    </div>
        <div class="contentbox2">
            <form name="myform" id="sign" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" onsubmit="validateform()" method="POST">
                <div class="label1">
                    <label>Email</label>
                    <input id="inputbox5" type="text" name="email" class="form-control" required>
                </div>
                <div class="label1"><label>Password</label>
                    <input id="inputbox6" type="password" id="password" name="password"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                        required class="form-control">
                </div>

                <!-- <input type="checkbox" id="vehicle1" name='isadmin' value='true'>
                <label class='label1'> Are you an admin?</label><br> -->

                <div>

                </div>
                <div>
                    <!-- <input type="submit" value="LOGIN"name="login" class="loginbutton">LOG-IN -->
                    <button type="submit" name="submit" value="register" class="loginbutton">LOG-IN</button>
                    <button onclick="location.href='signup.php'" class="loginbutton">SIGN-UP</button>
                </div>
                
            </form>
        </div>
    </div>

</body>

</html>

