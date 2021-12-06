<?php include('header.php');
$com=new common();
$productList=$adm->gettableList('stock_details');
$productList=$productList==FALSE?FALSE:$productList['total_row'];

if(isset($_REQUEST['update_qty']))
{
    $adm->product_quantity_update();
}
?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Manage Stock</h1>
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
                            <th>Product Name</th>
                            <th>Sale Price</th>
                            <th>Mrp</th>
                            <th>Total Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                          $i =1; 
                          if($productList != false){
                            
                          foreach($productList as $value){
                            $category = $adm->gettableList('category','id', $value['category_id']);
                            $category=$category==FALSE?FALSE:$category['single_row'];    
                        ?>
                        <tr>
                            <td><?php echo  $i++; ?></td>
                            <td><?php echo $value['product_name']; ?></td>
                            <td><?php echo $value['sell_price']; ?></td>
                            <td><?php echo $value['mrp']; ?></td>
                            <td><?php echo $value['total_quantity']; ?></td>
                            <td>
                                <span class="badge badge-primary">
                                    <?php echo $value['status'];?>
                                </span>
                            </td>
                            <td>
                                <button type="button" onclick="getStockID(this)" data-id="<?php echo $value['id']; ?>" id="qtyupdate" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">Update Quantity</button>
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
                    <h5 class="modal-title" id="exampleModalLabel"><span id="product_name"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="#">                        
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Quantity:</label>
                            <input type="hidden" name="stock_id" id="stock_id">
                           <input type="text" name="pqty" class="form-control" id="pqty">
                        </div>
                        <button type="submit" name="update_qty" class="btn btn-primary">Update Qty</button>
                    </form>
                </div>
               
            </div>
        </div>
    </div>

</div>
<?php include('footer.php')?>

<script>
    function getStockID(elem){
      var stockID =  $(elem).attr('data-id');
      $.ajax({
        type: "POST",
        url: 'classfile/ajax.php',
        data: 'action=getquty&stockid='+stockID,
        success: function(result) {
            var getdata =  JSON.parse(result);          
           $('#product_name').html(getdata.product_name);
           $('#pqty').val(getdata.total_quantity);
           $('#stock_id').val(getdata.id);
           
        }
    });
        
    }
// $(document).ready(function(){

//     $('#qtyupdate').click(function(){
//       var stockID =  $(this).attr('data-id');
//       alert(stockID);
//     })
// })
</script>