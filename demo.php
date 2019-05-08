<?php 

require "./src/SMTPValidateEmail.php";

use SMTPValidateEmail\SMTPValidateEmail;

$from = 'admin@gubagoo.com';
$email = ['brian.tapparo@duprattford.com'];

$validator = new SMTPValidateEmail(null, null, true);
$smtp_results = $validator->validate($email, $from, false);

var_dump($smtp_results);
