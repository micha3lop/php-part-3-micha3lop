<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = "example@domain.com";
    $subject = "Contact Form Message";
    $msg = "This is a test message.";
    $headers = "From: user@domain.com";

    mail($to, $subject, $msg, $headers);
    echo "Mail Sent!";
}
?>

<form method="post">
    <input type="submit" value="Send Message">
</form>
