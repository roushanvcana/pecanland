  
  <?php include "common/header.php";?>

	<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Pecanland</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
  <div class="preloader_box"><div class="loader"></div></div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form id="forget_password"  action=""  method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
		  <div class="email_error red_error"></div>
		  <div class="success"></div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?php echo base_url().'login'; ?>">Login</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url().'register'; ?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
	
      <?php include "common/footer.php"?>

</body>

<!-- Mirrored from elementorpress.com/templatekit-pro/layout17/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Nov 2021 11:12:51 GMT -->
</html>
