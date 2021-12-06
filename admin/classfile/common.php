<?php
class common
{
     public function folder_exist($folder)
     {
        $user=$_SESSION['loginid'];
        if(!(is_dir("admin/classfile/uploaded/".$user)))
        {
            mkdir("admin/classfile/uploaded/".$user, 0777, true);
        }
        if(!(is_dir("admin/classfile/uploaded/".$user."/".$folder)))
        {
            mkdir("admin/classfile/uploaded/".$user."/".$folder, 0777, true);
            //return $path;
        }
        return TRUE;
     }
     public function upload_photo($directory,$file)
     {
        $filename = $_FILES[$file]["name"];   
        $allowed = array('php', 'js', 'css','html','htm','c','cpp','py'); 
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext, $allowed)) {
            $target_dir = "admin/classfile/uploaded/".$directory."/";
            $target_file = $target_dir . basename($_FILES[$file]["name"]);
            move_uploaded_file($_FILES[$file]["tmp_name"], $target_file); 
            return $filename;
        }
        else
        return FALSE;
     }
     public function getStatus()
     {
        return array(
            "Active" => "Active",
            "Deactive" => "Deactive"
        );
     }

     public function getArrayVal($func, $value)
     {
        $getfunc = $func;
        return $getfunc[$value];       
     }

     public function productType()
     {
        return array(
            "1" => "Single",
            "2" => "Varient",
            "3" => "Group"
        );
     }

     public function unit()
     {
         return array(
            "1" => 'Nos',
            "2" => 'Gram',
            "3" => 'Litre',
            "4" => 'Mili Litre',
            "5" => 'Piece',
            "6" => 'Kg'
         );
     }

    public function upload_image($folder_path,$file_name, $file_tempname,$image_id){
	    $extension=end(explode(".", $file_name));
	    $file_name=$image_id.".".$extension;
	    $path=$folder_path.'/'.$file_name;

        if(file_exists($path))
        {
            unlink($path);		
        }

	    $moved=move_uploaded_file($file_tempname,$path);

        if($moved)
        {
            return $file_name;	
        }

    }

    public function payment_status()
    {
        return array(
           "Pending" => 'Pending',
           "Accepted" => 'Accepted',
           "Ready to shiped" => 'Ready to shiped',
           "Shipped" => 'Shipped',
           "Delivered" => 'Delivered',
           "Cancel" => 'Cancel',
           "Reject" => 'Reject',
        );
    }


}
?>