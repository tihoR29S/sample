
<?php
$to      = 'amitjaiswal396@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$status = mail($to, $subject, $message, $headers);
if($status == 1)
{
    echo "success";
}
else
{
    echo print_debugger();
}
?>
