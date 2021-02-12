<?php
$mailer = file_get_contents("http://crm.thinkrenta.com/crm.thinkrenta.com/sarf/thinkrenta/emailer/invoice.php");
$code = $mailer;
// Multiple recipients
$to = 'tiwarivivek109@gmail.com'; // note the comma

// Subject
$subject = 'invoice Reminders for August';

// Message
$message = '\''.$code.'\'';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers

$headers[] = 'From: invoice Reminder <gausu60@gmail.com>';


// Mail it
$mail = mail($to, $subject, $message, implode("\r\n", $headers));
if ($mail) {
  // code...
  echo "successfully";
} else {
  // code...
  echo "failed";
}

?>
