<?php 

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use SMTPValidateEmail\SMTPValidateEmail;

$from = 'sendingemail@test.test';
$email = 'emailtoverify@test.test';

$validator = new SMTPValidateEmail($email, $from);
$smtp_results = $validator->validate();

print_r($smtp_results);
