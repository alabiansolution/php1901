<?php 
	
	

	$to = "uwazie.benedict@alabiansolutions.com";
	$subject = "I want to make enquiry";
	$body = "Here is the body of my message";
	$header = "From: <gradedinfo@gmail.com>";

	if(mail($to, $subject, $body, $header)){
		echo "Message sent";
	}else{
		echo "Message not sent"
	}





 ?>