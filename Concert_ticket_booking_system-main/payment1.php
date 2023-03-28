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
	<style>
.padding {
    padding: 5rem !important
}

.form-control:focus {
    box-shadow: 10px 0px 0px 0px #ffffff !important;
    border-color: #4ca746
}
.total{
    background-color: #f7c72a;
    border-radius: 15px;
    width:100%;
    font-size: 20px;
    padding:3px;
    margin: auto;
    text-align:center;
}

</style>

</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
   
    <form method="POST" action="https://www.tripadvisor.in/ShowTopic-g293860-i511-k13075104-Dsfdsf-India.html">

        <div class="padding">
            <div class="row">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="col-sm-8 col-md-6">
                        <div class=" total"> Total amount to be paid is : <?php echo $cost; ?></div><br />
                        <div class="card">

                            <div class="card-header">

                                <div class="row">
                                    <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                                    <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png"> </div>
                                </div>
                            </div>
                            <div class="card-body" style="height: 350px">
                                <div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" name="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
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
	$(function($) {
   	 $('[data-numeric]').payment('restrictNumeric');
    $('.cc-number').payment('formatCardNumber');
    $('.cc-exp').payment('formatCardExpiry');
    $('.cc-cvc').payment('formatCardCVC');
    $.fn.toggleInputError = function(erred) {
    this.parent('.form-group').toggleClass('has-error', erred);
    return this;
    };
    $('form').submit(function(e) {
    e.preventDefault();
    var cardType = $.payment.cardType($('.cc-number').val());
    $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
    $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
    $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
    $('.cc-brand').text(cardType);
    $('.validation').removeClass('text-danger text-success');
    $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
    console.log('hy');
    });
    });
    

</script>
</body>

</html>