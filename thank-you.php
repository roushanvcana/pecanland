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
          <br>
           <div class="container">
               <br>  <br>
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



            <?php include('common/footer.php');?>
