<?php
$to = "admin@c4is.army ";
$subject = "Text Message from {$_REQUEST['From']} to {$_REQUEST['To']}";
$message = "{$_REQUEST['Body']}";
$headers = "From: telnyx@c4is.army ";
mail($to, $subject, $message, $headers);
