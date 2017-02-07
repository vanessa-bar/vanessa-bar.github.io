<?php
$field_firstname = $_POST['cf_firstname'];
$field_lastname = $_POST['cf_lastname'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'vaness.bar@hotmail.com';
$subject = 'Contact via Portfolio '.$field_lastname;

$body_message = 'De: '.$field_firstname.' '.$field_lastname."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Merci pour votre message. Je vous contacterais très prochainement.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert("L'envoi du message a échoué. Veuillez réessayer.");
		window.location = 'index.html';
	</script>
<?php
}
?>