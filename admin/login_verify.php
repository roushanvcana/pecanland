<?php
@session_start();
class login extends database
{
	public function signin()
	{
		$ctr=1;
		$id="";
		$loginuser="";
		$user="$_POST[temail]";
		$pass= md5($_POST['tpass']);
		$sql="select * from user_details where email='$user' and password='$pass' and type='admin' and status='Active'";

		$res=$this->selectdata($sql);
		if($res!=FALSE)
		{
		    $_SESSION['user_id']=TRUE;
		    $res=$res['single_row'];
		    $_SESSION['loginid']=$res['id'];
		    $_SESSION['type']=$res['type'];
		    echo "<script> location.href='index.php'; </script>";
		}
	    else
	        $str="Invalid login details";
    	return $str;
	}
	public function usersignin()
	{
		$ctr=1;
		$id="";
		$loginuser="";
		$user="$_POST[temail]";
		$pass= md5($_POST['tpass']);
		// if(!empty($_POST["remember"])) {
		// 	setcookie ("temail",$_POST["temail"],time()+ 3600);
		// 	setcookie ("tpass",$_POST["tpass"],time()+ 3600);
		// 	echo "Cookies Set Successfuly";
		// } else {
		// 	setcookie("temail","");
		// 	setcookie("tpass","");
		// 	echo "Cookies Not Set";
		// }
		$sql="select * from user_details where email='$user' and password='$pass' and type='user' and status='Active'";
		$res=$this->selectdata($sql);
		if($res!=FALSE)
		{
		    $_SESSION['user_id']=TRUE;
		    $res=$res['single_row'];
		    $_SESSION['loginid']=$res['id'];
		    $_SESSION['type']=$res['type'];
					// $res=$this->add_cart_db($_SESSION['cart']);
		    echo "<script> location.href='my-account.php'; </script>";

		}
	    else
	    {
	        $str="Invalid login details";
			 echo "<script> location.href='login.php'; </script>";
			// echo "<script>  </script>";
			return $str;
	    }
	}
	public function userregister()
	{
	        if($this->checkusername($_POST['email'])==FALSE)
	        {
        		$ins_data=array(
        		    "fname"=>$_POST['fname'],
				      	"lname"=>$_POST['lname'],
        		     "phone"=>$_POST['phone'],
        		    "email"=>$_POST['email'],
				      	"password"=>md5($_POST['password']),
				      	"type"=>'user',
				       	"status"=>'Active'
        		    //"ip_add"=>$this->ipAddress()
        		);
        		$ins=$this->insertdata('user_details',$ins_data);
        		if($ins)

                {
                   //$upd=$this->updatedata("epin_details",array("status"=>"used","used_by"=>$ins,"used_dt"=>date('Y-m-d'))," epin='$epin'");
                    $str="Thank you for register with us";

                   /*$payid=$this->nextpayment($pos,$ins);
                   if($payid!=FALSE)
                        $this->makepayment($payid,"joining",850);
                   if(isset($_POST['referalid']) && $_POST['referalid']!="")
                      $this->check_level($_POST['referalid']);*/
                }
                else
                {
                    $str="Faild";
                }
				return $str;
	        }
	        else
	           $str="The given Email is aleady registered";

        $this->redirect_back();
	}
		//check level
	public function check_level($refid)
	{
	    $sql="select * from user_details where refered_id='$refid' and status='Active' and type='user'";
		$res=$this->selectdata($sql);
		if($res!=FALSE)
		{
		    foreach($res['total_row'] as $row)
		    {
		        $uid=$row['id'];
		        $level1=$row['level'];
    	        //$amt=$row['wallet'];
    	        $refid2=$row['refer_by'];
    	        if($level1==1)
    	        {
    	              $nxtlevel1=2;
    	              $sql1="select * from user_details where refer_by='$refid' and status='Active' and type='user'";
		              $res1=$this->selectdata($sql1);
        	          $count1=$res1['count'];
        	          $amt=50;
        	          $this->makepayment($uid,"referal",$amt);
        	          if($count1>=10)
        	          {
        	            $this->update_level($refid,$nxtlevel1,$amt,$uid);
        	            //$refid2=$row['ref'];
        	            $this->check_level($refid2);
        	          }
    	        }
		    }
		}
	}
	//update level
	public function update_level($refid,$lvl,$winamt,$uid)
	{
	    $upd=$this->updatedata("user_details",array("level"=>$lvl)," refered_id='$refid'");
	}
	public function makepayment($payid,$tfor,$amt)
	{
	    $trans_add=array(
	        "user_id"=>$payid,
	        "transaction_type"=>"cr",
	        "amount"=>$amt,
	        "trans_for"=>$tfor,
	        "status"=>"success",
	       // "ip_add"=>$this->$this->ipAddress()
	   );
	   $ins=$this->insertdata('transaction_details',$trans_add);
	}
	public function nextpayment($pos,$id)
	{
	    $payid=0;
	    $sql="select * from user_details where postion<'$pos' and status='Active' and type='user' order by postion desc";
		$res=$this->selectdata($sql);
		if($res!=FALSE)
		{
		   foreach($res['total_row'] as $row)
		   {
		       $uid=$row['id'];
		       $sql="select * from transaction_details where user_id='$uid' and trans_for='joining'";
        	   $res1=$this->selectdata($sql);
        	   if($res1!=FALSE)
        	   {
        	       $count=$res1['count'];
        	       if($count==1)
        	       {
        	           $payid=$uid;
        	           break;
        	       }
        	       else if($count==2)
        	        break;
        	   }
        	   else
        	    $payid=$uid;
		   }
		   return $payid;
		}
		else
		    return FALSE;
	}
	public function getposition()
	{
	    $pos=0;
	    $sql="select * from user_details where type='user' order by postion desc limit 1";
		$res=$this->selectdata($sql);
		if($res!=FALSE)
		{
		    $data=$res['single_row'];
		    $pos=$data['postion'];
		    return $pos+1;
		}
		else
		    return $pos+1;
	}
	public function checkepin($epin)
	{
	    $sql="select * from epin_details where epin='$epin' and status='unused'";
		$res=$this->selectdata($sql);
		if($res==FALSE)
		    return TRUE;
		else
		    return FALSE;
	}
	public function checkemail($email)
	{
	    $sql="select * from user_details where email='$email'";
		$res=$this->selectdata($sql);
		if($res==FALSE)
		    return FALSE;
		else
		    return TRUE;
	}
	public function checkusername($usernm)
	{
	    $sql="select * from user_details where email='$usernm'";
		$res=$this->selectdata($sql);
		if($res==FALSE)
		    return FALSE;
		else
		    return TRUE;
	}
	public function getReferaldetails($ref)
	{
		$sql="select * from user_details where sponcer_id='$ref'";
		$res=$this->selectdata($sql);
		if($res!=FALSE)
		{
		    return $res['single_row'];
		}
	    else
	        return FALSE;
	}
	public function contact()
  {
      $data = array(
          "fname" => $_POST['fname'],
          "lname" => $_POST['lname'],
          "email" => $_POST['email'],
          "message" => $_POST['message'],
          "phone" => $_POST['phone'],
        );

      $ins = $this->insertdata('contact_details',$data);
      if ($ins) {
          $str = "Details Send successfully";
      } else {
          $str = "Faild";
      }
    }


			public function random_number()
	{
			$ran_num = rand(9999, 99999);
			return $ran_num;
	}

				public function forget_password_mail()
				{
						$email = $_POST['email'];
						$sql = "select * from user_details where email= '" . $email . "'";
						$result = $this->selectdata($sql);
						if ($result) {
								$random_number = $this->random_number();
								$otpp =  $this->updatedata('user_details',array("otp"=>$random_number),"where email='$email'");
								$per_id = $result['single_row']['id'];
								if ($random_number) {
										$message = $random_number . ' OTP is valid for 5 min... ';
										$mail = true;
										if ($mail) {
												$error_array['success'] = 'Check E-mail for OTP';
												$error_array['status'] = 1;
												$error_array['id'] =  $per_id;
												$error_array['otp'] = $message;
										}
								}

								echo json_encode($error_array);

						}
						else
						echo 0;

				}

				public function otp_verification()
				{
						 $otp = $_POST['otp'];
						$email=$_POST['email'];
						$sql1 = "select * from user_details where otp = '$otp' and email='$email'";
						$res=$this->selectdata($sql1);
						if($res!=FALSE){
								return TRUE;
						}
						else {
								return FALSE;
						}

				}

				public function new_password()
				{
						 $password = MD5($_POST['password']);
						$email=$_POST['email'];
						$sql1 =  $this->updatedata('user_details',array("password"=>$password),"where email='$email'");
						$res=$this->selectdata($sql1);
						if($res!=FALSE){
								return TRUE;

						}
						else {
								return FALSE;

						}

				}
				public function login_email()
				{
						$email = $_POST['email'];
						$sql = "select * from user_details where email= '" . $email . "'";
						$result = $this->selectdata($sql);
						if ($result) {
								$random_number = $this->random_number();
								$otpp =  $this->updatedata('user_details',array("otp"=>$random_number),"where email='$email'");
								$per_id = $result['single_row']['id'];
								if ($random_number) {
										$message = $random_number . ' OTP is valid for 5 min... ';
										$mail = true;
										if ($mail) {
												$error_array['success'] = 'Check E-mail for OTP';
												$error_array['status'] = 1;
												$error_array['id'] =  $per_id;
												$error_array['otp'] = $message;
										}
								}

								echo json_encode($error_array);

						}
						else
					 {

						$insert=$this->insertdata('user_details',$email);
						if($insert)
								{
										$random_number = $this->random_number();
										$otpp =  $this->updatedata('user_details',array("otp"=>$random_number),"where email='$email'");
										$per_id = $insert['single_row']['id'];
										if ($random_number) {
												$message = $random_number . ' OTP is valid for 5 min... ';
												$mail = true;
												if ($mail) {
														$error_array['success'] = 'Check E-mail for OTP';
														$error_array['status'] = 1;
														$error_array['id'] =  $per_id;
														$error_array['otp'] = $message;
												}
										}

										echo json_encode($error_array);


							 }

					 }

				}


				public function review()
				{
						$data = array(
							"cstatus"=>1,
							"product_id"=> $_POST['product_id'],
              "name" => $_POST['name'],
							 "email" => $_POST['email'],
							 "comment" => $_POST['comment'],
							);
							$ins = $this->insertdata('review_details',$data);
						if ($ins) {
								$str = "Details Send successfully";
						} else {
								$str = "Faild";
						}
					}


   }
//end of class

 $obj=new login();
	$str="";
	if(isset($_REQUEST["blogin"]))
	{
       $str=$obj->signin();
	}
?>
