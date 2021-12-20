<?php include('common/header.php');?>
<?php
    if(isset($_GET['orderno']))
    {
        $ord=$_GET['orderno'];
        $orderdetails=$ecom->getsingleorder_details($ord);
    }
        else
         echo "<script>location.href='index.php';</script>";
?>

        <section class="section dd">
           <div class="container">
                <div class="row text-center">
                    <div class="col-sm-12 col-sm-offset-1">
                    <br><br> <h2 style="color:#0fad00">Success</h2>
                    <i class="fas fa-check"></i>
                    <h3>Dear, <?php echo $orderdetails['first_nm'].' '.$orderdetails['last_nm'] ?></h3>
                    <p style="font-size:20px;color:#5C5C5C;">Thank you for purchase.We have sent sms with order details in your mobile
                    Your Order Id is <?php echo $ord; ?></p>
                     <a href="index.php" class="btn btn-success">     Continue Shopping      </a>
                <br><br>
                    </div>

                </div>
            </div>
        </section>
        <div class="age-popup">
            <div class="popup-content with-back">
                <div class="overflow-back">
                    <div class="c-leaf-age-popup"><span class="svg-content svg-fill-back-image" data-svg="assets/images/svg/cannabis.svg"></span></div>
                </div>
                <div class="popup-title h4">Age Verification</div>
                <div class="popup-text">You must be 18 years old to enter.</div>
                <div class="popup-btns">
                    <a class="btn btn-theme" href="#" data-role="age-yes">yes</a><a class="btn-theme-bordered btn" href="#" data-role="age-no" data-redirect-url="https://themeforest.net/user/amigosthemes/portfolio">no</a>
                </div>
            </div>
        </div>
        <div class="scroll-top"><i class="fas fa-long-arrow-alt-up"></i></div>

            <?php include('common/footer.php');?>
