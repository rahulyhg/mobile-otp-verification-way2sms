<?php

session_start();

include("config.php");

function sendWay2($a, $b, $c, $d)
{
	echo $c;
	include("config.php");
	
		$insert = mysqli_query($conn,"insert into otps(mobile, otp) value ('$c','$d')");

		$res = sendWay2SMS ( $a, $b, $c, $d);
		
		if (is_array($res))
		{
           $output = $res[0]['result'];
		   if($output)
		   {
			   $_SESSION['mobile'] = $c;
			   $_SESSION['otp_send_time'] = time();
			   header("Location:otp.php");
		   }
		   else{
			   $_SESSION['mobile'] = $c;
			   $_SESSION['otp_send_time'] = time();
			   header("Location:otp.php");
		   }
		}
		else
		{
			"error h";
		} 

}


  //  include('way2sms-api.php');
   // sendWay2SMS ( '9034019503' , '8053005383' , '7988343797' , 'Hello');   
   //include("sendsms.php");
   
    include('way2sms-api.php');
	
	$mobile = mysqli_real_escape_string($conn,$_POST['no']);
	
	
	$checkmobile = mysqli_query($conn,"select * from otps where mobile='$mobile'");
	
	$registered = mysqli_num_rows($checkmobile);

	if($registered>0)
	{
		echo "Sorry, this mobile number is already registered with us";
	}
	else
	{
	$otpmsg = mt_rand();
   
    sendWay2 ( '9034019503' , '8053005383' , $mobile , $otpmsg);  
	}
   /* if (isset($_REQUEST['uid']) && isset($_REQUEST['pwd']) && isset($_REQUEST['phone']) && isset($_REQUEST['msg'])) {
    echo "result ". $res = sendWay2SMS($_REQUEST['uid'], $_REQUEST['pwd'], $_REQUEST['phone'], $_REQUEST['msg']);
    if (is_array($res))
        echo 'hi';
    else
        echo 'error';
    exit;
} */

   

?>