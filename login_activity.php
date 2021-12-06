<?php
class login_activity extends database
{
    public $us;
    public $com;
    public function __construct()
    {
      $this->us=new user();
      $this->com=new common();
    }
    public function saveCategory()  
    {
     
      $data = array(
        "category" => $_POST['category'],
        "status" => $_POST['status'],
        "cip" => $this->ipAddress(),
        "cby" => $_SESSION['user_id']
      
      );
      
      $ban='';
      //if($this->com->folder_exist('upload/category'))
      //{
        $ban=$this->com->upload_photo('uploaded/category','image');
        if($ban)
          $data['image']=$ban;
      //}
       
      if(!(isset($_POST['tid'])))
      {
         $ins=$this->insertdata('category',$data);
         if($ins)
            $str="Category added successfully";
          else
            $str="Failed";
      }
      else
      {
        $id=$_POST['tid'];
        $ins=$this->updatedata('category',$data,"where id='$id'");
        if($ins)
        {
            $str="Category updated successfully";
        }
        else
          $str="Failed";
      }
      $_SESSION['msg']=$str;
        $this->redirect_back();
    }
    public function getCategoryList()
    {
      $sql="select * from category";
      $categoryList=$this->selectdata($sql);
      if($categoryList!=FALSE)
      {
       return $categoryList['total_row'];
      }
      else
        return FALSE;
    }

  }