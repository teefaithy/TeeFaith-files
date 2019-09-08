<?php

if (isset($_POST['submitButton'])){
	$name = $_POST['fullname'];
	$mailFrom = $_POST['email'];
	$title = $_POST['title'];
	$message = $_POST['message'];
	
	$mailTo = "faitholuwatosin@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	mail(mailTo, $title, $txt, $headers);
	header("Location: oluwatosin.html?mailsend");
	
	echo "script type='text/javascript'>alert('Thanks for contacting me. I'll get back soon')</script>";
}
