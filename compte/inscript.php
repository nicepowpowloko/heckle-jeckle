<?php
require './functions.php';


if(!empty($_POST['pseudo']) && !empty($_POST['email'])){
    function cleandata($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }

$usname = cleandata($_POST['pseudo']);
$mail = cleandata($_POST['email']);

}else{
    header("location:./insc.php");
}

if(!empty($_POST['code']) && !empty($_POST['codeconf']) &&)







?>