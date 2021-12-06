<?php include('header.php');
$com=new common();
$orderList=$adm->gettableList('order_details');
$orderList=$orderList==FALSE?FALSE:$orderList['total_row'];

?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Manage Accepted Order</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Order Number</th>
                            <th>Customer Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Order Date</th>
                            <th>Payment Mode</th>
                            <th>Payment Status</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                          $i =1; 
                          if($orderList != false){
                            
                          foreach($orderList as $value){
                            $username = $adm->gettableList('user_details','id', $value['userid']);
                            $username=$username==FALSE?FALSE:$username['single_row'];    
                        ?>
                        <tr>
                            <td><?php echo  $i++; ?></td>
                            <td><?php echo $value['orderno']; ?></td>
                            <td><?php echo $username['fname'].' '.$username['lname']; ?></td>
                            <td><?php echo $username['phone']; ?></td>
                            <td><?php echo $username['email']; ?></td>
                            <td><?php echo date("d-m-Y",strtotime($value['order_dt'])); ?></td>
                            <td><?php echo $value['pmode']; ?></td>
                            <td><?php echo $value['pay_status'];?></td>
                            <td>
                                <button type="button" data-id="<?php echo $value['id'];?>" class="badge badge-primary"
                                    data-toggle="modal" data-target="#exampleModal">
                                    Click me
                                </button>

                            </td>
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                           <select name="payment_status" id="payment_status" class="form-control">
                               <?php
                                foreach ($com->payment_status() as $key => $value) {
                                ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text" placeholder="Type your message here"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Change Status</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php')?>