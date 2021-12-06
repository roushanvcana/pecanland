<?php include('header.php');
$com=new common();
$productList=$adm->gettableList('product_details');
$productList=$productList==FALSE?FALSE:$productList['total_row'];
?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Manage Product</h1>
                </div>
                <div class="col-sm-6">
                  <a class="btn btn-primary btn-sm" style="float:right" href="add-product.php">Add Product</a>
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
                            <th>Category</th>
                            <th>Product Type</th>
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
                            <td><?php echo $category['category']; ?></td>
                            <td><?php echo  $com->getArrayVal($com->productType(), $value['product_type']); ?></td>
                            <td><span class="badge badge-primary"><?php echo $value['status'];?></span></td>
                            <td>
                              <a href="add-product.php?id=<?php echo $value['id']; ?>"><i class="btn btn-primary btn-sm fas fa-edit"></i></a>
                              <a href="product-details.php?id=<?php echo $value['id']; ?>"><i class="btn btn-info btn-sm fas fa-eye"></i></a>
                            </td>
                           
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>
<?php include('footer.php')?>