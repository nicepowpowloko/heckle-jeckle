<?php

$user = 'root';
$pass = '';
try{


    $pdo = new PDO('mysql:host=localhost;dbname=bazar;charset=utf8', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

}catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}





?>
<style>
h1{
    color: orangered;
    font-family: algerian;
  
}
body{
    background-color:black;
}

</style>
<h1>WALLAH LA BASE DE DONNEES</h1>