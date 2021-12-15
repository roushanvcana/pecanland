
<?php include('common/header.php');
$com = new common();
if (isset($_REQUEST['submit'])) {
    $use->update_profile();
}
$data = $use->getprofile();

$orderList = $use->getorder();
?>


<br><br>
<br>
<br>
<main>
    <div class="side-bar">
        <div class="logo-top">
            <a href="#">
                <h4>User Profile</h4>
                <img class="rounded-circle mt-5" width="80%" src="admin/assets/images/svg/profile.svg">
            </a>
        </div>

        <ul class="nav-links">

            <li class="nav-tab active" data-view-name="create">
                <a href="#">
                    <i class="fas fa-pencil-alt"></i>

                    <span>
                        Profile
                    </span>
                </a>
            </li>
            <li class="nav-tab" data-view-name="load">
                <a>
                    <i class="fas fa-arrow-down"></i>

                    <span>
                        Order History
                    </span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content w-100">
        <div class="create" data-view-active="true">

            <form action="" method="post" id="signup">
                <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: 0 0.5rem 1.5rem rgba(78, 174, 74, 0.5);">
                    <div class="row">

                        <div class="col-md-3 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <h3 style="color: #000;">User Name</h3>
                                <img class="rounded-circle mt-5" width="56%" src="admin/assets/images/svg/profile.svg">
                                <br>
                                <span class="font-weight-bold" style="color: #000;"><?php echo $data['fname'] . $data['lname'] ?></span>
                                <span style="color: #688b25;"><?php echo $data['email'] ?></span><span> </span>
                            </div>
                        </div>

                        <div class="col-md-5 border-right">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right" style="color: #000;">Profile Details</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label class="labels" style="color: #000;">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name" value="<?php echo $data['fname'] ?>" name="firstName">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels" style="color: #000;">Last Name</label>
                                        <input type="text" class="form-control" value="<?php echo $data['lname'] ?>" placeholder="Last Name" name="lastName">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label class="labels" style="color: #000;">Email ID</label><input type="text" class="form-control" id="temail" name="temail" placeholder="enter email id" value="<?php echo $data['email'] ?>"><br>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <label class="labels" style="color: #000;">Password</label>
                                        <input type="password" class="form-control" placeholder="enter your password" value="<?php echo $data['password'] ?>" name="tpass"><br>
                                    </div><br>
                                    <div class="col-md-12"><label class="labels" style="color: #000;">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $data['phone'] ?>" name="phone" onkeypress="return onlyNumberKey(event)" maxlength="10"><br></div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_need" style="color: #000;">Gender</label> <select id="form_need" name="gender" class="form-control" required="required" data-error="Please specify your need.">

                                                <option value="Male" <?php if (!empty($data['gender'])) {
                                                                            if ($data['gender'] == 'Male') {
                                                                                echo 'Selected';
                                                                            }
                                                                        } else {
                                                                        } ?>>Male</option>
                                                <option value="Female" <?php if (!empty($data['gender'])) {
                                                                            if ($data['gender'] == 'Female') {
                                                                                echo 'Selected';
                                                                            }
                                                                        } else {
                                                                        } ?>>Female</option>
                                                <option value="Other" <?php if (!empty($data['gender'])) {
                                                                            if ($data['gender'] == 'Other') {
                                                                                echo 'Selected';
                                                                            }
                                                                        } else {
                                                                        } ?>>Other</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <div class="mt-5 text-center">
                                    <button class="btn btn-primary profile-button" style="background: #7cca31;" type="submit" name="submit" id="submit">Save Profile</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center experience">
                                    <h4 class="text-right" style="color: #000;">Address Details</h4>

                                </div><br>
                                <div class="col-md-12">
                                    <label class="labels" style="color: #000;">Country</label>
                                    <input type="text" class="form-control" placeholder="Country" value="<?php echo $data['country'] ?>" name="country">
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <label class="labels" style="color: #000;">City</label>
                                    <input type="text" class="form-control" placeholder="City" value="<?php echo $data['city'] ?>" name="city">
                                </div>
                                <br>

                                <div class="col-md-12">
                                    <label class="labels" style="color: #000;">State</label>
                                    <input type="text" class="form-control" placeholder="State" value="<?php echo $data['state'] ?>" name="state">
                                </div><br>
                                <div class="col-md-12">
                                    <label class="labels" style="color: #000;">Address</label>
                                    <input type="text" class="form-control" placeholder="Address" value="<?php echo $data['address'] ?>" name="address"><br>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels" style="color: #000;">Zipcode</label>
                                    <input type="text" class="form-control" placeholder="Enter your zip" value="<?php echo $data['zipcode'] ?>" name="zipcode">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="load" data-view-active="false">
            <div class="container-fluid mt-100">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 style="color: #000;">Order Summery</h3>
                                <div class="line">
                                    <hr>
                                </div>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>

                                                    <th>Sr No</th>
                                                    <th>Order Number</th>

                                                    <th>Payment Mode</th>
                                                    <th>Status</th>
                                                    <th>Payment Status</th>

                                                    <th>Order Date</th>
                                                    <th>Message</th>
                                                    <th>Status</th>
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
                                                            <td><?php echo  $i++; ?></td>
                                                            <td><?php echo $value['orderno']; ?></td>
                                                            <td><?php echo $value['pmode']; ?></td>
                                                            <td> <label class="badge badge-warning"><?php echo $value['status']; ?></td></label>
                                                            <td><?php echo $value['pay_status']; ?></td>
                                                            <td><?php echo $value['order_dt']; ?></td>
                                                            <td><?php echo $value['message']; ?> </td>
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
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <!-- <div class="settings" data-view-active="false">
      <h1>SETTINGS</h1>
    </div> -->



    </div>
    </div>




    </div>

</main>


                                            <script>
const navs = document.querySelectorAll(".side-bar > ul > li");

navs.forEach((nav) => {
  nav.addEventListener("click", (e) => {
    document.querySelector(".nav-tab.active").classList.remove("active");
    nav.classList.add("active");

    // Hide active nav view
    document
      .querySelector('div[data-view-active="true"]')
      .setAttribute("data-view-active", false);

    const nav_view = nav.getAttribute("data-view-name");
    document
      .querySelector(`.${nav_view}`)
      .setAttribute("data-view-active", true);
  });
});
</script>
<?php include('common/footer.php'); ?>