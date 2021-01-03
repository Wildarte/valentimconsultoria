<?php

echo "<h2>Teste de envio de email</h2>";

// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('wildarte10@gmail.com', 'My Subject', $message);