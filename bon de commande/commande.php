<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bon-commande</title>
</head>

    
<?php

include '../compte/header.php';
?>

<?php
include '../acceuil/nav.php';

?>

<style>

       form{
    padding : 23px 23px;
    font-family: algerian;
    position: absolute;
    margin-left: 85vh;
    margin-top: 5vh;
    flex-wrap: wrap;
    border: 5px solid black;
    box-shadow: 10px 10px black;
    background-color: white;
   
  
    
    
}
option{
    font-family: algerian;
    color: black;
    background-color: #F0A224;
     
}

input{
    font-family: algerian;
 
}

input:focus{
    outline: none;
    color: black;
    font-family: algerian;
    border: #F0A224 solid 2px;
   
}

.form4 {
    display: flex;
    justify-content: space-between;
}

footer{
    margin-top: 60vh;
}


</style>




<body>
    <br>
<div class="titre">
    <h1>BON DE COMMANDE</h1>
</div>
<br>

<main>

<form id="form" method="post" action="./function-commande.php">   

    <div class="form1">
        <label for="nomm">NOM :</label>
        <input required placeholder="Inscrit ton nom" type="text" id="nomm" name="nomm">
    </div>
<br>
    <div class="form2">
        <label for="prenomm">Prénom :</label>
        <input required placeholder="Inscrit ton prénom" type="text" id="prenomm" name="prenomm">
    </div>
<br>
  
    <div class="form3">
        <label for="articless">ARTICLES :</label>
        <select class="articles1" name="articless" id="articless">
            <optgroup  label="ALIMENTATION">
                <option value=""></option>
                <option value="couscous">COUSCOUS 3,25€</option>
                <option value="Belgique">MASALA 2,81€</option>
                <option value="Suisse">DATTES 1,50€</option>
                <option value="Hongrie">CAFÉ 1,80€</option>
                <option value="Pologne">THÉ 1,76€</option>
                <option value="allemagne">HARISSA 3,30€</option>
                <option value=""></option>
            </optgroup>

            <optgroup  label="VETEMENTS & ACCESSOIRES">
                <option value=""></option>
                <option value="France">TURBAN 21,90€</option>
                <option value="Belgique">COSTUME ORIENTALE 128,31€</option>
                <option value="Suisse">BABOUCHE 15,26€</option>
                <option value="Hongrie">MAIN DE FATMA 75,50€</option>
                <option value="Pologne">KAFTAN 65,80€</option>
                <option value="allemagne">BOUCLE D'OREILLE 11,80€</option>
                <option value=""></option>
            </optgroup>

            <optgroup  label="DIVERS">
                <option value=""></option>
                <option value="France">CHICHA 65,30€</option>
                <option value="Belgique">TAPIS 56,20€</option>
                <option value="Suisse">LAMPE 920,50€</option>
                <option value="Hongrie">ENSEMBLE DE THÉ 12,96€</option>
                <option value="Pologne">COUSCOUSSIER 80,50€</option>
                <option value="allemagne">SERVICE DE TABLE 150,80€</option>
                <option value=""></option>
            </optgroup>
        </select>
    </div>
<br>

    <div class="form4">
    <label for="tailles">TAILLE :</label>    
    <input name="small" id="tailles" type="checkbox" /><label for="small"> S</label>
    <input name="tailles" id="tailles" type="checkbox" /><label for="m"> M</label>
    <input name="tailles" id="tailles" type="checkbox" /><label for="l"> L</label>
    <input name="tailles" id="tailles" type="checkbox" /><label for="xl"> XL</label>
</div>
 <br>

 
 <div class="form5">
    <label for="couleurs">COULEURS :</label>    
    <input name="couleurs" id="couleurs" type="checkbox" /><label for="bleu"> BLEU</label>
    <input name="couleurs" id="couleurs" type="checkbox" /><label for="rouge"> ROUGE</label>
    <input name="couleurs" id="couleurs" type="checkbox" /><label for="jaune"> JAUNE</label>
    <input name="couleurs" id="couleurs" type="checkbox" /><label for="noir"> NOIRE</label>
</div>
<br>

<div class="form6">
 <label for="nombres">NOMBRE D'ARTICLE :</label>
<input type="nombres" id="nombres" name="nombres"
       min="0" max="10">
       </div>
       <br>       
    <div class="form7">
        <input  type="submit" value="VALIDER VOTRE COMMANDE">
    </div>
    </form>
</main>

</body>


</html>


<?php
include '../acceuil/footer.php';
?>





