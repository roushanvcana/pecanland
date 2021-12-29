<?php
    include "../config/config.php";
    include "../config/database.php";
    include "common.php";
    include "user.php";
    include "ecommerce.php";
    require_once("../login_verify.php");

   $db=new database();
   $config =new config();
   $com=new common();

    if($_REQUEST['action'] == 'getsubCategory'){
        $catid = $_POST['categoryID'];
        $sql="select * from sub_category where category_id='$catid'";
        $categoryList= $db->selectdata($sql);
        if($categoryList!=FALSE)
        {
          foreach($categoryList['total_row'] as $cat)

            echo  "<option value='".$cat['id']."'>".$cat['name']."</option>";
        }
        else
          echo 0;
    }

    else if($_REQUEST['action'] == 'getproductlist'){

        $sql="select * from product_details where product_type=1";
        $productList=$db->selectdata($sql);
        $productList=$productList==FALSE?FALSE:$productList['total_row'];
        $plist = array();
        foreach($productList as $value){
            $plist[] = array(
                "id" => $value['id'],
                "product_name" => $value['product_name'],
                "mrp" => $value['mrp'],
                "sell_price" => $value['sell_price']
            );
        }
        echo json_encode($plist);
    }
    else if($_REQUEST['action'] == 'temprorayadd_product'){

        $data = array(
            "product_id" => $_POST['product_id'],
            "product_quantity" => $_POST['product_qty'],
            "product_unit" => $_POST['product_unit'],
            "cstatus" => 1,
            "cip" => 1,
            "cby" => $_SESSION['user_id']
          );

        $ins= $db->insertdata('temrory_add_product',$data);
        if($ins)
           echo $str= 1;
        else
           echo $str= 2;
    }

    else if($_REQUEST['action'] == 'temprorylist'){

        if(!empty($_POST['listId'])){

            $sql="SELECT tmp.id, product.product_name, product.mrp, product.sell_price,tmp.product_quantity, tmp.product_unit
            FROM product_grouping as tmp
            INNER JOIN product_details as product
            ON tmp.product_id = product.id where tmp.parent_id=".$_POST['listId']."
            ORDER BY tmp.id desc";

        }else{

            $sql="SELECT tmp.id, product.product_name, product.mrp, product.sell_price,tmp.product_quantity, tmp.product_unit
            FROM temrory_add_product as tmp
            INNER JOIN product_details as product
            ON tmp.product_id = product.id
            ORDER BY tmp.id desc";

        }

       //echo $sql; die;

        $productList=$db->selectdata($sql);
        $productList=$productList==FALSE?FALSE:$productList['total_row'];
        $plist = array();
        foreach($productList as $value){
            $plist[] = array(
                "id" => $value['id'],
                "product_name" => $value['product_name'],
                "mrp" => $value['mrp'],
                "sell_price" => $value['sell_price'],
                "product_quantity" => $value['product_quantity'],
                "product_unit" => $com->getArrayVal($com->unit(), $value['product_unit'])
            );
        }

        echo json_encode($plist);
    }

    else if($_REQUEST['action'] == 'deletetemprorylist'){

       $id = $_POST['listID'];
       if(!empty($_POST['productid'])){
        $del = $db->deletedata('product_grouping','id='.$id.'');
       }else{
        $del = $db->deletedata('temrory_add_product', 'id='.$id.'');
       }

       if($del){
        echo 1;
       }else{
           echo 2;
       }
    }

    if ($_REQUEST['action'] == 'getquty'){
        $sql = 'select id,total_quantity,product_name from stock_details where id="'.$_POST['stockid'].'"';
        $qty = $db->selectdata($sql);
        $qtyrow = $qty==FALSE?FALSE:$qty['single_row'];
        echo json_encode($qtyrow);
    }
    else if(isset($_POST['temail']))
    {
		$query =$obj->checkusername($_POST['temail']);
	    if($query!=FALSE)
		{
		    echo 1;
		}
		else
		{
			echo 2;
		}
    }
    else if(isset($_POST['action'])=="add_to_cart" && isset($_POST['product_id']))
    {
        $pro_id=$_POST['product_id'];
        $str=$ecom->add_cart($pro_id,1,1,1);
    }
    else if(isset($_POST['action']) && $_POST['action']=="get_cart_details")
    {

        if(isset($use->user_id) && $use->user_id!="")
        {
            $cartlist=$ecom->getcart_details();
            if($cartlist!=FALSE)
            {
                $sub=0;
                foreach($cartlist['total_row'] as $list)
                {
                    $productnm=$list['product_nm'];
                    $qty=$list['quantity'];
                    $price=$list['price'];
                    $sub=$sub+$price;
                    echo "<div class='entity'>
                      <div class='grid-sm row'>
                          <div class='col-5'>
                              <a class='entity-preview-show-up entity-preview' href='shop-product-sidebar-right.php'>
                                  <span class='embed-responsive embed-responsive-4by3'>
                                  <img class='embed-responsive-item' src='assets/images/content/720x540/sativa-oil.jpg' alt='' /></span>
                                  <span class='with-back entity-preview-content'>
                                      <span class='h3 m-auto text-theme text center'><i class='fas fa-search'></i></span><span class='overflow-back bg-body-back opacity-70'></span>
                                  </span>
                              </a>
                          </div>
                          <div class='col'>
                              <h4 class='h5 mb-1 entity-title'><a class='content-link' href='shop-product-sidebar-right.php'>$productnm</a></h4>
                              <div class='entity-price'><span class='currency'></span><span class='entity-quantity'>&nbsp;x&nbsp;$qty</span></div>
                              <div class='entity-total'>total:&nbsp;&nbsp;&nbsp;$$price</div>
                          </div>
                      </div>
                    </div>";
                }
                 $total=$sub+10;
                echo "<div class='separator-line mt-4 mb-3'></div>
                <ul class='cart-totals list-titled'>
                    <li><span class='list-item-title'>Sub Total</span><span class='list-item-value'>$$sub</span></li>
                    <li><span class='list-item-title'>Shipping</span><span class='list-item-value'>$10.00</span></li>
                    <li class='separator-line'></li>
                    <li class='cart-total'><span class='list-item-title'>Total</span><span class='list-item-value'>$$total</span></li>
                </ul>
                <a class='w-100 mb-2 btn btn-theme-bordered' href='shop-cart.php'>view cart&nbsp;&nbsp;&nbsp;<i class='fas fa-shopping-bag'></i></a>
                <a class='w-100 btn btn-theme' href='shop-checkout.php'>checkout&nbsp;&nbsp;&nbsp;<i class='fas fa-shopping-cart'></i></a>";
            }
        }
        else
        {
            if(isset($_SESSION['cart']))
            {
                $sub=0;
                foreach($_SESSION['cart'] as $list)
                {
                    $productnm=$list['productnm'];
                    $qty=$list['quantity'];
                    $price=$list['price'];
                    $sub=$sub+$price;
                    echo "<div class='entity'>
                      <div class='grid-sm row'>
                          <div class='col-5'>
                              <a class='entity-preview-show-up entity-preview' href='shop-product-sidebar-right.php'>
                                  <span class='embed-responsive embed-responsive-4by3'>
                                  <img class='embed-responsive-item' src='assets/images/content/720x540/sativa-oil.jpg' alt='' /></span>
                                  <span class='with-back entity-preview-content'>
                                      <span class='h3 m-auto text-theme text center'><i class='fas fa-search'></i></span><span class='overflow-back bg-body-back opacity-70'></span>
                                  </span>
                              </a>
                          </div>
                          <div class='col'>
                              <h4 class='h5 mb-1 entity-title'><a class='content-link' href='shop-product-sidebar-right.php'>$productnm</a></h4>
                              <div class='entity-price'><span class='currency'></span><span class='entity-quantity'>&nbsp;x&nbsp;$qty</span></div>
                              <div class='entity-total'>total:&nbsp;&nbsp;&nbsp;$$price</div>
                          </div>
                      </div>
                    </div>";
                }
                $total=$sub+10;
                echo "<div class='separator-line mt-4 mb-3'></div>
                <ul class='cart-totals list-titled'>
                    <li><span class='list-item-title'>Sub Total</span><span class='list-item-value'>$$sub</span></li>
                    <li><span class='list-item-title'>Shipping</span><span class='list-item-value'>$10.00</span></li>
                    <li class='separator-line'></li>
                    <li class='cart-total'><span class='list-item-title'>Total</span><span class='list-item-value'>$$total</span></li>
                </ul>
                <a class='w-100 mb-2 btn btn-theme-bordered' href='shop-cart.php'>view cart&nbsp;&nbsp;&nbsp;<i class='fas fa-shopping-bag'></i></a>
                <a class='w-100 btn btn-theme' href='shop-checkout.php'>checkout&nbsp;&nbsp;&nbsp;<i class='fas fa-shopping-cart'></i></a>";
            }
        }
    }
    else if($_POST['action']=="send_otp")
    {
       $str=$obj->forget_password_mail();
    //  print_r($str);


    return $str;

    }
    else if($_POST['action']=="verify_otp")
    {
       $str=$obj->otp_verification();
    //  print_r($str);


    return $str;

    }

    else if($_POST['action']=="new_password")
    {
       $str=$obj->new_password();

    return $str;

    }
    else if($_POST['action']=="login_email")
    {
       $str=$obj->login_email();
    //  print_r($str);


    return $str;

    }

    if ($_REQUEST['action'] == 'getimage'){
        $sql = 'select * from category where id="'.$_POST['getid'].'" and image="'.$_POST['getImage'].'"';
        $image = $db->selectdata($sql);
        $getimage = $image==FALSE?FALSE:$image['single_row'];
        echo json_encode($getimage);
    }
    if ($_REQUEST['action'] == 'getsubimage'){
        $sql = 'select * from sub_category where id="'.$_POST['getid'].'" and image="'.$_POST['getImage'].'"';
        $image = $db->selectdata($sql);
        $getimage = $image==FALSE?FALSE:$image['single_row'];
        echo json_encode($getimage);
    }
    if ($_REQUEST['action'] == 'paystatus'){
        $data = array(
            "comment" => $_POST['message_text'],
            "status" => $_POST['payment_status']
        );
     $this->updatedata('order_details', $data,"where id='".$_POST['id']."'");
    }





?>
