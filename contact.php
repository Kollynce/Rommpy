<?php 

		$firstname = $_POST['firstname'];

		$lastname = $_POST['lastname'];

		$email = $_POST['email'];

		$message = $_POST['message'];

		$formcontent="From: $firstname \t $lastname \n Message: $message";

		$recipient = "collinsodeny@gmail.com";

		$subject = "Contact Form";

		$mailheader = "From: $email \r\n";

		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		echo("Your Message Has Been Sent Successfully");
?>