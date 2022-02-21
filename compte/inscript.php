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

if(!empty($_POST['code']) && !empty($_POST['codeconf']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['code']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST["codeconf"]) && $_POST['code'] === $_POST['codeconf']){

$pass = $_POST["code"];
$hashed = password_hash($pass, PASSWORD_BCRYPT);

}else{
    header('location:./insc.php');
 
    echo 'ERREUR TU TE TROMPE DE MOT DE PASSE';
}

if(!empty($_POST) && !empty($hashed) && !empty($usname) && !empty($mail)){

try{
require_once './bdd.php';
    $req = $pdo->prepare("INSERT INTO compte(prenom, password, conftoken, email, nom) VALUES (:prenom, :password, :conftoken, :email, :nom)");
    $tok = token(60);
    $req->bindParam(':prenom', $usname);
    $req->bindParam(':password', $hashed);
    $req->bindParam(':conftoken', $tok);
    $req->bindParam(':email', $mail);
    $req->bindParam(':nom', $name);
    $req->execute();

}catch(PDOException $e){
    echo "Erreur : " . $e;

}finally{
    $usid = $pdo->lastInsertId();
    $pdo = null;

       header("location:./confirm.php?id=" . $usid . "&token=" . $tok);
}    
}else{
header("location:./insc.php");

echo ' COUSCOUS';
}





?>