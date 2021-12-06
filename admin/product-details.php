<?php include('header.php'); 
$com=new common();
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $info = $adm->gettableList('product_details','id', $id);
  $info=$info==FALSE?FALSE:$info['single_row'];
}


?>

<div class="content-wrapper">
  <?php if(!empty($info)){ ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Details</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="rounded" src="upload/product/<?php echo $info['image']?>"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><?php echo $info['product_name'];?></h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>MRP</b> <a class="float-right"><?php echo $info['mrp'];?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Sale Price</b> <a class="float-right"><?php echo $info['sell_price'];?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Product type</b> <a
                                        class="float-right"><?php echo  $com->getArrayVal($com->productType(), $info['product_type']); ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#activity" data-toggle="tab">Long Description</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Short
                                        Description</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Features</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <div class="panel panel-default">
                                        <div class="panel-body"><?php echo $info['long_description']; ?></div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <div class="panel panel-default">
                                        <div class="panel-body"><?php echo $info['short_description']; ?></div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <div class="panel panel-default">
                                        <div class="panel-body"><?php echo $info['features']; ?></div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <?php }else{ ?>
      <div class="panel panel-default">
          <div class="panel-body text-danger text-center">Opps! Please do not change url id</div>
      </div>
    <?php } ?>
</div>

<?php  include('footer.php')?>

