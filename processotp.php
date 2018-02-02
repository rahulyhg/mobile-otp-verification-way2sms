<?php

session_start();

include("config.php");

 $otp = mysqli_real_escape_string($conn,$_POST['otp']);

 $mobile = $_SESSION['mobile'];


$verifyotp = mysqli_query($conn,"select * from otps where mobile = '".$mobile."' AND otp='".$otp."'");

$verified = mysqli_num_rows($verifyotp);

if($verified>0)
{
	echo "Congrates";
}
else
{
	echo "Sorry otp does not match";
}

?>