<?php

if (isset($_POST['submitButton'])){
	$name = $_POST['fullname'];
	$mailFrom = $_POST['email'];
	$title = $_POST['title'];
	$message = $_POST['message'];
	
	$mailTo = "faitholuwatosin@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	mail($mailTo, $title, $txt, $headers);
	header("Location: index.php?mailsend");
	
		// send email 
$success = mail($mailTo, $title, $txt, $headers "From: <$EmailFrom>");
header("Location: index.php?mailsend");

// redirect to success page 
if ($success){
   print "<meta http-equiv=\"refresh\"   content=\"0;URL=contactthanks.php\">";
}
else{
   print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

}
