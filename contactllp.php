<?php
	session_start();
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		//Then OK so Sanitisation steps
		$fullname = str_replace(array("\r", "\n", "%0a", "%0d", "%0A", "%0D", "%20"), "", stripslashes($_POST['fullname']));
		$company = str_replace(array("\r", "\n", "%0a", "%0d", "%0A", "%0D", "%20"), "", stripslashes($_POST['company']));
		$position = str_replace(array("\r", "\n", "%0a", "%0d", "%0A", "%0D", "%20"), "", stripslashes($_POST['position']));
		$country = str_replace(array("\r", "\n", "%0a", "%0d", "%0A", "%0D", "%20"), "", stripslashes($_POST['country']));
		$msg = str_replace(array("\r", "\n", "%0a", "%0d", "%0A", "%0D", "%20"), "", stripslashes($_POST['message']));
		
		//Break fullname into first name and surname/last name
		$fname = substr($fullname,0,strpos($fullname," "));
		$lname = substr($fullname,strpos($fullname," ")+1,strlen($fullname));
		
		// Sector info not required therefore...
		if (isset($_POST['sector'])) {//i.e. if the user set (or entered) a sector
			$sector = str_replace(array("\r", "\n", "%0a", "%0d"), "", stripslashes($_POST['sector']));
		}
		
		//Forming and sending email message
		$msg_to = "projects@decharles.com"; //the email address destination
		$msg_subject = "Message from LLP Website";
		$result = mail($msg_to,$msg_subject,$msg, "From " . $fname . ' ' . $lname . ' ' . $email);
	} else {
		$result = false;
	}

	if ($result == false) {
		$_SESSION['body-msg'] = '<p style="color: #b24026" class="body">Sorry, there was an error sending your message</p>';
		} else {
		$_SESSION['body-msg'] = '<p class="body" style="color: #b24026">Thanks, Your message has been sent.</p>';
	}
	// redirect to source page should be contact page
	header('location:'. $_SESSION['return_uri']); //filename of where the request came from is stored in the seeion variable
?>