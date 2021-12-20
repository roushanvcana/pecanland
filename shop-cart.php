<?php include "common/header.php" ?>
<?php
    if(isset($_GET['cart_id']))
    {
      $cartid=$_GET['cart_id'];
      $ecom->delete_cart($cartid);
    }
    if(isset($_REQUEST['update_cart']))
    {
      $ecom->update_cart();
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

        <section class="mb-0 section pb-5">
            <div class="container">
                <div class="row">
                   
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-center">Price</th>
                                    <th>Quantity</th>
                                    <th class="text-center">Total</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
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
                                        $t1="text".$list['id'];
                                        $t2="per".$list['id'];
                            ?>
                                <tr>
                                    <td class="col-sm-8 col-md-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="admin/upload/product/<?php echo $list['img']; ?>" style="width: 72px; height: 72px;"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-sm-1 col-md-1" style="text-align: center">
                                        <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                                    </td>
                                    <td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
                                    <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                                    <td class="col-sm-1 col-md-1">
                                        <button type="button" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-remove"></span> Remove
                                        </button>
                                    </td>
                                </tr>
                             <?php
                            $k++;
                                }
                            }
                        }
                        else
                        {
                            $k=0;
                            if(isset($_SESSION['cart']))
                            {
                                $sub=0;
                                foreach($_SESSION['cart'] as $list) 
                                { 
                                    $productnm=$list['productnm'];
                                    $qty=$list['quantity'];
                                    $total=$list['price'];
                                    $price=$total/$qty;
                                    $sub=$sub+$total;
                                    $t1="text".$k;
                                    $t2="per".$k;
                    ?>
                                <tr>
                                    <td class="col-sm-8 col-md-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="admin/upload/product/<?php echo $list['img']; ?>" style="width: 72px; height: 72px;"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#"><?php echo $productnm; ?></a></h4>
                                                <h5 class="media-heading"> by <a href="#"><?php echo $price?></a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-sm-1 col-md-1 text-center"><strong>$<?php echo $price?></strong></td>
                                    
                                    <input type="hidden" name="<?php echo $t2; ?>" value="<?php echo $list['price']; ?>" id="tot<?php echo $t2; ?>">
                                    <td class="col-sm-1 col-md-1" style="text-align: center">
                                      <input class="form-control" min="1" name="<?php echo $t1; ?>" id="<?php echo $t1; ?>" type="text" value="<?php echo $qty;?>" onchange="calculate('<?php echo $t1; ?>','<?php echo $price; ?>','<?php echo $t2; ?>');"/>
                                    </td>
                                   
                                    <td class="col-sm-1 col-md-1 text-center"><strong id="<?php echo $t2; ?>">$<?php echo $total;?></strong></td>
                                    <td class="col-sm-1 col-md-1">
                                        <button type="button" class="btn btn-danger" onclick="location.href='shop-cart.php?cart_id=<?php echo $list['cartid']; ?>'">
                                            <span class="glyphicon glyphicon-remove"></span> Remove
                                        </button>
                                    </td>
                            </tr>
                    <?php
                            $k++;
                                }
                            }
                        }
                    ?>  
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                        <h5>Subtotal</h5>
                                    </td>
                                    <td class="text-right">
                                        <h5><strong>$<?php echo $sub;?></strong></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                        <h5>Estimated shipping</h5>
                                    </td>
                                    <td class="text-right">
                                        <h5><strong>$10.0</strong></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                        <h3>Total</h3>
                                    </td>
                                    <td class="text-right">
                                        <h3><strong>$<?php echo $sub+10;?></strong></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                        <button type="button" class="btn btn-default">
                                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success" onclick="location.href='shop-checkout.php'">
                                            Checkout <span class="glyphicon glyphicon-play"></span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    
                </div>
            </div>

        </section>

        <?php include "common/footer.php" ?>