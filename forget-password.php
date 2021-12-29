
<?php include "common/header.php";
include('admin/login_verify.php');

$com = new common();
if (isset($_REQUEST['submit'])) {
    $obj->forget_password_mail();
}
?>
<style>
.bridge{
	width: 40% !important;
  display: block;
  margin-left: auto;
  margin-right: auto;

}
button.btn.btn-primary.btn-block {

    background-color: #9fcb22;
    border-color: #9fcb22;
}
</style>

<main class="site-main post-723 page type-page status-publish hentry" role="main" style="margin: 0 0 3rem 0;">
		<div class="page-content">
				<div data-elementor-type="wp-page" data-elementor-id="723" class="elementor elementor-723" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
		<section class="elementor-section elementor-top-section elementor-element elementor-element-577a25cd elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="577a25cd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;navigation&quot;:&quot;both&quot;}">
		<div class="elementor-background-overlay"></div>
  	<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7239b253" data-id="7239b253" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
		      	<div class="elementor-widget-wrap elementor-element-populated">
	           	<section class="elementor-section elementor-inner-section elementor-element elementor-element-26c12df8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="26c12df8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;navigation&quot;:&quot;both&quot;}">
					     	<div class="elementor-container elementor-column-gap-default">
				         	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5cac8555" data-id="5cac8555" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
		               	<div class="elementor-widget-wrap elementor-element-populated">
                      	<div class="elementor-element elementor-element-6cfa4224 elementor-widget elementor-widget-woocommerce-breadcrumb" data-id="6cfa4224" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="woocommerce-breadcrumb.default">
				                    <div class="elementor-widget-container">
		                         	<nav class="woocommerce-breadcrumb"><a href="login.php">Home</a>&nbsp;&#47;&nbsp;Forgot Password</nav>		</div>
			                    	</div>
		                    		<div class="elementor-element elementor-element-7da1c486 elementor-widget elementor-widget-heading" data-id="7da1c486" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="heading.default">
		                     	   	<div class="elementor-widget-container">
		                           	<h2 class="elementor-heading-title elementor-size-default">Forgot Password</h2>		</div>
			                 	    </div>
					             </div>
	                 	</div>
						    	</div>
	           	</section>
		    		</div>
	      	</div>
		  </div>
		</section>
   	<div data-elementor-type="product-archive" data-elementor-id="961" class="elementor elementor-961 elementor-location-archive product" data-elementor-settings="[]">
	  	<div class="elementor-section-wrap  " >
      	<section class="elementor-section elementor-top-section elementor-element elementor-element-6f1d2f6e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6f1d2f6e" data-element_type="section" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
			  	<div class="elementor-container elementor-column-gap-default ">
				   	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-479a1b79  bridge" data-id="479a1b79" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
					  	<div class="elementor-widget-wrap elementor-element-populated  ">
					  		<div class="elementor-element elementor-element-42feaab1 elementor-product-loop-item--align-center elementor-products-grid elementor-wc-products elementor-show-pagination-border-yes elementor-widget elementor-widget-wc-archive-products" data-id="42feaab1" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="wc-archive-products.default">
							   	<div class="elementor-widget-container ">
                    <div class="card">
                      <div class="preloader_box"><div class="loader"> </div></div>
                        <div class="card-body login-card-body">
                           <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                             <form id="forget_password"  action=""  method="post">
                                 <div class="input-group mb-4" id="tmail">
                                   <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
                                      <div class="email_error red_error"></div>
				              		              <div class="success"></div>
				                           </div>
                                    <div class="" id="otp1">
                                      <input class="form-control" name="otp" type="text" placeholder="Enter Otp" id="otp" onkeypress="return onlyNumberKey(event)" maxlength="5">
                                    </div>
                                     <div class="" id="passs">
                                       <input class="form-control" name="password" type="password" placeholder="Enter New Password" id="password">
                                     </div>
                                     <div class="" id="passss">
                                        <br><input class="form-control" name="cpassword" type="password" placeholder="Confirm your Password" id="cpassword">
                                     </div>
                                     <div class="">
                                     <button class="btn btn-primary btn-block" onclick='forgotPassword()' type="button" name="submit" id="submit">Submit</button>
                                     <button class="btn btn-primary btn-block" onclick='verify_otp()' type="button" name="verify" id="verify">Verify Otp</button>
                                     <button class="btn btn-primary btn-block" onclick='new_password()' type="button" name="pass" id="pass">Save</button></div>
                                     <a href='login.php'>Login</a>
                                      <br>
                                       <a href='login.php' class="text-center">Register a new membership</a>
                                </div>
				                    </form>
                           </div>
				                  <!-- /.login-card-body -->
				                </div>
				              </div>
                  	</div>
								</div>
							</div>
         </section>
     	</div>
	  </div>
 	</div>
<?php include "common/footer.php"; ?>
<script>
    $("#otp1").hide()
    $("#verify").hide()
    $("#passs").hide()
    $("#pass").hide()
    $("#passss").hide()

    function forgotPassword() {
        var email = $('#email').val();
        if (email != '') {
            $.ajax({
                url: "admin/classfile/ajax.php",
                method: "POST",
                data: {
                    action: "send_otp",
                    email: email
                },
                success: function(data) {

                    console.log(data)
                    var json = $.parseJSON(data);
                    /// alert(json.otp);
                    $("#otp1").show()
                    $("#submit").hide()
                    $("#tmail").hide()
                    $("#verify").show()



                }
            });
        }
    }
</script>
<script>
    function verify_otp() {
        var otp = $('#otp').val();
        if (otp != '') {

            $.ajax({
                url: "admin/classfile/ajax.php",
                method: "POST",
                data: {
                    action: "verify_otp",
                    otp: otp,
                    email: $("#email").val(),
                },
                success: function(data) {
                    console.log(data)


                    $("#otp1").hide()
                    $("#submit").hide()
                    $("#tmail").hide()
                    $("#verify").hide()
                    $("#passs").show()
                    $("#pass").show()
                    $("#passss").show()
                }



            });

        }
    }
</script>
<script>
    function new_password() {
        var password = $('#password').val();
        if (password != '') {

            $.ajax({
                url: "admin/classfile/ajax.php",
                method: "POST",
                data: {
                    action: "new_password",
                    password: password,
                    email: $("#email").val(),
                },
                success: function(data) {
                    console.log(data)
                    window.location = "login.php";


                }


            });

        }
    }
</script>
