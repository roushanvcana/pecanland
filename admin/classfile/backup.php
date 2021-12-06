<?php
@session_start();
class user extends database
{
    public $user_id="";
    public $user_type="";
    private $com;
    public function __construct()
    {
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $page = end($link_array);
        if ($_SESSION['user_id']!=true && $page=="admin") 
        {
            echo "<script>location.href='index.php';</script>";
        }
        else
        if ($_SESSION['user_id']!=true) 
        {
            if(file_exists("login.php"))
                 echo "<script>location.href='login.php';</script>";
            else
            echo "<script>location.href='index.php';</script>";
        }
       $this->user_id=$_SESSION['loginid'];
       $this->user_type=$_SESSION['type'];
       $this->com=new common();
    }
    public function getprofile()
    {
         //$user_id=$_SESSION['loginid'];
         $sql="select * from user_details where id='$this->user_id'";
         $profile=$this->selectdata($sql);
         $profile=$profile['single_row'];
         return $profile;
    }
    public function logout()
    {
        session_destroy();
    }
   

}
$use=new user();
?>