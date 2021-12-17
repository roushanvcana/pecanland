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
                     <?php
                                            $i = 1;

                                            if ($order != false) {
                                                $sum = 0;
                                                foreach ($order['total_row']  as $value) {
                                                $sum=$sum+$value['totalprice'];
                                                    $id = $value['id'];

                                            ?>
                    <div class="myaccount-content">
                      <h3><?php echo $value['product_name']; ?></h3>
                      <div class="welcome">
                        <p><strong><?php echo $value['orderno']; ?>
                        </strong></p>
                      </div>
                       <p><?php echo $value['color']; ?>
                        </p>
                     <p><?php echo $value['mrp']; ?>
                        </p>
                    </div>
                     <?php }
                                            } ?>
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