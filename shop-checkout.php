<?php include "common/header.php" ?>
<?php
    $address=$use->getShippingAddress();
    if(isset($_REQUEST['bplace_order']))
    {
        $ecom->place_order();
    }
?>
<style>
    .section {
        margin-top: 8rem;
        margin-bottom: 4rem;
    }

    .pb-5,
    .py-5 {
        padding-bottom: 3rem !important;
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important;
    }

    .container,
    .container-fluid {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .container {
        max-width: 1140px;
    }

    .cart-header {
        font-size: 1.5rem;
    }

    .cart-header,
    .cart-item-title {
        font-weight: 700;
        color: #333;
        line-height: 1.25;
    }
</style>

<div data-elementor-type="product-archive" data-elementor-id="961" class="elementor elementor-961 elementor-location-archive product" data-elementor-settings="[]">
    <div class="elementor-section-wrap">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-29fd222f elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="29fd222f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;navigation&quot;:&quot;both&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-19f1427c" data-id="19f1427c" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-765facfa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="765facfa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;navigation&quot;:&quot;both&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-47a85451" data-id="47a85451" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-1690f53c elementor-widget elementor-widget-woocommerce-breadcrumb" data-id="1690f53c" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="woocommerce-breadcrumb.default">
                                            <div class="elementor-widget-container">
                                                <nav class="woocommerce-breadcrumb"><a href="index.php">Home</a>&nbsp;&#47;&nbsp;Shop</nav>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2a3ea26c elementor-widget elementor-widget-heading" data-id="2a3ea26c" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Shop </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

         <section class="section">
            <form class="container" action="#" method="POST">
                <div class="cols-xl row">
                    <div class="col-lg-6">
                        <h2 class="text-title mb-5">Billing details</h2>
                        <div class="grid row">
                            <div class="col-md-6">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label class="required">First Name</label>
                                    <div class="input-group"><input class="form-control" name="ship_first_name" type="text" placeholder="First Name" value="<?php echo $address!=FALSE?$address['first_nm']:'';?>" required="required" /></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label class="required">Last Name</label>
                                    <div class="input-group"><input class="form-control" name="ship_last_name" type="text" placeholder="Last Name" value="<?php echo $address!=FALSE?$address['last_nm']:'';?>"required="required" /></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label>Email</label>
                                    <div class="input-group"><input class="form-control" name="ship_email_address" type="email" placeholder="Email" value="<?php echo $address!=FALSE?$address['email']:'';;?>" /></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label>Mobile No.</label>
                                    <div class="input-group"><input class="form-control" name="ship_phone_number" type="text" placeholder="Mobile No." value="<?php echo $address!=FALSE?$address['phone']:'';?>" /></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label class="required">Country</label>
                                    <div class="input-group">
                                       <input type="text" class="form-control" name="ship_country" placeholder="Country" value="<?php echo $address!=FALSE?$address['country']:'';?>">
                                    </div>
                                </div>
                            </div>
                             <div class="col-12">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label class="required">State</label>
                                    <div class="input-group">
                                       <input type="text" class="form-control" name="ship_state" placeholder="State" value="<?php echo $address!=FALSE?$address['state']:'';?>">
                                    </div>
                                </div>
                            </div>
                             <div class="col-12">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label class="required">Town / City</label>
                                    <div class="input-group"><input class="form-control" name="ship_city" type="text" value="<?php echo $address!=FALSE?$address['city']:'';?>" placeholder="Town / City" required="required" /></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label class="required">Address</label>
                                    <div class="input-group"><textarea class="form-control" name="ship_address" placeholder="Address" id="address"><?php echo $address!=FALSE?$address['address']:'';?></textarea></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label class="required">Postcode / Zip</label>
                                    <div class="input-group"><input class="form-control" name="ship_zip_code" type="text" value="<?php echo $address!=FALSE?$address['pincode']:'';?>" placeholder="Postcode / Zip" required="required" /></div>
                                </div>
                            </div>

                            <!--<div class="col-12 mt-5">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <label class="h4 mb-3 text-title">Additional Information</label>
                                    <div class="input-group"><textarea class="form-control" name="additionalInformation" placeholder="Additional Information"></textarea></div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="text-title mb-5">Your order</h2>
                        <div class="order-items mb-5">
                            <div class="container">
                                <div class="row">

                                        <div class="col-md-8">
                                            <div class="order-line-title"><b>Name</b></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="order-line-total"><b>Total</b></div>
                                        </div>


                            <?php
                                if(isset($use->user_id) && $use->user_id!="")
                                {
                                    $cartlist=$ecom->getcart_details();
                                    if($cartlist!=FALSE)
                                    {
                                        $sub=0;
                                        $k=0;
                                        foreach($cartlist['total_row'] as $list)
                                        {
                                            $productnm=$list['product_nm'];
                                            $qty=$list['quantity'];
                                            $total=$list['totalprice'];
                                            $price=$total/$qty;
                                            $sub=$sub+$total;
                            ?>
                            <div class="col-md-8">
                                <div class="order-line-title"><?php echo $productnm;?></div>
                            </div>
                            <div class="col-md-4">
                                <div class="order-line-total">$<?php echo $total;?></div>
                            </div>
                            <?php
                                        }
                                    }
                                }
                            ?>
                            <div class="order-subtotal">
                                <div class="order-line-title">Sub Total</div>
                                <div class="order-line-total">$<?php echo $sub;?></div>
                            </div>
                            <div class="order-subtotal">
                                <div class="order-line-title">Shipping</div>
                                <div class="order-line-total">$10.00</div>
                            </div>
                            <div class="separator-line"></div>
                            <div class="order-total">
                                <div class="order-line-title">Total</div>
                                <div class="order-line-total">$<?php echo $sub+10;?></div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <h3 class="text-title mb-4">Payment Details</h3>
                        <div class="grid row">
                            <div class="col-12"><p>Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p></div>
                            <div class="col-12">
                                <div class="form-groups">
                                    <div class="input-view-flat input-gray-shadow form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="cash-on-payment" name="pmode" value="Cash On Delivery" checked="checked"/><span class="form-check-icon"></span>
                                            <label class="form-check-label" for="cash-on-payment">Cash On Delivery</label>
                                        </div>
                                    </div>
                                    <div class="input-view-flat input-gray-shadow form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="check-payment" name="pmode" value="Online Payment" /><span class="form-check-icon"></span>
                                            <label class="form-check-label" for="check-payment">online Pyament</label>
                                        </div>
                                    </div>
                                    <div class="input-view-flat input-gray-shadow form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="paypal-payment" name="pmode" value="PayPal"/><span class="form-check-icon"></span>
                                            <label class="form-check-label" for="paypal-payment">PayPal</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-12">
                                <div class="input-view-flat input-gray-shadow form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms-and-conditions" name="terms" value="yes" /><span class="form-check-icon"></span>
                                        <label class="form-check-label" for="terms-and-conditions">I've read &amp; accept the <a href="#" target="_blank">terms &amp; conditions</a></label>
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-12"><button class="btn-wider btn btn-theme" type="submit" name="bplace_order">place order</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <?php include "common/footer.php" ?>
