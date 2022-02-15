<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if (isset($_POST['contactMail'])) {

	if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['sujet']) AND !empty($_POST['message']) AND !empty($_POST['telephone'])) {

		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$sujet= htmlspecialchars($_POST['sujet']);
		$message = htmlspecialchars($_POST['message']);
		$tel = htmlspecialchars($_POST['telephone']);

		$mailheader ="from: ".$name." ".$tel."<".$email."> \r\n";

		$to = "infirmierdsl@gmail.com";

		mail($to, $sujet, $message, $mailheader)
		or die("erreur!");

		echo "Message envoyé!";
	}
}
?>