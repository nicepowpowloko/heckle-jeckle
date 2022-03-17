<?php

session_start();

//je verifie si elle est definit et bpas vide

if($_POST){
    if(isset($_POST['articles']) && !empty($_POST['articles'])
    && isset($_POST['prix']) && !empty($_POST['prix'])
    && isset($_POST['nombre']) && !empty($_POST['nombre'])){

        require_once('connect.php');

// je  nettoie les données envoyée

        $articles = strip_tags($_POST['articles']);
        $prix = strip_tags($_POST['prix']);
        $nombre = strip_tags($_POST['nombre']);
        
       
        $sql = 'INSERT INTO `divers` (`articles`, `prix`, `nombre`) VALUES (:articles, :prix, :nombre);';

        $query = $db->prepare($sql);

        $query->bindValue(':articles', $articles, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_STR);
        $query->bindValue(':nombre', $nombre, PDO::PARAM_INT);
       
      
        $query->execute();

        $_SESSION['message'] = " Articles ajouter";
        require_once('close.php');

        header('location: index.php');

    }else{
        $_SESSION['erreur'] = "le formulaire est incomplet";
    }
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un articles</title>

<style>
   body{
       display: flex;
       background-image: url('../Images Bordel/kevin.durant.jpg');
      background-size: cover;
   }

.alert{
    color: black;
    background-color: red;
    font-weight: bolder;
    font-size: 2em;
    display: flex;
    justify-content: center; 
}

button{
    padding: 10px;
    box-shadow: 5px 5px black;
    background: #00B2FE;
   text-decoration: black;
   font-weight: bolder;
   border: 2px solid orangered;
}
h1{
    color: orangered;
}
label{
    color: orangered;
    font-weight: bolder;
}

input{
    background: #000080;
    border: 2px solid orangered;
}

</style>


</head>
<body>
    
<main class="container">
            <div class="row">
                <section class="col-12">

                <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert"> '. $_SESSION['erreur'].'
                        </div>';
                       $_SESSION['erreur'] = ""; 
                    }
                    ?>

                                <h1>Ajouter un articles</h1>
                                <form method="post">
                                    <div class="group">
                                        <label for="articles">Articles : </label>
                                        <input type="text" id="articles" name="articles">
                                    </div>
                                    <br>
                                    <div class="group">
                                    <label for="prix">Prix : </label>
                                        <input type="text" id="prix" name="prix">
                                    </div>
                                    <br>
                                    <div class="group">
                                    <label for="nombre">Nombre : </label>
                                        <input type="number" id="nombre" name="nombre">
                                    </div>
                                    <br>
                                   
                                   <button>ENVOYER</button>
                                   


                                  


                                </form>
                            </section>
                             </div>
                        </main>
</body>
</html>