<?php include('common/header.php');
include('admin/login_verify.php');

$com = new common();
if (isset($_REQUEST['submit'])) {
    $obj->usersignin();
} ?>
<?php
if (isset($_REQUEST['signin'])) {
    $obj->userregister();
} ?>
<!--<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>M&amp;DPecanland MEX &laquo; M&amp;D Pecanland, México</title>

<link rel='stylesheet' id='woocommerce-general-css'  href='wp-content/plugins/woocommerce/assets/css/woocommercead76.css?ver=5.9.0' type='text/css' media='all' />

<link rel='stylesheet' id='cb70d11b8-css'  href='wp-content/uploads/essential-addons-elementor/cb70d11b8.mine957.css?ver=1637233755' type='text/css' media='all' />
<link rel='stylesheet' id='hello-elementor-css'  href='wp-content/themes/hello-elementor/style.min8066.css?ver=2.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='hello-elementor-theme-style-css'  href='wp-content/themes/hello-elementor/theme.min8066.css?ver=2.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='wp-content/plugins/elementor/assets/css/frontend.minb045.css?ver=3.4.8' type='text/css' media='all' />
<style id='elementor-frontend-inline-css' type='text/css'>
@font-face {
	font-family: eicons;
	src: url(wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons0b93.eot?5.10.0);
	src: url(wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
	font-weight: 400;
	font-style: normal
}
</style>
<link rel='stylesheet' id='elementor-post-10-css'  href='wp-content/uploads/elementor/css/post-10baf3.css?ver=1627644542' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min05c8.css?ver=5.13.0' type='text/css' media='all' />

<link rel='stylesheet' id='elementor-pro-css'  href='wp-content/plugins/elementor-pro/assets/css/frontend.min3d36.css?ver=3.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='wp-content/uploads/elementor/css/global3130.css?ver=1627642883' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-75-css'  href='wp-content/uploads/elementor/css/post-7583b1.css?ver=1628244086' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-83-css'  href='wp-content/uploads/elementor/css/post-833130.css?ver=1627642883' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-533-css'  href='wp-content/uploads/elementor/css/post-53330a2.css?ver=1628255579' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Barlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css'  href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' type='text/css' media='all' />

<script type='text/javascript' src='wp-content/plugins/master-elements/addons/widgets/me-forms/assets/js/formsb3e8.js?ver=0.1' id='forms-js-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='wp-content/plugins/master-elements/assets/js/myscript080f.js?ver=5.8.2' id='slider_script-js'></script>
<script type='text/javascript' src='wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min365c.js?ver=1.0.21' id='template-kit-export-js'></script>

<link rel="icon" href="wp-content/uploads/2021/07/cropped-Logo-32x32.png" sizes="32x32" />
<link rel="icon" href="wp-content/uploads/2021/07/cropped-Logo-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/2021/07/cropped-Logo-180x180.png" />
<meta name="msapplication-TileImage" content="wp-content/uploads/2021/07/cropped-Logo-270x270.png" />
</head>
<body data-rsssl=1 class="home page-template page-template-elementor_header_footer page page-id-75 wp-custom-logo theme-hello-elementor woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-10 elementor-page elementor-page-75"> -->
<!-- <div data-elementor-type="header" data-elementor-id="83" class="elementor elementor-83 elementor-location-header" data-elementor-settings="[]">
 <div class="elementor-section-wrap">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-d416af3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d416af3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;navigation&quot;:&quot;both&quot;}">
   <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9a410d6" data-id="9a410d6" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
     <div class="elementor-widget-wrap elementor-element-populated">
      <div class="elementor-element elementor-element-d89ff4e elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="d89ff4e" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="theme-site-logo.default">
       <div class="elementor-widget-container"> <a href=""> <img src="wp-content/uploads/2021/07/Logo.png" class="attachment-large size-large" alt="" loading="lazy" /> </a> </div>
      </div>
     </div>
    </div>
    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ab9da3c" data-id="ab9da3c" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
     <div class="elementor-widget-wrap elementor-element-populated">
      <div class="elementor-element elementor-element-e42d0a7 elementor-nav-menu__align-right elementor-absolute elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="e42d0a7" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;fas fa-caret-down&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;,&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="nav-menu.default">
       <div class="elementor-widget-container">
        <nav migration_allowed="1" migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
         <ul id="menu-1-e42d0a7" class="elementor-nav-menu">
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-75 current_page_item menu-item-84"><a href="#" aria-current="page" class="elementor-item elementor-item-active">Home</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-884"><a href="#" class="elementor-item">About</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1033"><a href="#" class="elementor-item">Blog</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-883"><a href="#" class="elementor-item">Contact</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1425"><a href="#" class="elementor-item">Shop</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-87"><a href="#" class="elementor-item elementor-item-anchor">Pages</a>
           <ul class="sub-menu elementor-nav-menu--dropdown">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1423"><a href="#" class="elementor-sub-item">Our Service</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1424"><a href="#" class="elementor-sub-item">Our Team</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1426"><a href="#" class="elementor-sub-item">Testimonials</a></li>
           </ul>
          </li>
         </ul>
        </nav>
        <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false"> <i class="eicon-menu-bar" aria-hidden="true" role="presentation"></i> <span class="elementor-screen-only">Menu</span> </div>
        <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
         <ul id="menu-2-e42d0a7" class="elementor-nav-menu">
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-75 current_page_item menu-item-84"><a href="index.html" aria-current="page" class="elementor-item elementor-item-active" tabindex="-1">Home</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-884"><a href="a#" class="elementor-item" tabindex="-1">About</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1033"><a href="#" class="elementor-item" tabindex="-1">Blog</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-883"><a href="#" class="elementor-item" tabindex="-1">Contact</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1425"><a href="#" class="elementor-item" tabindex="-1">Shop</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-87"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Pages</a>
           <ul class="sub-menu elementor-nav-menu--dropdown">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1423"><a href="#" class="elementor-sub-item" tabindex="-1">Our Service</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1424"><a href="#" class="elementor-sub-item" tabindex="-1">Our Team</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1426"><a href="#" class="elementor-sub-item" tabindex="-1">Testimonials</a></li>
           </ul>
          </li>
         </ul>
        </nav>
       </div>
      </div>
     </div>
    </div>
    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-023c606 elementor-hidden-tablet elementor-hidden-phone" data-id="023c606" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
     <div class="elementor-widget-wrap elementor-element-populated">
      <div class="elementor-element elementor-element-1b471a6 elementor-search-form--skin-full_screen elementor-widget__width-auto elementor-widget elementor-widget-search-form" data-id="1b471a6" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;full_screen&quot;,&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="search-form.default">
       <div class="elementor-widget-container">
        <form class="elementor-search-form" role="search" action="#" method="get">
         <div class="elementor-search-form__toggle"> <i aria-hidden="true" class="fas fa-search"></i> <span class="elementor-screen-only">Search</span> </div>
         <div class="elementor-search-form__container">
          <input placeholder="" class="elementor-search-form__input" type="search" name="s" title="Search" value="">
          <div class="dialog-lightbox-close-button dialog-close-button"> <i class="eicon-close" aria-hidden="true"></i> <span class="elementor-screen-only">Close</span> </div>
         </div>
        </form>
       </div>
      </div>
      <div class="elementor-element elementor-element-c4d6fef elementor-author-box--layout-image-left elementor-widget__width-auto elementor-widget elementor-widget-author-box" data-id="c4d6fef" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="author-box.default">
       <div class="elementor-widget-container">
        <div class="elementor-author-box">
         <div  class="elementor-author-box__avatar"> <img src="wp-content/uploads/2021/07/User.png"> </div>
         <div class="elementor-author-box__text"> </div>
        </div>
       </div>
      </div>
      <div class="elementor-element elementor-element-d81d66f toggle-icon--cart-solid elementor-widget__width-auto elementor-menu-cart--items-indicator-bubble elementor-menu-cart--show-divider-yes elementor-menu-cart--show-remove-button-yes elementor-menu-cart--buttons-inline elementor-widget elementor-widget-woocommerce-menu-cart" data-id="d81d66f" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="woocommerce-menu-cart.default">
       <div class="elementor-widget-container">
        <div class="elementor-menu-cart__wrapper">
         <div class="elementor-menu-cart__container elementor-lightbox" aria-expanded="false">
          <div class="elementor-menu-cart__main" aria-expanded="false">
           <div class="elementor-menu-cart__close-button"></div>
           <div class="widget_shopping_cart_content"></div>
          </div>
         </div>
         <div class="elementor-menu-cart__toggle elementor-button-wrapper"> <a id="elementor-menu-cart__toggle_button" href="#" class="elementor-button elementor-size-sm"> <span class="elementor-button-text"><span class="woocommerce-Price-amount amount">
          <bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>0.00</bdi>
          </span></span> <span class="elementor-button-icon" data-counter="0"> <i class="eicon" aria-hidden="true"></i> <span class="elementor-screen-only">Cart</span> </span> </a> </div>
        </div>
        close elementor-menu-cart__wrapper -->
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- </div>  -->

<!--login start-->

<div class="cont">
    <div class="form sign-in">
        <form action=" " method="Post" id="signup">
            <h2>Login</h2>
            <label>
                <span>Email</span>
                <input type="email" name="temail" value="<?php if (isset($_COOKIE["temail"])) {
                                                                echo $_COOKIE["temail"];
                                                            } ?>" placeholder="Your login or email" id="temail" />
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="tpass" placeholder="Password" id="password" value="<?php if (isset($_COOKIE["tpass"])) {
                                                                                                    echo $_COOKIE["tpass"];
                                                                                                } ?>" />
            </label>
            <!-- <p class="forgot-pass">Forgot password?</p>-->
            <button type="submit" class="submit" name="submit">Sign In</button>
        </form>
    </div>
    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">

                <h3>Don't have an account? Please Sign up!<h3>
            </div>
            <div class="img__text m--in">

                <h3>If you already has an account, just sign in.<h3>
            </div>
            <div class="img__btn">
                <span class="m--up">Sign Up</span>
                <span class="m--in">Sign In</span>
            </div>
        </div>
        <form action=" " method="Post" id="sigin">
            <div class="form sign-up">
                <h2>Sign up</h2>
                <div class="col-md-6">
                    <label>
                        <span>First Name</span>
                        <input type="text" name="fname" type="text" placeholder="First Name" required />
                    </label>
                </div>
                <div class="col-md-6">
                    <label>
                        <span>Last Name</span>
                        <input type="text" name="lname" type="text" placeholder="Last name" />
                    </label><br>
                </div>
                <div class="col-md-12">
                    <label>
                        <span>Mobile</span>
                        <input type="text" name="phone" placeholder="Mobile" id="phone" required>
                    </label>
                </div>
                <div class="col-md-12">
                    <label>
                        <span>Email</span>
                        <input name="email" type="email" placeholder="Email" id="temail" required />
                    </label>
                </div>
                <div class="col-md-12">
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" placeholder="Password" id="tpass" required>
                    </label>
                    <button type="submit" class="submit" name="signin">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- login end here-->
<div data-elementor-type="footer" data-elementor-id="533" class="elementor elementor-533 elementor-location-footer" data-elementor-settings="[]">
    <div class="elementor-section-wrap">


        <section class="elementor-section elementor-top-section elementor-element elementor-element-d627889 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d627889" data-element_type="section" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2b26321" data-id="2b26321" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-cf832a6 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="cf832a6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;navigation&quot;:&quot;both&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2337618" data-id="2337618" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-fc9ac17 elementor-widget__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-invisible elementor-widget elementor-widget-image" data-id="fc9ac17" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img width="542" height="486" src="wp-content/uploads/2021/07/Footer-Img.png" class="attachment-full size-full" alt="" loading="lazy" srcset="wp-content/uploads/2021/07/Footer-Img.png 542w, wp-content/uploads/2021/07/Footer-Img.png 300w" sizes="(max-width: 542px) 100vw, 542px" /> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-854280d" data-id="854280d" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-629c154 elementor-invisible elementor-widget elementor-widget-heading" data-id="629c154" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Subscribe To Newsletter</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-c50610c elementor-button-align-start elementor-tablet-button-align-start elementor-mobile-button-align-stretch elementor-invisible elementor-widget elementor-widget-form" data-id="c50610c" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;30&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width_tablet&quot;:&quot;40&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;,&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="form.default">
                                            <div class="elementor-widget-container">
                                                <form class="elementor-form" method="post" name="New Form">
                                                    <input type="hidden" name="post_id" value="533" />
                                                    <input type="hidden" name="form_id" value="c50610c" />
                                                    <input type="hidden" name="referer_title" value="" />
                                                    <input type="hidden" name="queried_id" value="75" />
                                                    <div class="elementor-form-fields-wrapper elementor-labels-">
                                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-70 elementor-md-60 elementor-field-required">
                                                            <label for="form-field-email" class="elementor-field-label elementor-screen-only">Email</label>
                                                            <input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Enter Your Email Address" required="required" aria-required="true">
                                                        </div>
                                                        <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-30 e-form__buttons elementor-md-40">
                                                            <button type="submit" class="elementor-button elementor-size-md"> <span> <span class=" elementor-button-icon"> </span> <span class="elementor-button-text">Subscribe Now</span> </span> </button>
                                                        </div>
                                                    </div>
                                                </form>
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
        <section class="elementor-section elementor-top-section elementor-element elementor-element-66a17a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="66a17a8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;navigation&quot;:&quot;both&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8374783 elementor-invisible" data-id="8374783" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;navigation&quot;:&quot;both&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-c5e3561 elementor-widget elementor-widget-heading" data-id="c5e3561" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Store Location</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-802eae0 elementor-widget elementor-widget-text-editor" data-id="802eae0" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><strong>Address:</strong></p>
                                <p>M&D Pecanland Mexico Privada Andrés López 100 Zona Centro Aramberri, Nuevo León Mexico, <br>CP 67940</p>
                                <p><strong>Email:</strong></p>
                                <p><a href="mailto:DanielRD@mdpecanland.com" class="clchng">DanielRD@mdpecanland.com</a></p>
                                <p><strong>Email:</strong></p>
                                <p><a href="mailto:MaryA@mdpecanland.com" class="clchng">MaryA@mdpecanland.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-06c3970 elementor-hidden-phone elementor-invisible" data-id="06c3970" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;navigation&quot;:&quot;both&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4f18b52 elementor-widget elementor-widget-heading" data-id="4f18b52" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Useful Links</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a00eeab elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="a00eeab" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">About us</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Blog</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Check out</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Contact</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Service</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Shop</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6ca03d2 elementor-hidden-phone elementor-invisible" data-id="6ca03d2" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;navigation&quot;:&quot;both&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8c86a00 elementor-widget elementor-widget-heading" data-id="8c86a00" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Categories</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-0a997dd elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="0a997dd" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Fruits & Vegetables</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Dairy Products</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Package Foods</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Beverage</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Health & Wellness</span> </li>
                                    <li class="elementor-icon-list-item"> <span class="elementor-icon-list-text">Meat Varieties</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f3c9385 elementor-hidden-phone elementor-invisible" data-id="f3c9385" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;navigation&quot;:&quot;both&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-70d6e6a elementor-widget elementor-widget-heading" data-id="70d6e6a" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Opening Hours</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d61244c elementor-widget elementor-widget-text-editor" data-id="d61244c" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><strong>Monday &#8211; Saturday</strong></p>
                                <p>12.00 – 14.45</p>
                                <p><strong>Sunday – Thursday</strong></p>
                                <p>17.30 – 00.00</p>
                                <p>Friday – Saturday</p>
                                <p>17.30 – 00.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-41fff29 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="41fff29" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;navigation&quot;:&quot;both&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a3cd047" data-id="a3cd047" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6f71d5e elementor-invisible elementor-widget elementor-widget-text-editor" data-id="6f71d5e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Copyright 2021. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-56f61b4 elementor-invisible" data-id="56f61b4" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;navigation&quot;:&quot;both&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-cfade51 elementor-widget__width-auto elementor-widget elementor-widget-text-editor" data-id="cfade51" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Follow Us:</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6ea7109 elementor-widget__width-auto elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="6ea7109" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="social-icons.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-social-icons-wrapper elementor-grid"> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-b0498a2" target="_blank"> <span class="elementor-screen-only">Facebook-f</span> <i class="fab fa-facebook-f"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-d8047c0" target="_blank"> <span class="elementor-screen-only">Twitter</span> <i class="fab fa-twitter"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-2a52a48" target="_blank"> <span class="elementor-screen-only">Linkedin-in</span> <i class="fab fa-linkedin-in"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest elementor-repeater-item-481fb7a" target="_blank"> <span class="elementor-screen-only">Pinterest</span> <i class="fab fa-pinterest"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-b154fd6" target="_blank"> <span class="elementor-screen-only">Instagram</span> <i class="fab fa-instagram"></i> </a> </span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<link rel='stylesheet' id='elementor-post-427-css' href='wp-content/uploads/elementor/css/post-4273580.css?ver=1627642684' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min1845.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min1845.css?ver=4.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.minb045.css?ver=3.4.8' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-css' href='wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.minad76.css?ver=5.9.0' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css' href='wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.minad76.css?ver=5.9.0' type='text/css' media='all' />
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min272a.js?ver=2.7.0-wc.5.9.0' id='jquery-blockui-js'></script>

<script type='text/javascript' src='wp-content/uploads/essential-addons-elementor/cb70d11b8.mine957.js?ver=1637233755' id='cb70d11b8-js'></script>
<script type='text/javascript' src='wp-content/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0' id='hello-theme-frontend-js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min080f.js?ver=5.8.2' id='wp-embed-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1' id='smartmenus-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min1845.js?ver=4.9.6' id='font-awesome-4-shim-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min3d36.js?ver=3.3.1' id='elementor-pro-webpack-runtime-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.minb045.js?ver=3.4.8' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.minb045.js?ver=3.4.8' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' id='elementor-pro-frontend-js-before'>
    var ElementorProFrontendConfig = {
        "ajaxurl": "",
        "nonce": "0b854d045d",
        "urls": {
            "assets": ""
        },
        "i18n": {
            "toc_no_headings_found": "No headings were found on this page."
        },
        "shareButtonsNetworks": {
            "facebook": {
                "title": "Facebook",
                "has_counter": true
            },
            "twitter": {
                "title": "Twitter"
            },
            "google": {
                "title": "Google+",
                "has_counter": true
            },
            "linkedin": {
                "title": "LinkedIn",
                "has_counter": true
            },
            "pinterest": {
                "title": "Pinterest",
                "has_counter": true
            },
            "reddit": {
                "title": "Reddit",
                "has_counter": true
            },
            "vk": {
                "title": "VK",
                "has_counter": true
            },
            "odnoklassniki": {
                "title": "OK",
                "has_counter": true
            },
            "tumblr": {
                "title": "Tumblr"
            },
            "digg": {
                "title": "Digg"
            },
            "skype": {
                "title": "Skype"
            },
            "stumbleupon": {
                "title": "StumbleUpon",
                "has_counter": true
            },
            "mix": {
                "title": "Mix"
            },
            "telegram": {
                "title": "Telegram"
            },
            "pocket": {
                "title": "Pocket",
                "has_counter": true
            },
            "xing": {
                "title": "XING",
                "has_counter": true
            },
            "whatsapp": {
                "title": "WhatsApp"
            },
            "email": {
                "title": "Email"
            },
            "print": {
                "title": "Print"
            }
        },
        "menu_cart": {
            "cart_page_url": "",
            "checkout_page_url": ""
        },
        "facebook_sdk": {
            "lang": "en_US",
            "app_id": ""
        },
        "lottie": {
            "defaultAnimationUrl": ""
        }
    };
</script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/frontend.min3d36.js?ver=3.3.1' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/share-link/share-link.minb045.js?ver=3.4.8' id='share-link-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.4.8",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "a11y_improvements": true,
            "e_import_export": true,
            "hello-theme-header-footer": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "admin-top-bar": true,
            "form-submissions": true,
            "video-playlist": true
        },
        "urls": {
            "assets": ""
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description",
            "hello_header_logo_type": "logo",
            "hello_header_menu_layout": "horizontal",
            "hello_footer_logo_type": "logo"
        },
        "post": {
            "id": 75,
            "title": "Groxi%20Store%20%E2%80%93%20Just%20another%20WordPress%20site",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.minb045.js?ver=3.4.8' id='elementor-frontend-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min3d36.js?ver=3.3.1' id='pro-preloaded-elements-handlers-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/preloaded-modules.minb045.js?ver=3.4.8' id='preloaded-modules-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min3d36.js?ver=3.3.1' id='e-sticky-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min013a.js?ver=1.7.21-wc.5.9.0' id='zoom-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.minf214.js?ver=2.7.2-wc.5.9.0' id='flexslider-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min08f6.js?ver=4.1.1-wc.5.9.0' id='photoswipe-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min08f6.js?ver=4.1.1-wc.5.9.0' id='photoswipe-ui-default-js'></script>
<script type='text/javascript' src='wp-includes/js/underscore.min0028.js?ver=1.13.1' id='underscore-js'></script>

<script type='text/javascript' src='wp-includes/js/wp-util.min080f.js?ver=5.8.2' id='wp-util-js'></script>

<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.minad76.js?ver=5.9.0' id='wc-add-to-cart-variation-js'></script>

<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/single-product.minad76.js?ver=5.9.0' id='wc-single-product-js'></script>

<script>
    document.querySelector('.img__btn').addEventListener('click', function() {
        document.querySelector('.cont').classList.toggle('s--signup');
    });
</script>

</body>

</html>