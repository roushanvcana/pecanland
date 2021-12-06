<?php
class config
{
	public $link;
	protected $sql;
	public $ctr=1;
    public $base_url='http://localhost/pecanland.com/';
    public $restricted_page=array('shop-checkout.php','profile.php','order-details.php');
	public function __construct()
	{
		$this->link = mysqli_connect("localhost","root","", "pecanland");
     
		// Check connection
		if($this->link === false)
		{
   		 	die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	}
	public function ipAddress()
	{
        $ipaddress = '';
        if ($_SERVER['HTTP_CLIENT_IP']){
    
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];}
    
        else if($_SERVER['HTTP_X_FORWARDED_FOR']){
    
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];}
    
        else if($_SERVER['HTTP_X_FORWARDED']){
    
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];}
    
        else if($_SERVER['HTTP_FORWARDED_FOR']){
    
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];}
    
        else if($_SERVER['HTTP_FORWARDED']){
    
            $ipaddress = $_SERVER['HTTP_FORWARDED'];}
    
        else if($_SERVER['REMOTE_ADDR']){
    
            $ipaddress = $_SERVER['REMOTE_ADDR'];}
    
        else{
    
            $ipaddress = 'UNKNOWN';
    
    	}
        return $ipaddress;
    }
    public function redirect_back()
    {
        if(isset($_SERVER['HTTP_REFERER']))
        {
            if (headers_sent()) {
                echo "<script>location.href='".$_SERVER['HTTP_REFERER']."'</script>";
            }
            else{
                 header('Location: '.$_SERVER['HTTP_REFERER']);
            }
           
        }
        else
        {
            header('Location: http://'.$_SERVER['SERVER_NAME']);
        }
        exit;
    }
}
$con=new config();
?>