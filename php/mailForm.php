<?php
	if(isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])){
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
		mail("J0ebrunett@gmail.com", $subject, $message, "From:" . $email);
	}
?>
