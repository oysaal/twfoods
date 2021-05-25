<?php
		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$email_from = 'ordertakies@gmail.com';

		$email_subject = 'New Form Submission From TW Foods';

		$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

		$to = 'ordertakies@gmail.com';

		$headers = "from: $email_from \r\n";

		$headers .= "Reply-to: $visitor_email \r\n";


		mail($to,$email_subject,$email_body,$headers);

		header("Location: index.html");
?>
