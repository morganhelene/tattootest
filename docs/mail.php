<?php
	$to = 'spn5@spondonit.com';
	$username = $_POST[username];
	$email= $_POST[email];
	$message = $_POST[message];
	$phone = $_POST[phone];
	$company = $_POST[company];
	
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$message = '<table style="width:100%">
		<tr>Username: '.$username.'</tr>
		<tr>Phone:  '.$phone.'</tr>
		<tr>Company: '.$company.'</tr>
		<tr>Message: '.$message.'</tr>
	</table>';
	
	if (@mail($to, $email, $message, $headers))
	{
		echo 'sent';			
	}else{
		echo 'failed';
	}
	
?>