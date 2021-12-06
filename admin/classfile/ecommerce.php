<?php
class ecommerce extends database
{
	private $com;
    private $use;
    public function __construct()
    {
        $this->com=new common();
        $this->us=new user();
        
    }
    //add cart session
  	public function add_cart($proid,$pr=1,$qty,$chk)
  	{
    	$cartid=rand(10,1000);
    	if(isset($_SESSION['cart']))
      		$s=sizeof($_SESSION['cart']);
    	else
     		$s=0;
      	$sql="select * from stock_details where id='$proid'";
      	$productinfo=$this->selectdata($sql);
      	if($productinfo!=FALSE)
      	{
      		$productinfo=$productinfo['single_row'];
	        $pronm=$productinfo['product_name'];
	        $pr=$price=$productinfo['sell_price'];
	        $cat=$productinfo['category_id'];
	        $scat=$productinfo['subcategory_id'];
	        $img=$productinfo['image'];
	    }
	    if(isset($_POST['qty']))
	    {
	       	$qty=$_POST['qty'];
	        $price=$price*$qty;
	    }
	    else
      		$price=$pr*$qty;
      	//$img = explode(',', $img);
      	$cart=array("cartid"=>$cartid,"productid" =>$proid,"productnm"=>$pronm,"price"=>$price,"quantity"=>$qty,"img"=>$img);
      	if(isset($this->us->user_id) && $this->us->user_id!="")
      	{
        	$res=$this->add_cart_db($cart);
        	if($res==TRUE)
         	{
	             $cart=$this->getcart_details();
	             $k=$count=$cart['count'];
	             echo $count;
         	}
      	}
      	else
      	{
          $_SESSION['cart'][$cartid]=$cart;
          echo sizeof($_SESSION['cart']);
       	}
    }
    //add cart into database
    public function add_cart_db($data)
    {
	    $proid=$data['productid'];
	    $productnm=$data['productnm'];
	    $totalprice=$data['price'];
	    $quantity=$data['quantity'];
	    $price=$totalprice/$quantity;
	    $userid=$this->us->user_id;
	    $cart_data=array(
	    	"product_id"=>$proid,
	    	"product_nm"=>$productnm,
	    	"price"=>$price,
	    	"add_dt"=>date('Y-m-d'),
	    	"user"=>$userid,
	    	"quantity"=>$quantity,
	    	"totalprice"=>$totalprice
	    );
	    if($productnm!="")
	    {
		    $ins=$this->insertdata('cart_details',$cart_data);
		    if($ins)
		    {
		       $str=true;
		    }
		    else
		    {
		       $str="Somenthing went wrong";
		    }
		}
		unset($_SESSION['cart']);
	    return $str;
    }
  	//delete cart
	public function delete_cart($cartid)
	{
	    if(isset($_SESSION['cart']))
	    {
	        unset($_SESSION['cart'][$cartid]);
	       
	    }
	    else if(isset($this->us->user_id) && $this->us->user_id!="")
	    {
	      $sql="delete from cart_details where id='$cartid'";
	      $del=$this->deletedata('cart_details', 'id='.$cartid.'');
	      if($del)
	      {
	      }
	      else
	      {
	          //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
	      }
	    }
	    echo "<script>location.href='shop-cart.php';</script>";
	}
    //update cart
    public function update_cart()
    {
	    $k=0;
	    $sub=0;
	    if(isset($this->us->user_id) && $this->us->user_id!="")
	    {
	      $cartlist=$this->getcart_details();
	      if($cartlist!=FALSE)
	      {
	        $k=0;
	        foreach($cartlist['total_row'] as $list)
            {
	            $pr=$list['totalprice']/$list['quantity'];
	            $t1="text".$list['id'];
	            $t2="per".$list['id'];
	            $cartid=$list['id'];
	            if(isset($_POST[$t1]))
	            {
	              $qty=$_POST[$t1];
	              $tp=$_POST[$t2];

	              $ins=$this->updatedata('cart_details',array("quantity"=>$qty,"totalprice"=>$tp),"where id='$cartid'");
	                if($ins)
	                {
	                    $f=1;  
	                }
	                else
	                {
	                    
	                }
	            }
	            $k++;
	        }
	      }
	      else
	          echo "<script>alert('Oops cart is not available');</script>";
	    }
	    else if(isset($_SESSION['cart']))
	    {
	      foreach($_SESSION['cart'] as $list) 
	      { 
	        $t1="text".$k;
	        $t2="per".$k;
	        $cartid=$list['cartid'];
	        $cart['cartid']=$cartid;
	        $cart['productid']=$list['productid'];
	        $cart['productnm']=$list['productnm'];
	        $cart['img']=$list['img'];
	        $cart['quantity']=$_POST[$t1];
	        $cart['price']=$_POST[$t2];
	        $_SESSION['cart'][$cartid]=$cart;
	        
	        $k++;
	      }
	    }
	    //echo "<script>location.href='cart.php';</script>";
    }
	public function getcart_details()
  	{
    	if(isset($this->us->user_id) && $this->us->user_id!="")
    	{
      		$user=$this->us->user_id;
      		$sql="select * from cart_details where user='$user' and status!='Booked'";
      		$result=$this->selectdata($sql);

    	}
    	if($result!=FALSE)
    		return $result;
    	else
    		return FALSE;
  	}
  	//place order
  	public function place_order()
  	{
	    date_default_timezone_set('Asia/Kolkata');
	    $dt=date('d-m-Y H:i');
	    $userid=$this->us->user_id;
	    $data_add['first_nm']=$ship_first_name=addslashes($_POST['ship_first_name']);
	    $data_add['last_nm']=$ship_last_name=addslashes($_POST['ship_last_name']);
	    $data_add['address']=$ship_address=addslashes($_POST['ship_address']);
	    $data_add['city']=$ship_city=addslashes($_POST['ship_city']);
	    $data_add['state']=$ship_state=addslashes($_POST['ship_state']);
	    $data_add['country']=$ship_country=addslashes($_POST['ship_country']);
	    $data_add['pincode']=$ship_zip_code=addslashes($_POST['ship_zip_code']);
	    $data_add['phone']=$ship_phone_number=addslashes($_POST['ship_phone_number']);
	    $data_add['email']=$ship_email_address=addslashes($_POST['ship_email_address']);
	   
	    $shp=0;
	    $order="ord".$userid.date('d').date('m').rand(10,1000);
	     
	      if($this->checkaddreessexit($userid,'Shipping')==FALSE)
	      {
	      	$data_add['status']='Shipping';
	    	$data_add['type']='Active';
	    	$data_add['userid']=$this->us->user_id;
	    	$data_add['insert_dt']=$dt;
	    	$ins=$this->insertdata('address_details',$data_add);
	      }
	      else
	      {
	      	$ins=$this->updatedata('address_details',$data_add,"where userid='$userid' and and type='Shipping'");
	      }
	      if($ins)
	      {
	          $shp=1;
	          $str=$this->save_order_details($userid,$order);
	          if($str=="your order placed successfully")
	          {
	              /*$msg="Thank you, your Order has been Placed Successfully. Your Order No. is $order";
	              $encoded_message = urlencode($msg);
	              $url="http://jskbulksms.in/app/smsapi/index.php?key=4607EBF4F5B8BE&campaign=1&routeid=46&type=text&contacts=$ship_phone_number&senderid=DIVEDA&msg=$encoded_message&template_id=1207161856081737005";*/
	             // $url="http://jskbulkmarketing.in/app/smsapi/index.php?key=25F9E484EA2773&routeid=569&type=text&contacts=$ship_phone_number&senderid=DIVEDA&msg=$encoded_message";
	              //$id = file_get_contents($url);
	          }
	      }
	      else
	      {
	          //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
	      }
	      //return $str;
	      echo "<script>location.href='thank-you.php?orderno=".$order."'</script>";
	  }
  //public function check addrees
  public function checkaddreessexit($userid,$type)
  {
     $sql="select * from address_details where userid='$userid' and type='$type'";
     $result=$this->selectdata($sql); 
     if($result!=FALSE)
       return true;
     else
      return false;
  }
  //place order
  public function save_order_details($userid,$order)
  {
    $ord=0;
    $cartdetails=$this->getcart_details();
    $payid=isset($_POST['payid'])?$_POST['payid']:'';
    $pmode=$_POST['pmode'];
    if(isset($_POST['payid']) && $_POST['payid']!="")
        $pstatus="Paid";
    else
        $pstatus="Not Paid";
    $data_order=array(
    	"orderno"=>$order,
    	"userid"=>$userid,
    	"order_dt"=>date('Y-m-d'),
    	"status"=>'Accepted',
    	"payid"=>$payid,
    	"pay_status"=>$pstatus,
    	"pmode"=>$pmode
    );
    $ins=$this->insertdata('order_details',$data_order);
    if($ins)
    {
        $ord=1; 
    }
    else
    {
    	$ord=0;
        //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
    }
    if($ord==1)
    {
    	if($cartdetails!=FALSE)
    	{
    		foreach ($cartdetails['total_row'] as $row) {
    		  if($row['product_id']==0)
    		  	continue;
    		  $data_pro['orderid']=$order;
    		  $cartid=$row['id'];
              $data_pro['productid']=$proid=$row['product_id'];
              $data_pro['product_nm']=$pronm=$row['product_nm'];
              $data_pro['quantity']=$qty=$row['quantity'];
              $data_pro['totalprice']=$totalpr=$row['totalprice'];
              $data_pro['price']=$pr=$totalpr/$qty;
              $data_pro['price']='Accepted';
              $ord_ins=$this->insertdata('product_order',$data_pro);
                
                if($ord_ins)
                {
                    $ord=2;
                }
                else
                {
                	$ord=0;
                    //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
                }
                if($ord==2)
                {
                	$upd=$this->updatedata('cart_details',array('status'=>'Booked'),"where id='$cartid'");
                    if($upd)
                    {
                        $ord=2;
                    }
                    else
                    {
                    	$ord=0;
                        //echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
                    }
                }
    		}
    	}
    }
    if($ord==2)
        $str="your order placed successfully";
    else
       $str="sorry somenthing wen't wrong";
    return $str;
  }

  //cancel product order
  public function cancel_order($pid)
  {
      $sql="delete from product_order where p_o_id='$pid'";
      if(mysqli_query($this->link, $sql))
        {
            $f=1;
            echo '<script>alert("Your product canel successfully")</script>';
            echo "<script>location.href='my-order.php'</script>";
        }
        else
        {
            echo "ERROR: Could not able to execute $this->sql. " . mysqli_error($this->link);
        }
  }
    //customer details
  public function getsingleorder_details($ord)
  {
    $sql="select * from order_details INNER JOIN address_details ON order_details.userid=address_details.userid where order_details.orderno='$ord' order by order_details.id desc";
    $result=$this->selectdata($sql); 
    if($result!=FALSE)
      return $result['single_row'];
    else
      return false;
  }

}
$ecom=new ecommerce();

?>