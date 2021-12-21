<?php include('common/header.php');?>



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
		</section>
	
		fgdfgdaf
		
	</div>
</div>


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