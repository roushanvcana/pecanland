<?php include('header.php');
$com=new common();
if(isset($_REQUEST['bsave_category']))
{
    $adm->saveProduct();
}
if(isset($_GET['id'])){
   $id=$_GET['id'];
   $info = $adm->gettableList('product_details','id', $id);
   $info=$info==FALSE?FALSE:$info['single_row'];
}
$categoryList=$adm->gettableList('category');
$categoryList=$categoryList==FALSE?FALSE:$categoryList['total_row'];


$subcategoryList=$adm->gettableList('sub_category');
$subcategoryList=$subcategoryList==FALSE?FALSE:$subcategoryList['total_row'];

?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary btn-sm" style="float:right" href="product-list.php">View Product</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Product</h3>
            </div>
            <p style="color:green;"><?php echo $msg;?></p>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                    <?php if(!empty($_GET['id'])){?>
                    <input type="hidden" name="tid" value="<?php echo !empty($_GET['id']) ?  $_GET['id'] : ''; ?>" />
                    <?php }?>

                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label for="category">Category Name</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value=" ">Select Category</option>
                                <?php foreach($categoryList as $value){?>
                                <option <?php if(!empty($info['category_id']) && $info['category_id'] == $value['id']){?> selected
                                    <?php }?> value="<?php echo $value['id']; ?>"><?php echo $value['category']; ?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group  col-md-4">
                            <label>Sub Category</label>
                            <select name="subcategory_id" id="subcategory_id" class="form-control">

                            </select>

                        </div>
                        <div class="form-group  col-md-4">
                            <label>Product Type</label>
                            <select name="product_type" id="product_type" class="form-control">
                                <option value="">Select Product Type</option>
                                <?php foreach($com->productType() as $key => $value){?>
                                <option <?php if(!empty($info['product_type']) && $info['product_type'] == $key){?> selected
                                    <?php }?> value="<?php echo $key; ?>"> <?php echo $value; ?></option>
                                <?php }?>

                            </select>
                        </div>
                        <div class="form-group  col-md-4">
                            <label>Product Name</label>
                            <input id="product_name" type="text" name="product_name" class="form-control" value="<?php echo !empty($info['product_name']) ?  $info['product_name'] : ''; ?>">
                        </div>
                        <div class="form-group  col-md-4">
                            <label>MRP</label>
                            <input id="mrp" type="number" name="mrp" value="<?php echo !empty($info['mrp']) ?  $info['mrp'] : ''; ?>" class="form-control">
                        </div>
                        <div class="form-group  col-md-4">
                            <label>Sale Price </label>
                            <input id="sell_price" type="number" name="sell_price" value="<?php echo !empty($info['sell_price']) ?  $info['sell_price'] : ''; ?>" class="form-control">
                        </div>
                        <div class="form-group  col-md-12">
                            <label>Long Description</label>

                            <textarea name="long_description" id="summernote" cols="30" rows="10"><?php echo !empty($info['long_description']) ?  $info['long_description'] : ''; ?></textarea>
                        </div>
                        <div class="form-group  col-md-12">
                            <label>Short Description</label>

                            <textarea name="short_description" id="short_description" cols="30" rows="10"><?php echo !empty($info['short_description']) ?  $info['short_description'] : ''; ?></textarea>
                        </div>
                        <div class="form-group  col-md-12">
                            <label>Feature</label>
                            <textarea name="features" id="features" cols="30" rows="10"><?php echo !empty($info['features']) ?  $info['features'] : ''; ?></textarea>
                        </div>
                        <div class="form-group col-md-12" id="product_list" style="display: none;">
                            <div class="card card-purple">
                                <div class="card-header">
                                    <h3 class="card-title">Product List</h3>
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" id="table_search" class="form-control float-right"
                                                placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./card-header -->
                                <div class="card-body">                                  
                                    <table class="table table-bordered table-hover" id="product_list_page">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span class="ml-3">#</span>
                                                </th>
                                                <th>Product Name</th>
                                                <th>MRP</th>
                                                <th>Product Price</th>
                                                <th>Product Quantity</th>
                                                <th>Product Unit</th>
                                                <th>&nbsp;</th>

                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                           
                                        </tbody>
                                       
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="form-group col-md-12" id="product_package" style="display: none;">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Product Package</h3>                                   
                                </div>
                                <!-- ./card-header -->
                                <div class="card-body">                                  
                                    <table class="table table-bordered table-hover" >
                                        <thead>
                                            <tr>
                                                <th><span class="ml-3">#</span></th>
                                                <th>Product Name</th>
                                                <th>MRP</th>
                                                <th>Sale Price</th>
                                                <th>Product Quantity</th>
                                                <th>Product Unit</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tmpproduct_list_page" >
                                           
                                        </tbody>
                                        <tfoot id="tfooter">
                                            <tr>
                                                <th rowspan="1" colspan="1">&nbsp;</th>
                                                <th rowspan="1" colspan="1">&nbsp;</th>
                                                <th rowspan="1" colspan="1">&nbsp;</th>
                                                <th rowspan="1" colspan="1">Total Sale Price : <span id="salePrice"></span></th>
                                                <th rowspan="1" colspan="1">Total Quantity : <span id="totalQuantity"></span></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="form-group  col-md-3" style="display: none;" id="pcolor">
                            <label>Color</label>
                            <input id="color" type="text" name="color" value="<?php echo !empty($info['color']) ?  $info['color'] : ''; ?>" class="form-control">
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Total Quantity</label>
                            <input id="total_quantity" type="number" name="total_quantity" value="<?php echo !empty($info['total_quantity']) ?  $info['total_quantity'] : ''; ?>"               class="form-control">
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Unit</label>
                            <select name="unit" class="form-control">
                                <?php foreach($com->unit() as $key => $value){?>
                                <option <?php if(!empty($info['unit']) && $info['unit'] == $key){?> selected <?php }?>
                                    value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group  col-md-3">
                            <label>Product Image  
                                <?php if(!empty($info['image'])){?> 
                                    <a href="upload/product/<?php echo $info['image']; ?>" class="badge badge-info" download>View Image</a>
                                <?php }?>
                             </label>
                            <input id="image" type="file" name="image" value="" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
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
                        <?php if(!isset($_GET['id'])){?>
                        <button class="btn btn-primary btn-sm" type="submit" name="bsave_category"
                            id="bsave_category">Submit

                        </button>
                        <?php }else{?>
                        <button class="btn btn-primary btn-sm" type="submit" name="bsave_category"
                            id="bsave_category">Update

                        </button>
                        <?php }?>

                    </div>

                </div>
            </form>
        </div>

    </section>

</div>
<?php include('footer.php')?>

<script>
   // "use strict"
<?php 
    if(!empty($_GET['id'])){
?>
(function(){
   var catId =  $('#category_id').val();
   $.ajax({
            url: 'classfile/ajax.php',
            type: 'post',
            data: "action=getsubCategory&categoryID=" + catId,
            success: function(responseData) {            
                $('#subcategory_id').html(responseData);
            }
        });

    var ptype = $('#product_type').val();    
    if(ptype != 1){
        
        $('#product_list').css('display','block');
        $('#product_package').css('display','block');

        $.ajax({
                url: 'classfile/ajax.php',
                type: 'post',
                data: "action=getproductlist",
                dataType: 'json',
                success: function(responseData) {
                   
                    var event_data = '';
                    var i = 1;
                    $('#product_list_page').empty();
                    $.each(responseData, function(index, value){

                       // console.log(value.product_name);
                        event_data += '<tr><td><span class="ml-3">'+ i++ +'</span></td>';
                        event_data += '<td>'+value.product_name+'</td>';
                        event_data += '<td>'+value.mrp+'</td>';
                        event_data += '<td>'+value.sell_price+'</td>';
                        event_data += '<td><input type="number" name="product_qty" id="product_qty_'+ value.id +'" class="form-control"></td><td>';
                        event_data += '<select name="product_unit" id="product_unit_'+ value.id +'" class="form-control">';
                        <?php foreach($com->unit() as $key => $value){?>
                            event_data += '<option value="<?php echo $key; ?>"><?php echo $value; ?></option>';  
                                                   
                        <?php }?>                       
                        event_data += '</select> </td>';
                        event_data += '<td><button type="button" class="btn btn-primary btn-sm" data-id="'+value.id+'" onclick="btnproduct(this)" ><i class="fas fa-plus"></i></button></td>';
                        event_data += '</tr>';                      
                      
                    });
                      
                    $('#product_list_page').append(event_data);
                                        
                }
        });
    }    

    ///////////// for add product list///////////////////
    var listId = '<?php echo $_GET['id']; ?>';

    addproductList(listId);

})();

<?php }?>

$("#table_search").on("keyup", function() {

    var value = $(this).val().toLowerCase();  
  
    $("#product_list_page tr").filter(function() {       
      
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

        // console.log( $(".searchable tr:visible").length);

       
        if($('#product_list_page tr:visible').length == 0)
        {
            $('#product_list_page').append('<tr class="no-data text-center"><td colspan="6">No Record Found ....</td></tr>');
          
        }else{
            $('.no-data').hide();
           
        }
});

function btnproduct(elem){
    var product_id = $(elem).attr('data-id');
    var product_qty = $('#product_qty_'+ product_id +'').val();
    var product_unit = $('#product_unit_'+ product_id +'').val();
    $.ajax({
        url: 'classfile/ajax.php',
        type: 'post',
        data: "action=temprorayadd_product&product_id=" + product_id + '&product_qty=' + product_qty + '&product_unit=' + product_unit,
        success: function(responseData) { 
            
          if(responseData == 1){
             $('#product_package').css('display','block'); 
            addproductList()

          }
            
        }
    });
}

function addproductList(id=''){

    let dataUrl;
    
    if(id != ''){
        dataurl = "action=temprorylist&listId='"+ id +"'";
    }else{
        dataurl = "action=temprorylist";
    }

   // console.log(dataurl);

    $.ajax({
        url: 'classfile/ajax.php',
        type: 'post',
        data: dataurl,
        dataType: 'json',
        success: function(responseData) {            
            var event_datas = '';
            var i = 1;
            $('#tmpproduct_list_page').empty();

            var totalSalePrice = 0;
            var totalQuantity = 0;

            $.each(responseData, function(index, value){
                // console.log(value.product_name);
                totalSalePrice += Number(value.sell_price * value.product_quantity);
                totalQuantity  += Number(value.product_quantity);
                console.log(totalSalePrice);
                event_datas += '<tr><td><span class="ml-3">'+ i++ +'</span></td>';
                event_datas += '<td>'+value.product_name+'</td>';
                event_datas += '<td>'+value.mrp+'</td>';
                event_datas += '<td>'+value.sell_price+'</td>';
                event_datas += '<td>'+value.product_quantity+'</td>';
                event_datas += '<td>'+value.product_unit+'</td>';             
                event_datas += '<td><button type="button" class="btn btn-danger btn-sm" data-product-id = "'+ id +'" data-tquantity="'+totalQuantity+'"  data-pquantity="'+value.product_quantity+'"  data-tsale="'+totalSalePrice+'"  data-sale="'+ value.sell_price * value.product_quantity  +'" data-id="'+value.id+'" onclick="deleteproductlist(this)" ><i class="fas fa-minus"></i></button></td>';
                event_datas += '</tr>'; 
                
            });
            $('#salePrice').html(totalSalePrice);
            $('#totalQuantity').html(totalQuantity);
            $('#tmpproduct_list_page').append(event_datas);
                                
        }
    });


}

function deleteproductlist(elem){

    var listID = $(elem).attr('data-id');
    var saleprice = $(elem).attr('data-sale');
    var tsaleprice = $(elem).attr('data-tsale');

    var tquantity = $(elem).attr('data-tquantity');
    var pquantity = $(elem).attr('data-pquantity');

    var productID = $(elem).attr('data-product-id');
    let dataUrl;
    if(productID != ''){
        dataUrl =  "action=deletetemprorylist&listID=" + listID + '&productid=' + productID;
    }else{
        dataUrl =  "action=deletetemprorylist&listID=" + listID ;
    }

       
    var remainingSale =  Number(tsaleprice) - Number(saleprice);
    var remaininquantity =  Number(tquantity) - Number(pquantity);
    $.ajax({
        url: 'classfile/ajax.php',
        type: 'post',
        data: dataUrl,
        dataType: 'json',
        success: function(responseData){            
            if(responseData == 1){
                $(elem).closest('tr').remove();
                $('#salePrice').html(remainingSale);
                $('#totalQuantity').html(remaininquantity);
            }                              
        }
    });
}



$('document').ready(function() {

    $('#bsave_category').click(function() {
       

        var product_name = $("#product_name").val();    
        if (product_name == '') {
            document.getElementById("product_name").style.borderColor = "#ff0000";
            document.getElementById("product_name").focus();
            return false;
        }

        var product_name = $("#mrp").val();    
        if (product_name == '') {
            document.getElementById("mrp").style.borderColor = "#ff0000";
            document.getElementById("mrp").focus();
            return false;
        }

        var mrp = $("#mrp").val();    
        if (mrp == '') {
            document.getElementById("mrp").style.borderColor = "#ff0000";
            document.getElementById("mrp").focus();
            return false;
        }

        var mrp = $("#sell_price").val();    
        if (mrp == '') {
            document.getElementById("sell_price").style.borderColor = "#ff0000";
            document.getElementById("sell_price").focus();
            return false;
        }

        var total_quantity = $("#total_quantity").val();    
        if (total_quantity == '') {
            document.getElementById("total_quantity").style.borderColor = "#ff0000";
            document.getElementById("total_quantity").focus();
            return false;
        }

        

        
    })

    $('#category_id').change(function() {
        var categoryID = $(this).val();
        $.ajax({
            url: 'classfile/ajax.php',
            type: 'post',
            data: "action=getsubCategory&categoryID=" + categoryID,

            success: function(responseData) {
                console.log(responseData);
                $('#subcategory_id').html(responseData);
            }
        });
    })

    $('#product_type').change(function() {
        var productType = $(this).val();

        if(productType == 2 || productType == 3){
            $('#pcolor').css('display',"block");
            $('#product_list').css('display',"block");

            $.ajax({
                url: 'classfile/ajax.php',
                type: 'post',
                data: "action=getproductlist",
                dataType: 'json',
                success: function(responseData) {
                   
                    var event_data = '';
                    var i = 1;
                    $('#product_list_page').empty();
                    $.each(responseData, function(index, value){

                       // console.log(value.product_name);
                        event_data += '<tr><td><span class="ml-3">'+ i++ +'</span></td>';
                        event_data += '<td>'+value.product_name+'</td>';
                        event_data += '<td>'+value.mrp+'</td>';
                        event_data += '<td>'+value.sell_price+'</td>';
                        event_data += '<td><input type="number" name="product_qty" id="product_qty_'+ value.id +'" class="form-control"></td><td>';
                        event_data += '<select name="product_unit" id="product_unit_'+ value.id +'" class="form-control">';
                        <?php foreach($com->unit() as $key => $value){?>
                            event_data += '<option value="<?php echo $key; ?>"><?php echo $value; ?></option>';  
                                                   
                        <?php }?>                       
                        event_data += '</select> </td>';
                        event_data += '<td><button type="button" class="btn btn-primary btn-sm" data-id="'+value.id+'" onclick="btnproduct(this)" ><i class="fas fa-plus"></i></button></td>';
                        event_data += '</tr>';                      
                      
                    });
                      
                    $('#product_list_page').append(event_data);
                                        
                }
            });

        }else{
            $('#pcolor,#product_list').css('display',"none");
        }

    })    
    
});
</script>

<script>
$('textarea#summernote, textarea#short_description, textarea#features').summernote({
    placeholder: 'Description',
    tabsize: 2,
    height: 100,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
        // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
    ],
});
</script>