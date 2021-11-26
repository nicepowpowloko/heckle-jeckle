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
        <div class="formulaire"><img src="../Images/Parchemin Formulaire.png" alt=""></div>
        <div class="lampe"><img src="../Images/Lampe Formulaire Contact.png" alt=""></div>
    </main>
</body>

<style>
   main{
       background-color: black;
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