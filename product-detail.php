<?php include('common/header.php');
$categoryList = $use_act->getallcategory();
include('admin/login_verify.php');
//



$com = new common();
if (isset($_REQUEST['review'])) {
    $obj->review();
}

    $id=$_GET['product_id'];

    $product= $use_act->getproduct($id);


$relatedproduct = $use_act->getrelatedproduct($id);

$reviews = $use_act->reviews($id);

?>


<style>
.preview {
  display: -webkit-box;
  display: -webkit-flex;
 /* border: 1px solid #000;*/
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
	border: 0px solid rgba(0,0,0,.125);
  margin: 50px 0;
  background: #fff;
  padding: 2em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  padding: 0 0 0 50px;
  /*border: 1px solid #000;*/
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #9fcb22;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }
	.quantity {
    width: 20%;
    float: left;
    margin: 0 10px 0 0;
    padding: 0 0;
}
	.quantity input {
    width: 100%;
    border: 1px solid #666;
    border-radius: 3px;
    padding: 13px 2rem;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    font-size: 20px;
    text-align: center;
}
	ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 41px;
	border-bottom: 1px solid #ccc;
	width: 100%;
}

ul.tabs li {
	float: left;
	margin: 0;
	cursor: pointer;
	padding: 5px 21px;
	height: 40px;
	line-height: 31px;
	border-top: 1px solid #ccc;
	border-left: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	background-color: #666;
	color: #ccc;
	overflow: hidden;
	position: relative;
}

.tab_last { border-right: 1px solid #ccc; }

ul.tabs li:hover {
	background-color: #ccc;
	color: #333;
}

ul.tabs li.active {
	background-color: #fff;
	color: #333;
	border-bottom: 1px solid #fff;
	display: block;
}

.tab_container {
	border: 1px solid #333;
	border-top: none;
	clear: both;
	float: left;
	width: 100%;
	background: #fff;
	overflow: auto;
	margin: 0 0 30px;
}

.tab_content {
	padding: 20px;
	display: none;
}
.tab_content p {
    font-size: 16px;
    text-align: justify;
    font-weight: 300;
    line-height: 22px;
}
.tab_drawer_heading { display: none; }

@media screen and (max-width: 480px) {
	.tabs {
		display: none;
	}
	.tab_drawer_heading {
		background-color: #ccc;
		color: #fff;
		border-top: 1px solid #333;
		margin: 0;
		padding: 5px 20px;
		display: block;
		cursor: pointer;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	.d_active {
		background-color: #666;
		color: #fff;
	}

}
  .cpontain {
      margin: 77px;
  }

</style>

<!-- <div data-elementor-type="product-archive" data-elementor-id="961" class="elementor elementor-961 elementor-location-archive product" data-elementor-settings="[]">
	<div class="elementor-section-wrap"> -->

		   <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-29fd222f elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="29fd222f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;navigation&quot;:&quot;both&quot;}">
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
												<nav class="woocommerce-breadcrumb"><a href="#">Home</a>&nbsp;&#47;&nbsp;Product</nav>
											</div>
										</div>
										<div class="elementor-element elementor-element-2a3ea26c elementor-widget elementor-widget-heading" data-id="2a3ea26c" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Product Detail </h2> </div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section> -->

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
			<nav class="woocommerce-breadcrumb"><a href="index.php">Home</a>&nbsp;&#47;&nbsp;Product Detail</nav>		</div>
				</div>
				<div class="elementor-element elementor-element-7da1c486 elementor-widget elementor-widget-heading" data-id="7da1c486" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Product Detail</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
		</div>
	</div>
</div>
</main>

		<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

			<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="admin/upload/product/<?php echo $product['image']?>" /></div>
						  <!-- <div class="tab-pane" id="pic-2"><img src="wp-content/uploads/2021/07/MicrosoftTeams-image-13.jpg" /></div>
						  <div class="tab-pane" id="pic-3"><img src="wp-content/uploads/2021/07/MicrosoftTeams-image-14.jpg" /></div>
						  <div class="tab-pane" id="pic-4"><img src="wp-content/uploads/2021/07/MicrosoftTeams-image-46.jpg" /></div> -->

						</div>
						<!-- <ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="admin/upload/product/<?php echo $pro['image']?>"  /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="wp-content/uploads/2021/07/MicrosoftTeams-image-13.jpg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="wp-content/uploads/2021/07/MicrosoftTeams-image-14.jpg" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="wp-content/uploads/2021/07/MicrosoftTeams-image-46.jpg" /></a></li>
						</ul> -->

					</div>
					<div class="details col-md-6">
						<h2 class="product-title"><?php echo $product['product_name'];?></h2>
						<div class="rating">
							<!-- <div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div> -->
							<!-- <span class="review-no">41 reviews</span> -->
						</div>
						<p class="product-description"><?php echo $product['short_description'];?></p>
						<h4 class="price">current price: <span>$<?php echo $product['mrp'];?></span></h4>
						<!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> -->

						<div class="action">
							<div class="quantity">
							<input type="number"  class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
								</div>
							<button class="add-to-cart btn btn-default" type="button"  onclick="addcart('<?php echo $id; ?>')">add to cart</button>
<!--							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="tabs">
  <li class="active" rel="tab1">Description</li>
  <!-- <li rel="tab2">Additional Information</li> -->
  <li rel="tab3">Review For Fresh Bread</li>
</ul>
<div class="tab_container">
  <h3 class="d_active tab_drawer_heading" rel="tab1">Description</h3>
  <div id="tab1" class="tab_content">
  <h4>Description</h4>
    <p><?php echo $product['long_description'];?> </p>
  </div>
  <!-- #tab1 -->
  <h3 class="tab_drawer_heading" rel="tab2">Additional Information</h3>
  <div id="tab2" class="tab_content">
  <h4>Additional Information</h4>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
  </div>
  <!-- #tab2 -->
  <h3 class="tab_drawer_heading" rel="tab3">Review For Fresh Bread</h3>
  <div id="tab3" class="tab_content">
  <h4>Review For Fresh Bread</h4>
    <p>
      <div class="pro_review">
        <?php
        $i = 1;
        if ($reviews!= FALSE) {
        foreach ($reviews as $pro) {
            $ids=$pro['id'];
        ?>
<div class="review_details">
<div class="review_info"  >
<h3 style="color:#9fcb22;"><i class="fa fa-user" ></i>&nbsp;<?php echo $pro['name']?></h3>
<div class="rating_send">
<h5 style="color:#9fcb22;"><?php echo $pro['email']?></h5>
</div>
 </div>
<div class="review_date">
<span><?php echo $pro['created_at']?> </span>
</div>
<p><?php echo $pro['comment']?> </p>
</div>
	<?php }}?>
</div>
<div id="review_form_wrapper" class="col-md-3" >
<div id="review_form">
<div id="respond" class="comment-respond">
<h3 id="reply-title" class="comment-reply-title"></h3>
<form action="" method="post"  >
    																		<input id="hidden" name="product_id" type="hidden" value="<?php echo $id;?>" size="30" aria-required="true" >								<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label>  <input type="text" value="" size="30" aria-required="true" name="name"/> </p>
    <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" aria-required="true" /></p>
    												<p class="comment-form-comment"><label for="comment">Your Review</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>
    							<button type="submit"  name="review">Review</button>

  </p>					</form>
    							</div><!-- #respond -->
    						</div>
    		</div>


    </p>
  </div>
  <!-- #tab3 -->

</div>

				</div>
			</div>
		</div>
<div class="cpontain">

<!-- .tab_container -->
</div>

</main>

<?php include('common/footer.php');?>

<!--<script>
$( document ) . ready( function () {

	/* Set rates */
	var taxRate = 0.05;
	var fadeTime = 300;

	/* Assign actions */
	$( '.pass-quantity input' ) . change( function () {
		updateQuantity( this );
	} );

	$( '.remove-item button' ) . click( function () {
		removeItem( this );
	} );


	/* Recalculate cart */
	function recalculateCart() {
		var subtotal = 0;

		/* Sum up row totals */
		$( '.item' ) . each( function () {
			subtotal += parseFloat( $( this ) . children( '.product-line-price' ) . text() );
		} );

		/* Calculate totals */
		var tax = subtotal * taxRate;
		var total = subtotal + tax;

		/* Update totals display */
		$( '.totals-value' ) . fadeOut( fadeTime, function () {
			$( '#cart-subtotal' ) . html( subtotal . toFixed( 2 ) );
			$( '#cart-tax' ) . html( tax . toFixed( 2 ) );
			$( '.cart-total' ) . html( total . toFixed( 2 ) );
			if ( total == 0 ) {
				$( '.checkout' ) . fadeOut( fadeTime );
			} else {
				$( '.checkout' ) . fadeIn( fadeTime );
			}
			$( '.totals-value' ) . fadeIn( fadeTime );
		} );
	}


	/* Update quantity */
	function updateQuantity( quantityInput ) {
		/* Calculate line price */
		var productRow = $( quantityInput ) . parent() . parent();
		var price = parseFloat( productRow . children( '.product-price' ) . text() );
		var quantity = $( quantityInput ) . val();
		var linePrice = price * quantity;

		/* Update line price display and recalc cart totals */
		productRow . children( '.product-line-price' ) . each( function () {
			$( this ) . fadeOut( fadeTime, function () {
				$( this ) . text( linePrice . toFixed( 2 ) );
				recalculateCart();
				$( this ) . fadeIn( fadeTime );
			} );
		} );
	}

	/* Remove item from cart */
	function removeItem( removeButton ) {
		/* Remove row from DOM and recalc cart total */
		var productRow = $( removeButton ) . parent() . parent();
		productRow . slideUp( fadeTime, function () {
			productRow . remove();
			recalculateCart();
		} );
	}

} );
</script> -->
<script>

    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {

      $(".tab_content").hide();
      var activeTab = $(this).attr("rel");
      $("#"+activeTab).fadeIn();

      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");

    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {

      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel");
      $("#"+d_activeTab).fadeIn();

	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");

	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });


	$('ul.tabs li').last().addClass("tab_last");

</script>
