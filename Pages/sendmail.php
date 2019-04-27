<?php
if isset ($_POST['post']))  {
	$msg = 'name: ' .$_POST['name'] ."\n"
			.'Email: ' .$_POST['email'] ."\n"
			.'Company: ' .$_POST["company"] ."\n"
			.'Telephone:'.$_POST["telephone"] ."\n"
			.'Message:'.$_POST["message"];
		mail ('enquiries@madtecuk.com', 'Feedback from M.A.D.tec uk', $msg) ;
		header('thankyou.html');
} else {
	header('location: index.html');
	exit (0);
}
?>