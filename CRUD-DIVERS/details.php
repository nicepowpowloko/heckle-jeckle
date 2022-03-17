<?php

// je demarre la session

session_start();

//si l'id existe et si il est pas vide

if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect.php');

// je nettoie l'id
// fonction "strip_tags" qui enléve toute les balise

$id = strip_tags($_GET['id']);

$sql = 'SELECT * FROM `divers` WHERE `id` = :id;';

// je prépare la réquête

$query = $db->prepare($sql);

// j'accroche  les paramétres (id)

$query->bindValue(':id', $id, PDO::PARAM_INT);

// j'exécute la requête

$query->execute();

// je récupere le produit

$produit = $query->fetch();

// je verifie si le produit excite

if(!$produit){
    $_SESSION['erreur'] = " CETTE ID N'EXISTE PAS";
    header('location: index.php');
}

// je verifie si l'url est valide

}else{
    $_SESSION['erreur'] = "L'URL EST INVALIDE";
    header('location: index.php');
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de l'articles</title>
</head>


<style>

body{
       display: flex;
       background-image: url('../Images Bordel/kewileonard.jpg');
      background-size: cover;
   }

    button{
    padding: 10px;
    box-shadow: 5px 5px black;
    background: #00B2FE;
   text-decoration: black;
   font-weight: bolder;
   border: 2px solid orangered;
}
p{
    font-weight: bolder;
    color: white;
}

</style>


<body>
    
<main class="container">
    <div class="row">
        <section class="col-12">
            <h1>Détail de l'articles : <?= $produit['articles']?></h1>
            <p>ID : <?= $produit['id']?></p>
            <p>Produit : <?= $produit['articles']?></p>
            <p>Prix : <?= $produit['prix']?></p>
            <p>Nombre : <?= $produit['nombre']?></p>
            <p><a href="index.php"><button>RETOUR</button></a> 
            <br>
            <br>
            <a href="edit.php?id=<?=$produit['id'] ?>"><button>MODIFIER</button></a></p>
            
        </section>
    </div>
</main>

</body>
</html>