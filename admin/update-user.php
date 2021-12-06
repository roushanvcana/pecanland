<?php include('header.php');
$com=new common();
if(isset($_REQUEST['bsave_category']))
{
    $adm->updateUser();
}
if(isset($_GET['id'])){
   $id=$_GET['id'];
   $info = $adm->gettableList('user_details','id', $id);
   $info=$info==FALSE?FALSE:$info['single_row'];
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Customer</h1>
                </div>
                <div class="col-sm-6">
                    <!-- <a class="btn btn-primary btn-sm" style="float:right" href="product-list.php">View Product</a> -->
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Customer</h3>
            </div>
            <p style="color:green;"><?php echo $msg;?></p>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                    <?php if(!empty($_GET['id'])){?>
                    <input type="hidden" name="tid" value="<?php echo !empty($_GET['id']) ?  $_GET['id'] : ''; ?>" />
                    <?php }?>

                    <div class="row">
                        <div class="form-group  col-md-6">
                            <label>First Name</label>
                           <input type="text" name="fname" id="" class="form-control" value="<?php echo $info['fname'];?>">
                        </div>
                        <div class="form-group  col-md-6">
                            <label>Last Name</label>
                           <input type="text" name="lname" id="" class="form-control" value="<?php echo $info['lname'];?>">
                        </div>
                        <div class="form-group  col-md-6">
                            <label>Email</label>
                           <input type="text" name="email" id="" class="form-control" value="<?php echo $info['email'];?>">
                        </div>
                        <div class="form-group  col-md-6">
                            <label>Password</label>
                           <input type="text" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group  col-md-6">
                            <label>Phone</label>
                           <input type="text" name="phone" id="" class="form-control" value="<?php echo $info['phone'];?>">
                        </div>
                    </div>
                    <div class="form-group  col-md-6 col-lg-6">                       
                        <button class="btn btn-primary btn-sm" type="submit" name="bsave_category"
                            id="bsave_category">Update
                        </button>                       
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<?php include('footer.php')?>
