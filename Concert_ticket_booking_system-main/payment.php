    <?php
    include "config/constants.php";
    session_start();
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Payment </title>
        <meta characterset="utf-8" />
        <link rel="stylesheet" href="css/style2.css" />
        <?php
        include_once("partials/bootstrap.php");
        ?>

    </head>

    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <form method="POST" onsubmit="ValidateCreditCardNumber()" action="success.php">

            <div class="padding">
                <div class="row">
                    <div class="container-fluid d-flex justify-content-center">
                        <div class="col-sm-8 col-md-6">
                            <div class=" total"> Total amount to be paid is : <?php echo $_SESSION['cost']; ?></div><br />
                            <div class="card">

                                <div class="card-header">

                                    <div class="row">
                                        <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                                        <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png"> </div>
                                    </div>
                                </div>
                                <div class="card-body" style="height: 350px">
                                    <div class="form-group"> <label for="ccnumber" class="control-label">CARD NUMBER</label> <input id="ccnumber" name="ccnumber" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input required id="cc-exp" name="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••••" required> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> <input required id="cc-cvc" name="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" required> </div>
                                        </div>
                                    </div>
                                    <div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" required class="input-lg form-control"> </div>
                                    <div class="form-group">

                                        <input type="submit" name="submit" class="btn btn-success" value="CONFIRM PAYMENT">

                                        <!-- <input type="submit" value ="MAKE PAYMENT" class="btn btn-success btn-lg form-control">   -->


                                    </div>
                                    <!-- <div class="form-group"> <input value="MAKE PAYMENT" type="button" class="btn btn-success btn-lg form-control" href="details.html" style="font-size: .8rem;"> </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script>
            function ValidateCreditCardNumber() {

            var ccNum = document.getElementById("ccnumber").value;
            var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
            var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
            var amexpRegEx = /^(?:3[47][0-9]{13})$/;
            var discovRegEx = /^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/;
            var isValid = false;

            if (visaRegEx.test(ccNum)) {
            isValid = true;
            } else if(mastercardRegEx.test(ccNum)) {
            isValid = true;
            } else if(amexpRegEx.test(ccNum)) {
            isValid = true;
            } else if(discovRegEx.test(ccNum)) {
            isValid = true;
            }

            if(isValid) {
            //     <?php 
          
            // $pay = 1;

            // $sql1 = "INSERT INTO tickets SET
            // concert_id = '{$_SESSION['id']}',
            // quantity = '{$_SESSION['quantity']}',
            // category = '{$_SESSION['category']}',
            // cost = '{$_SESSION['cost']}',
            // payment_status = '$pay'";

            // $res = mysqli_query($conn, $sql1) ;
            // echo $res;
            

            // if($res)
            // {
                
            //     $user = $_SESSION['username'];
            //     $cust_search = "SELECT * FROM customer WHERE username='$user'";
            //     //echo $user.'<br/>';
            //     $cust_fire = mysqli_query($conn, $cust_search);
            //     $row1 = mysqli_fetch_array($cust_fire);
            //     $cust_mail = $row1['email'];
            //     $to_email = '$cust_mail';
            //     $subject = "Succesful payment!";
            //     $body = "Hi, These are your tickets for the concert. Meet you there
            //         Concert name : ".$_SESSION['artist'].'<br/>'."Venue : ".$_SESSION['venue'].'<br/>'.
            //         "Date : ".$_SESSION['date'].'<br/>'."Time : ".$_SESSION['time'].'<br/>'."Total cost : ".$_SESSION['cost'].'<br/>';
            //     $headers = "From : concertsbooking.musicana1234@gmail.com";
            //     echo "<script>alert('Order placed')</script> ";
        
            // if (mail($to_email, $subject, $body, $headers)) {
            //     echo "Email successfully sent to $to_email...";
            // } else {
            //     echo "Email sending failed...";
            // }
            
            //    
                
            //     location.replace("success.php");
               
            //     <?php
            
            
                
            // }
            // else
            // {
            //     echo "<script>alert('Failed to place order :(')</script> ";
            
            // }

            //********************* */ SEND EMAIL HERE ************************
        
        
        ?>
        
            location.replace('success.php');

            } else {
            alert("Please provide a valid Visa number!");
            }   
        }

    
            

            
    
        </script>
   
    </body>

    </html>