
<?php include "common/header.php";

$productList = $use_act->getallproduct();?>



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
			<section class="elementor-section elementor-top-section elementor-element elementor-element-6f1d2f6e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6f1d2f6e" data-element_type="section" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-479a1b79" data-id="479a1b79" data-element_type="column" data-settings="{&quot;navigation&quot;:&quot;both&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-42feaab1 elementor-product-loop-item--align-center elementor-products-grid elementor-wc-products elementor-show-pagination-border-yes elementor-widget elementor-widget-wc-archive-products" data-id="42feaab1" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;}" data-widget_type="wc-archive-products.default">
								<div class="elementor-widget-container">
									<div class="woocommerce columns-4 ">
										<div class="woocommerce-notices-wrapper"></div>
										<!-- <p class="woocommerce-result-count">
											Showing all 12 results</p>
										<form class="woocommerce-ordering" method="get">
											<select name="orderby" class="orderby" aria-label="Shop order">
												<option value="menu_order" selected='selected'>Default sorting</option>
												<option value="popularity">Sort by popularity</option>
												<option value="rating">Sort by average rating</option>
												<option value="date">Sort by latest</option>
												<option value="price">Sort by price: low to high</option>
												<option value="price-desc">Sort by price: high to low</option>
											</select>
											<input type="hidden" name="paged" value="1" />
										</form> -->

										<ul class="products columns-4">
											<?php
									$i = 1;
									if ($productList != FALSE) {
											foreach ($productList as $pro) {
													$id=$pro['id'];
									?>
											<li class="product type-product post-1558 status-publish first instock product_cat-uncategorized has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
												<a href="../product/beef-steak/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
													<span class="onsale">Sale!</span>
												<img width="300" height="263" src="admin/upload/product/<?php echo $pro['image']?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
													<h2 class="woocommerce-loop-product__title"><?php echo $pro['product_name'] ?></h2>
													<div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
													<span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $pro['sell_price'] ?></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $pro['mrp'] ?></bdi></span></ins></span>
												</a><a  data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1558" data-product_sku="" aria-label="Add &ldquo;Beef Steak&rdquo; to your cart" rel="nofollow" onclick="addcart('<?php echo $id; ?>')">Add to cart</a></li>
										<?php }}?>

										</ul>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php include "common/footer.php" ?>
