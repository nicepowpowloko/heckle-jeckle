<?php


$destinataire = 'thomas22751@gmail.com';

$expediteur = 'thomas22751@gmail.com';

$objet = 'inscription';

$headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

$message = ' pour valider <br>
<a href="http://localhost/heckle-jeckle/email/2.php</a>';


if(mail($destinataire, $objet, $message, $headers)){
    echo 'ce mail est bien envoyer';
    
}
else{
    echo ' non envoyer';
}

header('location:./1.php');



?>