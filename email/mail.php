<?php

?>


<?php

$to = 'thomas22751@gmail.com';
$subject = 'sujet du messsage';
$message = 'bonjour pour valider votre <span style="color:blue;">compte</span> clicquez ici https://www.amazon.fr/?tag=admarketpla00-21&ref=pd_sl_aB6B4CB9ACC587B689EE118EA5 ';

$message = wordwrap($message, 70, "\r\n");

$headers = [
    "From" => "thomas22751@gmail.com",
    "Reply-To" =>"heckle-jeckle@gmail.com",
    "Content-Type" =>"text/html; charset=utf-8"];

mail($to, $subject, $message, $headers);

?>


