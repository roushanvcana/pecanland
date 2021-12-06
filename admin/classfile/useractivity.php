 <?php
@session_start();
class useractivity extends database
{
    private $com;
    private $use;
    public function __construct()
    {
        $this->com=new common();
        $this->us=new user();
        
    }
    public function getallproduct()
    {
         $sql="select * from stock_details";
         $productlist=$this->selectdata($sql);
         if($productlist!=FALSE)
            return $productlist['total_row'];
         else
            return FALSE;
    }
    public function getallcategory()
    {
         $sql="select * from category";
         $categorylist=$this->selectdata($sql);
         if($categorylist!=FALSE)
            return $categorylist['total_row'];
         else
            return FALSE;
    }
    public function getcategorycount()
    {
         $sql="select category.category as cat,count(product.id) as pro from stock_details as product inner join category on category.id=product.category_id group by category.category";
         $categorycount=$this->selectdata($sql);
         if($categorycount!=FALSE)
            return $categorycount['total_row'];
         else
            return FALSE;
    }

    public function getrelatedproduct($id)
    {
         $sql=" SELECT stock_details.*,category.id from stock_details JOIN category on category.id =stock_details.category_id where stock_details.category_id='$id'";
         
         $relatedproduct=$this->selectdata($sql);
         if($relatedproduct!=FALSE)
            return $relatedproduct['total_row'];
         else
            return FALSE;
    }
   
    public function getproduct($id)
    {
         $sql="SELECT stock_details.* ,category.id,category from stock_details join category on category.id = stock_details.category_id where stock_details.id='$id'";
         $product=$this->selectdata($sql);
         if($product!=FALSE)
            return $product['single_row'];
         else
            return FALSE;
    }


    public function profile()  
    {
     
      $data = array(
        "name" => $_POST['name'],
        "email" => $_POST['temail'],
        "address" => $_POST['address'],
        "city" => $_POST['city'],
        "zipcode" => $_POST['zipcode'],
        "country" => $_POST['country'],
        "state" => $_POST['state'],
        "gender" => $_POST['gender'],
        "cip" => $this->ipAddress(),
        "cby" => $_SESSION['user_id']
      
      );
      
      // $ban='';
      //if($this->com->folder_exist('upload/category'))
      // //{
      //   $ban=$this->com->upload_photo('uploaded/category','image');
      //   if($ban)
      //     $data['image']=$ban;
      // //}
       
  
        $id=$_POST['tid'];
        $ins=$this->updatedata('user_details',$data,"where id='$id'");
        if($ins)
        {
            $str="Profile updated successfully";
        }
        else
          $str="Failed";
    //  }
      $_SESSION['msg']=$str;
        $this->redirect_back();
    }
}
$use_act=new useractivity();


?>