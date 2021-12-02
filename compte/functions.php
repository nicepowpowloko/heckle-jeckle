<?php

function token($lol){
$alphabet = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
$token = substr(str_shuffle(str_repeat($alphabet, $lol)),0,$lol);
return $token;
}

function logged_only(){

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
        header('locations:login.php');
    }

   if(!isset($_SESSION['auth'])){
       $_SESSION['flash']['danger'] ="aucun droit pour cette page";
       header('location:./login.php');
       exit();
   } 
}



?>