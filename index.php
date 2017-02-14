
<?php  

	$emailTo = "email@email.com";

	$subject = "I hope this works!";

	$body = "I think you're great!";

	$headers = "From: email2@email.com";

	if (mail($emailTo, $subject, $body, $headers)) {

		echo "The email was sent succesfully";

	} else {

		echo "The email could not be sent.";
	}


?>



