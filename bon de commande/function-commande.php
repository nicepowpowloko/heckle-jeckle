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
    if(!empty($_POST['articless'])){
        $errors['articless'] = "Veuillez renseigner votre articles !!!";
    }
 
    
    if(!empty($_POST['couleurs'])){
        $errors['couleurs'] = "Veuillez selectionner votre couleurs !!!";

    }else{
        $echo['couleurs'] = "Remplir le champs des commentaires !!!";
    }



    if(!empty($errors)){
        $req = $pdo->prepare('INSERT INTO commande2 SET nom = ?, prenom = ?, article = ?, couleur = ?');
        $req->execute([$_POST['nomm'], $_POST['prenomm'], $_POST['articless'], $_POST['couleurs']]);
        $errors['couleurs'] = "message enregistré";
        
    }
}

?>

<?php
    require './commande.php';
?>