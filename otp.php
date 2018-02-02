<?php
session_start();
echo $_SESSION['mobile']; ?>

<br><br>

<?php
echo "Enter otp. Your otp code will expire after 1 minute";
?>

<br><br>

<?php
if(time() - $_SESSION['otp_send_time'] > 60)
{
    header("Location:error.php");
}

?>

<br><br><br><br>

<form method="post" action="processotp.php">
	<input type="text" placeholder="Enter otp value" name="otp">
	<input type="submit" value="Submit">
</form>