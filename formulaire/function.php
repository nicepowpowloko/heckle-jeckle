<?php
require '../compte/bdd.php';
?>


<?php

if(!empty($_POST)){
    $errors = array();

    if(!empty($_POST['nomm'])){
        $errors['nomm'] = "Veuillez renseigner votre NOM !!!";
    }
    if(!empty($_POST['prenomm'])){
        $errors['prenomm'] = "Veuillez renseigner votre PRENOM !!!";
    }
    if(!empty($_POST['emaill'])){
        $errors['emaill'] = "Veuillez renseigner votre E-MAIL !!!";
    }
    if(!empty($_POST['payss'])){
        $errors['payss'] = "Veuillez selectionner votre PAYS !!!";
    }
    if(!empty($_POST['comentairee'])){

    }else{
        $echo['comentairee'] = "Remplir le champs des commentaires !!!";
    }
    if(!empty($errors)){
        $req = $pdo->prepare('INSERT INTO formulaire SET nom = ?, prenom = ?, email = ?, pays = ?, commentaire = ?');
        $req->execute([$_POST['nomm'], $_POST['prenomm'], $_POST['emaill'], $_POST['payss'], $_POST['comentairee']]);
        $errors['comentairee'] = "message enregistré";
        
    }
}

?>

<?php
    require './formulaire.php';
?>