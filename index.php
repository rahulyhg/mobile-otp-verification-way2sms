<?php



?>

<form action="sendotp.php" method="post">

<input type="text" name="no">

<input type="submit" value="Send OTP">

</form>

<!--<a href='index.php?hello=true'><button >Send Message</button>-->

<!--Multiple Messages with different content-->
<?php 
 /*   include('way2sms-api.php');
    $client = new WAY2SMSClient();
    $client->login('username', 'password');
    $client->send('987654321', 'msg1');
    //Add sleep between requests to make this requests more human like! 
    //A blast of request's may mark the ip as spammer and blocking further requests.
    sleep(1);
    $client->send('987654321,9876501234', 'msg2');
    sleep(1);
    $client->logout(); */
?>
<!--
HTTP API
Send SMS just making GET or POST Requests.

Incase u want to use the service from your application then the parameters for ur application would be

http://www.yourdomain.com/sendsms.php?uid=LOGIN_ID&pwd=PASSWORD&phone=XXXXXXXXX,YYYYYYYYY&msg=Hello+World

Parameters
uid = LOGIN_ID ( Your Login ID [either nickname or 10 Digit mobile no] )
pwd = PASSWORD ( Your Login Password )
phone = 10 Digit Mobile number. Incase of multiple numbers then numbers separated by comma (,)
msg = Your Message.
-->