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
                    <h1> Manage Order</h1>
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
                            <th>Order Date</th>
                            <th>Payment Mode</th>
                            <th>Payment Status</th>
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
                            <td><?php echo date("d-m-Y",strtotime($value['order_dt'])); ?></td>
                            <td><?php echo $value['pmode']; ?></td>
                            <td><?php echo $value['pay_status'];?></td>  
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include('footer.php')?>