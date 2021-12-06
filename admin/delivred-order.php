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
                    <h1> Manage Delivered Order</h1>
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
                                    data-toggle="modal" data-target="#exampleModal" onclick="changeStatus(this)">
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
                            <textarea class="form-control" id="message_text" placeholder="Type your message here"></textarea>
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

<script>
    function changeStatus(elem){
        var id =  $(elem).attr('data-id');
        var payment_status =  $('#payment_status').val();
        var message_text = $('#message_text').val();

        $.ajax({
        type: "POST",
        url: 'classfile/ajax.php',
        data: 'action=paystatus&id='+id+'&payment_status='+payment_status + '&message_text'+ message_text,
        success: function(result) {
                var getdata =  JSON.parse(result);                    
                $('#modeltitle').html(getdata.category);
                $("#cat_img").attr("src","upload/category/"+getdata.image+"");
                         
            
            }
        });
    }
</script>