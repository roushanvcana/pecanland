<?php include('common/header.php');
$com = new common();

$id = $use->user_id;

if (isset($_REQUEST['submit'])) {
  $use->update_profile();
}
$data = $use->getprofile();

$order = $use->getorder_details();

 $orderList = $use->getorder();


?>


<!-- my account apge  strat-->
<section class="my-account-area">
  <div class="container pt--0 pb--0">
    <div class="row">
      <div class="col-lg-12">
        <div class="myaccount-page-wrapper">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <div class="tabs">
                <ul>
                  <li id="tab1">Dashboard</li>
                  <li id="tab2"> Orders</li>
                  <!-- <li id="tab3">Download</li>
                  <li id="tab4">Payment Method</li>
                  <li id="tab5">address</li> -->
                  <li id="tab6">Profile</li>
                  <li> <a href='logout.php'> Logout</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-9 col-md-8">
              <div id="content-tab">

                <div id="tab1c">
                  <div class="tab-pane">

                    <div class="row shop-tracking-status">

                      <div class="col-md-12">

                          <div class="well">

                              <div class="form-horizontal">
                                  <div class="form-group">
                                      <label for="inputOrderTrackingID" class="col-sm-2 control-label" style="font-size: 20px;">Order id</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputOrderTrackingID" value="" placeholder="# put your order id here" style="height: 29px;">
                                      </div>
                                  </div>
                                  <form action="" method="post">
                                  <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" id="shopGetOrderStatusID" class="btn btn-success" name="order_no">Get status</button>
                                      </div>
                                  </div>
                                </form>
                              </div>
                                   <?php
                                            $i = 1;

                                            if ($order != false) {
                                                $sum = 0;
                                                foreach ($order['total_row']  as $value) {
                                                $sum=$sum+$value['totalprice'];
                                                    $id = $value['id'];

                                            ?>
                        <h4>Your order status:</h4>

                        <ul class="list-group">
                           <li class="list-group-item">
                                <span class="prefix">Order Name:</span>
                                <span class="label label-success"><?php echo $value['product_name']; ?></span>
                            </li>
                          <li class="list-group-item">
                                <span class="prefix">Order Number:</span>
                                <span class="label label-success"><?php echo $value['orderno']; ?></span>
                            </li>
                            <li class="list-group-item">
                                <span class="prefix">Date created:</span>
                                <span class="label label-success"><?php echo $value['order_dt']; ?></span>
                            </li>
                            <li class="list-group-item">
                                <span class="prefix">Last update:</span>
                                <span class="label label-success"><?php echo $value['status_update_dt']; ?></span>
                            </li>
                          <!--   <li class="list-group-item">
                                <span class="prefix">Comment:</span>
                                <span class="label label-success">customer's comment goes here</span>
                            </li>
                            <li class="list-group-item">You can find out latest status of your order with the following link:</li>
                            <li class="list-group-item"><a href="//tracking/link/goes/here">//tracking/link/goes/here</a></li>
                        --> </ul>

                        <div class="order-status">

                            <div class="order-status">
                                                <div class="order-status-timeline">
                                                    <!-- class names: c0 c1 c2 c3 and c4 -->

                                                    <?php if ($order['single_row']['status'] == 'Accepted') { ?>
                                                        <div class="order-status-timeline-completion c0"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-new active img-circle">
                                                    <span class="status">Accepted</span>
                                                    <div class="icon"></div>

                                                </div>
                                                <div class="image-order-status image-order-status-active  img-circle">
                                                    <span class="status">In progress</span>
                                                    <div class="icon"></div>
                                                </div>

                                                <div class="image-order-status image-order-status-intransit  img-circle">
                                                    <span class="status">Shipped</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-delivered  img-circle">
                                                    <span class="status">Delivered</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-completed  img-circle">
                                                    <span class="status">Completed</span>
                                                    <div class="icon"></div><?php } ?>



                                                <?php if ($order['single_row']['status'] == 'In progress') { ?>
                                                    <div class="order-status-timeline-completion c1"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-new active img-circle">
                                                    <span class="status">Accepted</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-active active img-circle">
                                                    <span class="status">In progress</span>
                                                    <div class="icon"></div>
                                                </div>

                                                <div class="image-order-status image-order-status-intransit  img-circle">
                                                    <span class="status">Shipped</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-delivered  img-circle">
                                                    <span class="status">Delivered</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-completed  img-circle">
                                                    <span class="status">Completed</span>
                                                    <div class="icon"></div><?php } ?>
                                                <?php if ($order['single_row']['status'] == 'Shipped') { ?>
                                                    <div class="order-status-timeline-completion c2"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-new active img-circle">
                                                    <span class="status">Accepted</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-active active img-circle">
                                                    <span class="status">In progress</span>
                                                    <div class="icon"></div>
                                                </div>

                                                <div class="image-order-status image-order-status-intransit active img-circle">
                                                    <span class="status">Shipped</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-delivered  img-circle">
                                                    <span class="status">Delivered</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-completed  img-circle">
                                                    <span class="status">Completed</span>
                                                    <div class="icon"></div><?php } ?>

                                                <?php if ($order['single_row']['status'] == 'Delivered') { ?>
                                                    <div class="order-status-timeline-completion c3"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-new active img-circle">
                                                    <span class="status">Accepted</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-active active img-circle">
                                                    <span class="status">In progress</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-intransit active img-circle">
                                                    <span class="status">Shipped</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-delivered active img-circle">
                                                    <span class="status">Delivered</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-completed  img-circle">
                                                    <span class="status">Completed</span>
                                                    <div class="icon"></div><?php } ?>
                                                <?php if ($order['single_row']['status'] == 'Completed') { ?>
                                                    <div class="order-status-timeline-completion c4"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-new active img-circle">
                                                    <span class="status">Accepted</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-active active img-circle">
                                                    <span class="status">In progress</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-intransit active img-circle">
                                                    <span class="status">Shipped</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-delivered active img-circle">
                                                    <span class="status">Delivered</span>
                                                    <div class="icon"></div>
                                                </div>
                                                <div class="image-order-status image-order-status-completed active img-circle">
                                                    <span class="status">Completed</span>
                                                    <div class="icon"></div>
                                                </div><?php } ?>

                                            </div>
                                        </div>

                        </div>
                        <?php }
                                                        } ?>
                    </div>

                </div>

            </div>

                  </div>
                </div>
                <div id="tab2c">
                  <div class="tab-pane">
                    <div class="myaccount-content">
                      <h3>Orders</h3>
                      <div class="myaccount-table table-responsive text-center">
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>Order No</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $i = 1;
                            if ($orderList != false) {

                              foreach ($orderList as $value) {

                                $id = $value['id'];
                            ?>
                                <tr>
                                  <td><?php echo $value['orderno']; ?></td>
                                  <td><?php echo $value['order_dt']; ?></td>
                                  <td><?php echo $value['pay_status']; ?></td>
                                  <td><a href="order-details.php?order_id=<?php echo $id ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php }
                            } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab3c">
                  <div class="tab-pane">
                    <div class="myaccount-content">
                      <h3>Downloads</h3>
                      <div class="myaccount-table table-responsive text-center">
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>Product</th>
                              <th>Date</th>
                              <th>Expire</th>
                              <th>Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Haven - Free Real Estate PSD Template</td>
                              <td>Aug 22, 2018</td>
                              <td>Yes</td>
                              <td><a href="#/" class="check-btn sqr-btn"><i class="fa fa-cloud-download"></i> Download File</a></td>
                            </tr>
                            <tr>
                              <td>HasTech - Profolio Business Template</td>
                              <td>Sep 12, 2018</td>
                              <td>Never</td>
                              <td><a href="#/" class="check-btn sqr-btn"><i class="fa fa-cloud-download"></i> Download File</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab4c">
                  <div class="tab-pane">
                    <div class="myaccount-content">
                      <h3>Payment Method</h3>
                      <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                    </div>
                  </div>
                </div>
                <div id="tab5c">
                  <div class="tab-pane">
                    <div class="myaccount-content">
                      <h3>Billing Address</h3>
                      <address>
                        <p><strong>Alex Tuntuni</strong></p>
                        <p>1355 Market St, Suite 900 <br>
                          San Francisco, CA 94103</p>
                        <p>Mobile: (123) 456-7890</p>
                      </address>
                      <a href="#/" class="check-btn sqr-btn"><i class="fa fa-edit"></i> Edit Address</a>
                    </div>
                  </div>
                </div>
                <div id="tab6c">
                  <div class="tab-pane">
                    <div class="myaccount-content">
                      <h3>Account Details</h3>
                      <div class="account-details-form">
                      <form action="" method="post" id="signup">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="first-name" class="required">First Name</label>
                                <input type="text" id="first-name" placeholder="First Name" value="<?php echo $data['fname'] ?>" name="firstName" />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="last-name" class="required">Last Name</label>
                                <input type="text" id="last-name" value="<?php echo $data['lname'] ?>" placeholder="Last Name" name="lastName" />
                              </div>
                            </div>
                          </div>

                          <div class="single-input-item">
                            <label for="email" class="required">Email Addres</label>
                            <input type="email" id="temail" name="temail" placeholder="enter email id" value="<?php echo $data['email'] ?>" />
                          </div>

                          <div class="row">
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="new-pwd" class="required">New Password</label>
                                <input type="password" placeholder="enter your password" value="<?php echo $data['password'] ?>" name="tpass" />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="phone" class="required">Phone</label>
                                <input type="text" id="phone" value="<?php echo $data['phone'] ?>" placeholder=Phone name="phone" />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="country" class="required">Country</label>
                                <input type="text" id="country" value="<?php echo $data['country'] ?>" placeholder=country name="country" />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="country" class="required">state</label>
                                <input type="text" id="state" value="<?php echo $data['state'] ?>" placeholder=state name="state" />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="city" class="required">city</label>
                                <input type="text" id="city" value="<?php echo $data['city'] ?>" placeholder=city name="city" />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="address" class="required">Address</label>
                                <input type="text" id="address" value="<?php echo $data['address'] ?>" placeholder=address name="address" />
                              </div>
                            </div> <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="zipcode" class="required">city</label>
                                <input type="text" id="zipcode" value="<?php echo $data['zipcode'] ?>" placeholder=zipcode name="zipcode" />
                              </div>
                            </div><br>
                            <div class="col-lg-12"><br>
                              <button class="check-btn sqr-btn"  type="submit" name="submit" id="submit">Save Changes</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- my account page end here-->
<?php include('common/footer.php'); ?>

<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.minad76.js?ver=5.9.0' id='wc-add-to-cart-variation-js'></script>

<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/single-product.minad76.js?ver=5.9.0' id='wc-single-product-js'></script>

<script>
  document.querySelector('.img__btn').addEventListener('click', function() {
    document.querySelector('.cont').classList.toggle('s--signup');
  });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

<script>
  var j = jQuery.noConflict();
  j(document).ready(function() {
    j('#tab2c, #tab3c, #tab4c, #tab5c, #tab6c').hide();
    j('#tab1').click(function() {
      j('#tab1c').show();
      j('#tab2c, #tab3c, #tab4c, #tab5c, #tab6c').hide();
    });

    j('#tab2').click(function() {
      j('#tab2c').show();
      j('#tab1c, #tab3c, #tab4c, #tab5c, #tab6c').hide();
    });

    // j('#tab3').click(function() {
    //   j('#tab3c').show();
    //   j('#tab1c, #tab2c, #tab4c, #tab5c, #tab6c').hide();
    // });

    // j('#tab4').click(function() {
    //   j('#tab4c').show();
    //   j('#tab1c, #tab2c, #tab3c, #tab5c, #tab6c').hide();
    // });

    // j('#tab5').click(function() {
    //   j('#tab5c').show();
    //   j('#tab1c, #tab2c, #tab3c, #tab4c, #tab6c').hide();
    // });

    j('#tab6').click(function() {
      j('#tab1c, #tab2c ').hide();
      j('#tab6c').show();

    });


  });
</script>
