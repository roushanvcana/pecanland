<?php include('header.php'); 

$com=new common();
if(isset($_REQUEST['bsave_category']))
{
    $adm->saveCategory();
}
if(isset($_GET['tid'])){
   $id=$_GET['tid'];
   $info = $adm->gettableList('category','id', $id);
   $info=$info==FALSE?FALSE:$info['single_row'];
}
$categoryList=$adm->gettableList('category');
$categoryList=$categoryList==FALSE?FALSE:$categoryList['total_row'];

?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Category</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Category Form</h3>
                </div>
                <div class="card-body">
                    <p style="color:green;"><?php echo $msg;?></p>
                    <form method="post" action="" enctype="multipart/form-data">

                        <?php if(!empty($_GET['tid'])){?>
                        <input type="hidden" name="tid"
                            value="<?php echo !empty($_GET['tid']) ?  $_GET['tid'] : ''; ?>" />
                        <?php }?>

                        <div class="row">
                            <div class="form-group  col-md-4">
                                <label for="category">Category Name</label>
                                <input id="category" class="form-control" type="text" name="category"
                                    value="<?php echo !empty($info['category']) ?  $info['category'] : ''; ?>">
                            </div>


                            <div class="form-group  col-md-4">
                                <label for="myImg" class="col-form-label">Image </label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                  
                                    <?php foreach($com->getstatus() as $key => $value){?>
                                    <option <?php if(!empty($info['status']) && $info['status'] == $key){?> selected
                                        <?php }?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php }?>

                                </select>
                            </div>
                        </div>
                        <div class="form-group  col-md-6 col-lg-6">
                            <?php if(!isset($_GET['tid'])){?>
                            <button class="btn btn-primary btn-sm" type="submit" name="bsave_category"
                                id="bsave_category">Submit

                            </button>
                            <?php }else{?>
                            <button class="btn btn-primary btn-sm" type="submit" name="bsave_category"
                                id="bsave_category">Update

                            </button>
                            <?php }?>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                if($categoryList!=FALSE)
                                {
                                    foreach($categoryList as $cat)
                                    {
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><a href=""><?php echo $cat['category'];?></a></td>
                                <td>
                                    <button type="button" data-id="<?php echo $cat['id'];?>" data-image="<?php echo $cat['image'];?>"  class="badge badge-primary" data-toggle="modal" data-target="#exampleModal" onclick="getimage(this)">
                                    Show Image
                                    </button>
                                   
                                </td>
                                <td>                               
                                <span class="chip green lighten-5">
                                    <span class="green-text"><?php echo $cat['status'];?></span></span>
                                </td>
                                <td>
                                    <a class="btn btn-info btn" href="category.php?tid=<?php echo $cat['id']?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                   
                                </td>

                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span id="modeltitle"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="" alt="" id="cat_img" class="img-thumbnail">
      </div>      
    </div>
  </div>
</div>

</div>
<?php include('footer.php')?>

<script>
    function getimage(elem){
        var getImage =  $(elem).attr('data-image');
        var getid =  $(elem).attr('data-id');
        $.ajax({
        type: "POST",
        url: 'classfile/ajax.php',
        data: 'action=getimage&getImage='+getImage+'&getid='+getid,
        success: function(result) {
                var getdata =  JSON.parse(result);                    
                $('#modeltitle').html(getdata.category);
                $("#cat_img").attr("src","upload/category/"+getdata.image+"");
                         
            
            }
        });
    }
</script>