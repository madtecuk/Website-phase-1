<?php

if (isset($_post['submit')'])) {
	$name = $_post['name'];
	$company = $_post['company'];
	$email = $_post['email'];
	$telephone = $_post['telephone'];
	$message = $_post['message']


	$mailTo = "mail@madtecuk.com"
	$headers = "From: ".$mailFrom;
	$txt = "you have recieved an email from ".$name.".\n\n".$message;

	mail($mailto, $subject, $txt, $headers);
	header("location: index.php?mailsend")
}