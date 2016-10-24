<!doctype html>
<html>
<head>
 <title>PHP | contact</title>
</head>
<body>
<?php

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$company = $_POST['company'];
$position = $_POST['position'];

// Sector info not required therefore...
if (isset($_POST['sector'])) {//i.e. if the user set (or entered) a sector
	$sector = $_POST['sector'];
}

$country = $_POST['country'];
$msg = $_POST['message'];

$msg_to = "projects@decharles.com"; //the email address destination
$msg_subject = "Message from LLP Website";

//now prepare to send email
mail($msg_to,$msg_subject,$msg, "From " . $first_name . $last_name);

echo "Message should have been sent... Can you send this message to the contact page?"
?>
</body>
</html>