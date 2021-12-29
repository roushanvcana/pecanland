 <?php
    @session_start();
    class user extends database
    {
        public $user_id = "";
        public $user_type = "";
        private $com;
        public $page = '';
        public function __construct()
        {
            $link = $_SERVER['PHP_SELF'];
            $link_array = explode('/', $link);
            $this->page = $page = end($link_array);
            if (in_array("admin", $link_array))
            {
                if ($_SESSION['user_id'] != true && $page == "admin")
                {
                    echo "<script>location.href='index.php';</script>";
                }
                else
                if ($_SESSION['user_id'] != true)
                {
                        if (file_exists("login.php"))
                            echo "<script>location.href='login.php';</script>";
                        else
                            echo "<script>location.href='index.php';</script>";
                }
            }
            else if(in_array($this->page, $this->restricted_page))
            {
                if ($_SESSION['user_id'] != true)
                {
                        if (file_exists("sign-in.php"))
                            echo "<script>location.href='sign-in.php';</script>";
                        else
                            echo "<script>location.href='index.php';</script>";
                }
            }
            $this->user_id = isset($_SESSION['loginid']) ? $_SESSION['loginid'] : '';
            $this->user_type = isset($_SESSION['type']) ? $_SESSION['type'] : '';
            $this->com = new common();
        }

        public function getprofile()
        {
            $sql = "select * from user_details where id='$this->user_id'";
            $profile = $this->selectdata($sql);
            $profile = $profile['single_row'];
            return $profile;
        }
        public function getShippingAddress()
        {
            $sql = "select * from address_details where userid='$this->user_id'";
            $address = $this->selectdata($sql);
            $address = $address!=FALSE?$address['single_row']:FALSE;
            return $address;
        }
        public function update_profile()
        {
            // $adhar_front="";
            // if(isset($_FILES['adhar_front']) && $_FILES['adhar_front']['name']!="")
            // {
            //     if($this->com->folder_exist('documents'))
            //     {
            //         $adhar_front=$this->com->upload_photo('documents',"adhar_front");
            //         $data['adhar_front']=$adhar_front;
            //     }
            // }

            $data = array(
                "fname" => $_POST['firstName'],
                "lname" => $_POST['lastName'],
                "email" => $_POST['temail'],
                "address" => $_POST['address'],
                "password" => md5($_POST['tpass']),
                "city" => $_POST['city'],
                "zipcode" => $_POST['zipcode'],
                "country" => $_POST['country'],
                "state" => $_POST['state']
                // "gender" => $_POST['gender']

            );
            $userId = $this->user_id;
            $ins = $this->updatedata('user_details', $data, "where id='$userId'");
            if ($ins) {
                $str = "Profile updated successfully";
            } else {
                $str = "Faild";
            }
            $_SESSION['msg'] = $str;
            //$this->redirect_back();
        }

        public function update_password()
        {
            $profile = $this->getprofile();
            $pass = $_POST['password'];
            $cpass = $_POST['cpassword'];
            if ($_POST['oldpassword'] == $profile['password']) {
                if ($pass == $cpass) {
                    $up_data = array(
                        "password" => $_POST['password'],
                    );
                    $ins = $this->updatedata('user_details', $up_data, "where id='$this->user_id'");
                    if ($ins) {
                        $str = "password updated successfully.";
                    } else {
                        $str = "Faild.";
                    }
                } else
                    $str = "password and confirm password not matched.";
            } else
                $str = "Invalid old password.";
            $_SESSION['msg'] = $str;
            $this->redirect_back();
        }
        public function getuserprofile($id)
        {
            $sql = "select * from user_details where id='$id'";
            $profile = $this->selectdata($sql);
            if ($profile != FALSE)
                return $profile['single_row'];
            else
                return FALSE;
        }
        public function getrefereduserlist($ref = null)
        {
            $profile = $this->getprofile();
            if ($ref == null)
                $ref = $profile['sponcer_id'];
            $sql = "select * from user_details where refer_by='$ref'";
            $profile = $this->selectdata($sql);
            if ($profile != FALSE)
                return $profile['total_row'];
            else
                return FALSE;
        }
        public function getalluser()
        {
            $sql = "select * from user_details where type='user'";
            $profile = $this->selectdata($sql);
            if ($profile != FALSE)
                return $profile['total_row'];
            else
                return FALSE;
        }

        public function getalluserflow()
        {
            $sql = "select * from user_details where type='user' order by postion asc";
            $profile = $this->selectdata($sql);
            if ($profile != FALSE)
                return $profile['total_row'];
            else
                return FALSE;
        }
        public function epin_request_details()
        {
            $profile = $this->getprofile();
            if ($profile['type'] == "user")
                $sql = "select * from epin_request_details where requested_by='$this->user_id'";
            else
                $sql = "select * from epin_request_details";
            $epinlist = $this->selectdata($sql);
            if ($epinlist != FALSE) {
                return $epinlist['total_row'];
            } else
                return FALSE;
        }
        public function request_details()
        {
            $profile = $this->getprofile();
            if ($profile['type'] == "user")
                $sql = "select * from request_details where user='$this->user_id'";
            else
                $sql = "select * from request_details";
            $epinlist = $this->selectdata($sql);
            if ($epinlist != FALSE) {
                return $epinlist['total_row'];
            } else
                return FALSE;
        }


        public function logout()
        {
            session_destroy();
        }
        public function random_number()
        {
            $ran_num = rand(9999, 99999);
            return $ran_num;
        }
      
        public function getorder()
  {
      $userid=$this->user_id;
      $sql = "select * from order_details where userid='$userid'";


      $orderList = $this->selectdata($sql);

      $orderList = $orderList==FALSE?FALSE:$orderList['total_row'];
      return $orderList;
  }
  public function getorder_details()
  {
      $userid=$this->user_id;
      $sql = "select order_details.*,user_details.id as userId,user_details.fname,user_details.lname,user_details.email,user_details.phone,user_details.gender,user_details.address ,stock_details.product_name,stock_details.mrp,stock_details.sell_price,stock_details.unit,stock_details.color,product_order.totalprice,stock_details.image,stock_details.total_quantity from order_details join product_order on product_order.orderid = order_details.orderno join user_details on user_details.id=order_details.userid join stock_details on stock_details.id =product_order.productid where order_details.userid='$userid'";


      $order = $this->selectdata($sql);

      return $order;
  }
   public function getLastorder()
  {
      $userid=$this->user_id;
      $id=$_POST['order_no'];
      if(isset($_POST['order_no']))
      {
        $sql = "select order_details.*,user_details.id as userId,user_details.fname,user_details.lname,user_details.email,user_details.phone,user_details.gender,user_details.address ,stock_details.product_name,stock_details.mrp,stock_details.sell_price,stock_details.unit,stock_details.color,product_order.totalprice,stock_details.image,stock_details.total_quantity from order_details join product_order on product_order.orderid = order_details.orderno join user_details on user_details.id=order_details.userid join stock_details on stock_details.id =product_order.productid where order_details.userid='$userid' and order_details.orderno = '$id' ORDER BY order_details.id limit 1;";
      }
      else
      {
      $sql = "select order_details.*,user_details.id as userId,user_details.fname,user_details.lname,user_details.email,user_details.phone,user_details.gender,user_details.address ,stock_details.product_name,stock_details.mrp,stock_details.sell_price,stock_details.unit,stock_details.color,product_order.totalprice,stock_details.image,stock_details.total_quantity from order_details join product_order on product_order.orderid = order_details.orderno join user_details on user_details.id=order_details.userid join stock_details on stock_details.id =product_order.productid where order_details.userid='$userid' ORDER BY order_details.id limit 1;";
    }

      $orderlist = $this->selectdata($sql);

      $orderlist = $orderlist['total_row'];
      return $orderlist;
  }



      //$this->redirect_back();



   }
    $use = new user();
    ?>
