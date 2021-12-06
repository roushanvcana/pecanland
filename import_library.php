<?php
    include "admin/config/config.php";
    include "admin/config/database.php";
    include "admin/classfile/common.php";
 
    include "admin/classfile/useractivity.php";
    include "admin/classfile/admin_activity.php";
    
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