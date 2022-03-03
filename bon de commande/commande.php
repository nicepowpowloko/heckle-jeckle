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


body{
    background-image: url('../Images/Background.jpg');
}

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

.popup a{
    text-decoration: none;
    color: black;
    border: 2px solid black;
    width: 80px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    margin-top: 150px;
}

.popup {
  display: none;
  position: fixed;
  padding: 10px;
  width: 400px;
  left: 50%;
  margin-left: -150px;
  height: 330px;
  top: 50%;
  margin-top: -80px;
  background: #FFF;
  border: 3px solid #00B2FE;
  font-family: algerian;
  z-index: 20;
  box-shadow: 10px 10px black;
}

#popup:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popup:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background:grey;
  z-index: -1;
}
.popup p{
    display: flex;
    justify-content: center;
}

.popup img{
    height: 150px;
    width: 150px;
    margin-left: 110px;
    position: fixed;
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
                <option value="masala">MASALA 2,81€</option>
                <option value="dattes">DATTES 1,50€</option>
                <option value="café">CAFÉ 1,80€</option>
                <option value="thé">THÉ 1,76€</option>
                <option value="harissa">HARISSA 3,30€</option>
                <option value=""></option>
            </optgroup>

            <optgroup  label="VETEMENTS & ACCESSOIRES">
                <option value=""></option>
                <option value="turban">TURBAN 21,90€</option>
                <option value="costume orientale">COSTUME ORIENTALE 128,31€</option>
                <option value="babouche">BABOUCHE 15,26€</option>
                <option value="main de fatma">MAIN DE FATMA 75,50€</option>
                <option value="kaftan">KAFTAN 65,80€</option>
                <option value="boucle d'oreille">BOUCLE D'OREILLE 11,80€</option>
                <option value=""></option>
            </optgroup>

            <optgroup  label="DIVERS">
                <option value=""></option>
                <option value="chicha">CHICHA 65,30€</option>
                <option value="tapis">TAPIS 56,20€</option>
                <option value="lampe">LAMPE 920,50€</option>
                <option value="ensemble de thé">ENSEMBLE DE THÉ 12,96€</option>
                <option value="couscoussiers">COUSCOUSSIER 80,50€</option>
                <option value="service de table">SERVICE DE TABLE 150,80€</option>
                <option value=""></option>
            </optgroup>
        </select>
    </div>
<br>

    <div class="form4">
    <label for="tailles">TAILLE :</label>    
    <input value="S" name="small" id="tailles" type="checkbox" /><label for="small"> S</label>
    <input value="M" name="tailles" id="tailles" type="checkbox" /><label for="m"> M</label>
    <input value="L" name="tailles" id="tailles" type="checkbox" /><label for="l"> L</label>
    <input value="XL" name="tailles" id="tailles" type="checkbox" /><label for="xl"> XL</label>
</div>
 <br>

 
 <div class="form5">
    <label for="couleurs">COULEURS :</label>    
    <input value="bleu"  name="couleurs" id="couleurs" type="checkbox" /><label for="bleu"> BLEU</label>
    <input value="rouge" name="couleurs" id="couleurs" type="checkbox" /><label for="rouge"> ROUGE</label>
    <input value="jaune"  name="couleurs" id="couleurs" type="checkbox" /><label for="jaune"> JAUNE</label>
    <input value="noire"  name="couleurs" id="couleurs" type="checkbox" /><label for="noir"> NOIRE</label>
</div>
<br>

<div class="form6">
 <label for="nombres">NOMBRE D'ARTICLE :</label>
<input type="number" id="nombres" name="number"
value="0" min="0" max="10">
       </div>
       <br>       
    <div class="form7">
    <button class="button" href="#" onclick="show('popup')">validez votre commande</button>
    </div>
    </form>


</main>
<div class="popup" id="popup">
  <h2>Le Bazar de HECKLE ET JECKLE </h2></p>
  <p>Vous remercie de votre confiance</p>
  <p>A bientôt sur notre site</p>
  <br>
<img src="../Images/HEADER/Logo.png" alt="">

  <a href="#" onclick="hide('popup')">Retour</a>
</div>

</body>


</html>

<script>

$ = function(id) {
  return document.getElementById(id);
}

var show = function(id) {
	$(id).style.display ='block';
}
var hide = function(id) {
	$(id).style.display ='none';
}

</script>



<?php
include '../acceuil/footer.php';
?>





