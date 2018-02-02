<?php

include("config.php");

session_start();

if(isset($_SESSION['mobile']))
{
$mob = $_SESSION['mobile'];

$query = mysqli_query($conn,"delete from otps where mobile = '$mob'");

if($query)
	{
		session_unset();
		session_destroy();

		echo "oops your otp code has expired";
	}
}
else
{
	echo "oops your otp code has expired";
}
?>