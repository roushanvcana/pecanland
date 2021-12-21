<?php
class admin_activity extends database
{
  public $us;
  public $com;
  public function __construct()
  {
    $this->us = new user();
    $this->com = new common();
  }
  public function saveCategory()
  {

    $data = array(
      "category" => $_POST['category'],
      "status" => $_POST['status'],
      "cip" => $this->ipAddress(),
      "cby" => $_SESSION['user_id']
    );

    $file_name = $_FILES['image']['name'];
    $file_tempname = $_FILES['image']['tmp_name'];
    $folder = "upload/category/";
    $image_id = rand(1000, 100000) . "-";

    $result = $this->com->upload_image($folder, $file_name, $file_tempname, $image_id);

    $data['image'] = $result;


    if (!(isset($_POST['tid']))) {
      $ins = $this->insertdata('category', $data);
      if ($ins)
        $str = "Category added successfully";
      else
        $str = "Failed";
    } else {
      $id = $_POST['tid'];
      $ins = $this->updatedata('category', $data, "where id='$id'");
      if ($ins) {
        $str = "Category updated successfully";
      } else
        $str = "Failed";
    }
    $_SESSION['msg'] = $str;
    $this->redirect_back();
  }

  public function savesubCategory()
  {

    $data = array(
      "category_id" => $_POST['category_id'],
      "name" => $_POST['name'],
      "cstatus" => $_POST['status'],
      "cip" => $this->ipAddress(),
      "cby" => $_SESSION['user_id']

    );

    $file_name = $_FILES['image']['name'];
    $file_tempname = $_FILES['image']['tmp_name'];
    $folder = "upload/sub_category/";
    $image_id = rand(1000, 100000) . "-";

    $result = $this->com->upload_image($folder, $file_name, $file_tempname, $image_id);

    $data['image'] = $result;


    if (!(isset($_POST['tid']))) {
      $ins = $this->insertdata('sub_category', $data);
      if ($ins)
        $str = "Sub Category added successfully";
      else
        $str = "Failed";
    } else {
      $id = $_POST['tid'];
      $ins = $this->updatedata('sub_category', $data, "where id='$id'");
      if ($ins) {
        $str = "Sub Category updated successfully";
      } else
        $str = "Failed";
    }
    $_SESSION['msg'] = $str;
    $this->redirect_back();
  }

  public function saveProduct()
  {

    $data = array(
      "category_id" => $_POST['category_id'],
      "subcategory_id" => $_POST['subcategory_id'],
      "product_type" => $_POST['product_type'],
      "product_name" => $_POST['product_name'],
      "short_description" => $_POST['short_description'],
      "long_description" => $_POST['long_description'],
      "features" => $_POST['features'],
      "mrp" => $_POST['mrp'],
      "sell_price" => $_POST['sell_price'],
      "total_quantity" => $_POST['total_quantity'],
      "unit" => $_POST['unit'],
      "color" => $_POST['color'],
      "status" => $_POST['status'],
      //"cip" => $this->ipAddress(),
      "cby" => $_SESSION['user_id']

    );

    $file_name = $_FILES['image']['name'];
    $file_tempname = $_FILES['image']['tmp_name'];
    $folder = "upload/product/";
    $image_id = rand(1000, 100000) . "-";
    $result = $this->com->upload_image($folder, $file_name, $file_tempname, $image_id);

    $data['image'] = $result;


    if (!(isset($_POST['tid']))) {
      // for check stock item exists or not
      $stock_query = "select * from stock_details where product_name='" . $_POST['product_name'] . "' and product_type='" . $_POST['product_type'] . "'";


      $getStocklist = $this->selectdata($stock_query);

      $getproductQuantity = $getStocklist == FALSE ? FALSE : $getStocklist['single_row'];
      $totalQuantity = $getproductQuantity['total_quantity'] + $_POST['total_quantity'];

      if ($getStocklist!=FALSE) {

        $data['total_quantity'] = $totalQuantity;

        $ins = $this->updatedata('stock_details', $data, "where product_name='" . $_POST['product_name'] . "' and product_type='" . $_POST['product_type'] . "'");
        // echo $ins; die;
        $data['stock_id'] = $ins;
        $data['total_quantity'] = $_POST['total_quantity'];
         $this->insertdata('product_details', $data);
      } else {
        $ins = $this->insertdata('stock_details', $data);
         $str = "Product added successfully";
       // $data['stock_id'] = $ins;
        $ins=$this->insertdata('product_details', $data);
          $str = "Product added successfully";
      }

      if ($ins) {

        if ($_POST['product_type'] == 2 || $_POST['product_type'] == 3) {
          $tmpproductGroup = $this->gettableList('temrory_add_product');
          $tmpproductGroup = $tmpproductGroup == FALSE ? FALSE : $tmpproductGroup['total_row'];
          $_SESSION['last_insert_id'] = $ins;

          foreach ($tmpproductGroup as $value) {
            $progrouping = array(
              "parent_id" => $_SESSION['last_insert_id'],
              "product_id" => $value['product_id'],
              "product_quantity" => $value['product_quantity'],
              "product_unit" => $value['product_unit'],
              "product_type" => $_POST['product_type'],
              // "cip" => $this->ipAddress(),
              "cby" => $_SESSION['user_id'],
              "status" => 1,
            );
            $productGrouping = $this->insertdata('product_grouping', $progrouping);
            if ($productGrouping) {
              $this->deletedata('temrory_add_product', 'product_id=' . $value['product_id'] . '');
            }
          }
        }
      } else {
        $str = "Failed";
      }
    } else {
      $id = $_POST['tid'];
      $update = $this->updatedata('product_details', $data, "where id='$id'");
      if ($update) {
        $str = "Product updated successfully";
        $_SESSION['last_update_id'] = $update;

        if ($_POST['product_type'] == 2 || $_POST['product_type'] == 3) {

          $tmpproductGroup = $this->gettableList('temrory_add_product');
          $tmpproductGroup = $tmpproductGroup == FALSE ? FALSE : $tmpproductGroup['total_row'];



          foreach ($tmpproductGroup as $value) {
            $progrouping = array(
              "parent_id" => $_POST['tid'],
              "product_id" => $value['product_id'],
              "product_quantity" => $value['product_quantity'],
              "product_unit" => $value['product_unit'],
              "product_type" => $_POST['product_type'],
              // "cip" => $this->ipAddress(),
              "cby" => $_SESSION['user_id'],
              "status" => 1,
            );

            $query = "select * from product_grouping where parent_id='" . $id . "' and product_id='" . $value['product_id'] . "'";
            $grouplist = $this->selectdata($query);
            $rowCount = $grouplist == FALSE ? FALSE : $grouplist['count'];
            if ($rowCount > 0) {
              $update = $this->updatedata('product_grouping', $data, "where parent_id='" . $_POST['tid'] . "' and product_id='" . $value['product_id'] . "'");
              $this->deletedata('temrory_add_product', 'product_id=' . $value['product_id'] . '');
            } else {
              $productGrouping = $this->insertdata('product_grouping', $progrouping);
              $this->deletedata('temrory_add_product', 'product_id=' . $value['product_id'] . '');
            }
          }
        }
      } else
        $str = "Failed";
    }
    $_SESSION['msg'] = $str;
    $this->redirect_back();
  }


  public function gettableList($tbl, $columnName = null, $id = null)
  {

    if ($id == null && $columnName == null) {
      $sql = "select * from " . $tbl . "";
    } else {
      $sql = "select * from " . $tbl . " where " . $columnName . " = '$id'";
    }

    $categoryList = $this->selectdata($sql);
    if ($categoryList != FALSE) {
      return $categoryList;
    } else
      return FALSE;
  }

  public function product_quantity_update()
  {
    $stockID = $_POST['stock_id'];
    $pqty =  $_POST['pqty'];

    $data = array(
      "total_quantity" => $pqty
    );

    $update = $this->updatedata('stock_details', $data, "where id='" . $stockID . "'");

    $this->redirect_back();
  }

  public function updateUser()
  {
    $data = array(
      "fname" => $_POST['fname'],
      "lname" => $_POST['lname'],
      "email" => $_POST['email'],
      "phone" => $_POST['phone']
    );

    if (!empty($_POST['password'])) {
      $data['password'] = $_POST['password'];
    }

    $update = $this->updatedata('user_details', $data, "where id='" . $_POST['tid'] . "'");
  }

  public function order_message()
  {

    $data = array(
      "message" => $_POST['message'],
      "status" => $_POST['payment_status']
    );
    $id = $_POST['id'];

    $ins = $this->updatedata('order_details', $data, "where id='$id'");
    if ($ins) {
      $str = "Message sent successfully";
    } else
      $str = "Failed";
    $_SESSION['msg'] = $str;
    $this->redirect_back();
  }

}
$adm = new admin_activity();
