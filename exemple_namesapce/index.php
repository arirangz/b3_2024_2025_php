<?php

spl_autoload_register();

use App\Chat\Message;
use App\Email\Message as EmailMessage;


$message = new Message();
$message->show("Hello");

$emailMessage = new EmailMessage();
$emailMessage->display("test");

// On peut aussi utiliser une classe avec le chemin du namespace
//$emailMessage = new App\Email\Message();