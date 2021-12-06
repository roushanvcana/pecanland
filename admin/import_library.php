<?php
    include "config/config.php";
    include "config/database.php";
    include "classfile/common.php";
    include "classfile/user.php";
    include "classfile/ecommerce.php";
    include "classfile/useractivity.php";
    include "classfile/admin_activity.php";
    if(in_array($use->page, $con->restricted_page))
    {
        $profile=$use->getprofile();
    }
    $msg='';
    if(isset($_SESSION['msg']))
    {
        $msg=$_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    /*$menulist=$use->getpermission_check();
    if($profile!=FALSE)
        $profile=$profile['single_row'];
    
    if($menulist!=FALSE)
        $menulist=$menulist['total_row'];
    else
    {
        echo "you don't have permission";
        exit();
    }*/
    
?>