<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include '../acceuil/en-tête.php'
?>

<?php
include '../acceuil/nav.php'
?>

<main>
  
<img src="../Images/Marchand.jpg" alt="">
<div class="bienvenue">
<h1>Ah, Salam, je vous souhaite le bonsoir, mon noble ami.</h1>
<p>
Approchez, approchez, venez plus près…
Trop près, un peu trop près.
Voilà. Bienvenue à Agrabah, cité de la magie noire, de l’enchantement, et des plus belles marchandises de ce côté du Jourdain en solde aujourd’hui, profitez-en.
Regardez, oui, un combiné narguilé et cafetière qui fait aussi les pommes de terre frites. Incassable, incass… Cassé !
Ooooh, regardez, c’est la première fois que j’en vois un aussi bien conservé. C’est le célèbre Tupperware de la Mer Morte. Ecoutez (prrt) ah ! Il fonctionne ! Wooooh !
Attendez une seconde ! Je vois que vous ne vous intéressez qu’aux objets exceptionnellement rares ! Il me semble avoir ici de quoi faire votre bonheur. Voyez ! Ne vous laissez pas rebuter par son apparente banalité : comme tant d’autres choses ce n’est pas ce qu’il y a à l’extérieur, mais ce qu’il y a à l’intérieur qui compte ! Ce n’est pas n’importe quelle lampe ! Elle a même changé le cours de la vie d’un jeune homme. Et ce jeune homme, tout comme cette lampe, valait beaucoup plus qu’on ne l’estimait… Un diamant d’innocence !</p>
</div>
</main>
</body>

<style>
  
.phrase{
    display: flex;
    justify-content: center;
}

main{
    text-align: center;
    display: flex;
    flex-wrap:wrap;
    background-image: url('../Images/Background.jpg');
}

.bienvenue{
    font-family: 'Arabela';
}

 main p{
    border: 2px solid white;
    justify-content: center;
    display: flex;
    padding: 25px;
    width: 350px;
    background-color: white;
    border-radius: 30px;
    text-align: center;
    font-size: 18px;
}

</style>

<?php
include '../acceuil/footer.php'
?>
</html>