<?php
    $name = $_POST['name'];
	$pnum=$_POST['phone'];
    $visitor_email=$_POST['email'];
	$message=$_POST['message'];
	
	$email_from='frommywebsite@website.com';
	$email_subject="From my Website";
    $email_body="-Name: $name.\n".
                "-Phone Number: $pnum.\n".
				"-Email: $visitor_email.\n".
				"-Message: $message.\n";

    $to="benseddikismail@gmail.com";
	$headers="From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
    
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: index.html");
?>