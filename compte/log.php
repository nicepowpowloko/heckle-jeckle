<?php

if(!empty($_POST['pseudo'])){

function cleandata($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$pseudo = cleandata($_POST['pseudo']);    
}else{
    echo 'probléme';
}

if(!empty($_POST['']))





?>