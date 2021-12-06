<?php

include './header.php';

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

if(!empty($_POST['codemd']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}#', $_POST['codemd']) &&!empty($pseudo)){
    try{
        require_once './bdd.php';
        $req = $pdo->prepare('SELECT * FROM compte WHERE tokenconfirmed IS NOT NULL AND prenom = :pseunom ');
        $req->bindParam(':pseunom', $pseudo);
        $req->execute();
        $userdata = $req->fetch(PDO::FETCH_OBJ);

    }catch(PDOException $e){
        echo 'Erreur : ' . $e;
    }finally{
        if(!empty($userdata) && password_verify($_POST['codemd'], $userdata->password)){
            session_start();
        $_SESSION['auth'] = $userdata;
        print_r($_SESSION['auth']);
       header('location:./index.php');   

    }else{
        echo 'ceci est faux';
    }

}
}else{
    echo 'mince';
}


?>