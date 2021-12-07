<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
    <?php
    include '../acceuil/en-tête.php'
    ?>
    <?php
    include '../acceuil/nav.php'
    ?>

    <main>

    <form id="form" method="post" action="./function.php">
    <div class="form1">
        <label for="nom">NOM</label>
        <input required placeholder="Inscrit ton nom" type="text" id="nom" name="nom">
    </div>

    <div class="form2">
        <label for="prenom">Prénom</label>
        <input required placeholder="Inscrit ton prénom" type="text" id="prenom" name="prenom">
    </div>

    <div class="form3">
        <label for="emai">E-MAIL</label>
        <input required placeholder="Inscrit ton e-mail" type="email" id="email" name="email">
    </div>

    <div class="form4">
        <label for="pays">PAYS DE L'UTILISATEUR</label>
        <select name="pays" id="pays">
            <optgroup label="Europe">
                <option value="">SELECTION PAYS</option>
                <option value="France">FRANCE</option>
                <option value="Belgique">BELGIQUE</option>
                <option value="Suisse">SUISSE</option>
                <option value="Hongrie">HONGRIE</option>
                <option value="Pologne">POLOGNE</option>
                <option value="Rossbeef">ROSSBEEF</option>
            </optgroup>
        </select>
    </div>

    <div class="form5">
        <label for="coment">COMMENTAIRE</label>
        <input required placeholder="LAISSEZ NOUS VOS COMMENTAIRES" type="text" id="comentaire" name="comentaire">
    </div>
    </form>








        <div class="formulaire"><img src="../Images Bordel/Parchemin Formulaire.png" alt=""></div>
        <div class="lampe"><img src="../Images Bordel/Lampe Formulaire Contact.png" alt=""></div>
    </main>
</body>

<style>

   main{
       background-color: black;
       flex-wrap: wrap;
       background: url('../Images Bordel/Smoke Background.jpg');
       background-size: cover;
   }
    .formulaire{
        height: 800px;
        display: flex;
        justify-content: center;
    }

    .lampe{
        height: 250px;
        display: flex;
        justify-content: center;
    }
</style>
<?php
include '../acceuil/footer.php'
?>
</html>