<?php

$full_name = $_REQUEST['full_name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

mail('akashlal139@gmail.com', 'Akash Lal - akashlal.tk Contact Us', '<b>Full Name:</b> '.$full_name.', <b>Phone:</b> '.$phone.', <b>Email:</b> '.$email.', <b>Subject:</b> '.$subject.', <b>Message:</b> '.$message);

?>