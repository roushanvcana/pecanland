<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<?php include('common/header.php');
$order_id = $_GET['order_id'];
$order = $use->getorder_details();


?>
<div class="top_space">
<div role="tablist">
    <!-- Order Details-->
    <div class="card">


        <div id="collapseOrderDetails" class="collapse show" role="tabpanel" aria-labelledby="headingOrderDetails">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne" data-toggle="collapse" href="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
                                <h5 class="mb-0">
                                    Order Details
                                </h5>
                            </div>

                            <div id="collapseProduct" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                                <div class="card-body">
                                    <form>
                                        <div class="form-group row">
                                            <label for="draftStatus" class="col-sm-4 col-form-label ">Order Number</label>
                                            <div class="col-sm-8">
                                                <?php echo $order['single_row']['orderno']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cadStatus" class="col-sm-4 col-form-label ">Order Date</label>
                                            <div class="col-sm-8">
                                                <?php echo $order['single_row']['order_dt']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="orderStatus" class="col-sm-4 col-form-label ">Current Status</label>
                                            <div class="col-sm-8">
                                                <?php echo $order['single_row']['status']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="orderStatus" class="col-sm-4 col-form-label ">Payment Mode</label>
                                            <div class="col-sm-8">
                                                <?php echo $order['single_row']['pmode']; ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div><br>
                        <div class="card">
                            <div class="card-header collapsed" role="tab" id="headingInfo" data-toggle="collapse" href="#collapseInfo" aria-expanded="true" aria-controls="collapseTwo">
                                <h5 class="mb-0">
                                    Product Info
                                </h5>
                            </div>
                            <div id="collapseInfo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <table class="table table-xs mb-0">
                                        <thead>
                                            <tr>
                                                <th>Sr. number </th>
                                                <th>Product Name </th>
                                                <th> Color</th>
                                               
                                                <th>Quantity </th>
                                                <th>Price </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;

                                            if ($order != false) {
                                                $sum = 0;
                                                foreach ($order['total_row']  as $value) {
                                                $sum=$sum+$value['totalprice'];
                                                    $id = $value['id'];

                                            ?>
                                                    <tr>
                                                        <td><?php echo $i++; ?>
                                                        <td><?php echo $value['product_name']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $value['color']; ?>
                                                        </td>
                                            <td>
                                                            <?php echo $value['total_quantity']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $value['totalprice']; ?>
                                                        </td>
                                                    </tr>
                                            <?php }
                                            } ?>
                                            <tr ><td colspan="5" >  Total :<b> <?php echo $sum;?></b></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <div class="col nd-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-inline h5">Order Status</div>
                            </div>
                            <div class="card-body">
                                <div class="row shop-tracking-status">
                                    <div class="col-md-12">
                                        <div class="well">
                                            <h4>Your order status:</h4>
                                           
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
                                </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End of Order Details-->
</div>
<!-- Product Info-->





<?php include('common/footer.php'); ?>