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


<?php
if(isset($_COOKIE['accept_cookie'])) {
    $showcookie = false;
}else{
    $showcookie = true;
}
require_once('./index.php');
?>


<main>
<div class="phrases">
    <img src="../Images/Laissez vous emportez par le souffle de l'Orient.png" width="90%">
    <img src="../Images/Le véritable souk.jpg" width="90%">
</div>
    
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="../Images/Nourriture Banner.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../Images/Banner 2.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="../Images/Banner 3.webp" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="../Images/Banner 4.jpg" style="width:100%">
</div>


<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


</main>

<?php if($showcookie) { ?>
    <div class="overlay">
        <div class="cookie-alert">Le BAZAR DE HECKLE ET JECKLE vous demande d'accepter les cookies afin d'optimiser les performances, les fonctionnalités des réseaux sociaux et la pertinence de la publicité. Pour obtenir plus d'informations ou modifier vos préférence cliquez sur le bouton << PLUS D'INFORMATIONS >>
<br /><a href="../Page du Site/index.php">ENTREZ</a>
        <a href="#" onclick="togglecokie()">PLUS D'INFORMATIONS</a>


        </div>
    </div>

   <div id="cokie">
       <p>1.cookie focntionnel<br>
       Ces cookies sont nécessaires pour assurer le fonctionnement optimal du site et sont donc activés en permanence. Ils comprennent des cookies permettant de se souvenir de votre passage sur le site au cours d'une session, ou, si vous le souhaitez, de session à session. Ils participent au fonctionnement du panier d'achat et au processus d'achat, et vous aident en cas de problème de sécurité et pour vous conformer aux réglementations.<br>
       <br>
        2.Performances<br>
        Ces cookies nous permettent d'améliorer l'ergonomie du site grâce à l'analyse de l'utilisation du site web par les visiteurs. Dans certains cas, ces cookies améliorent la vitesse de traitement de vos requêtes en nous permettant d'enregistrer vos préférences pour le site. Désactiver ces cookies peut ralentir le site et limiter la pertinence des recommandations.<br>
        <br>
        3.Cookies liés aux réseaux sociaux et à la Publicités<br>
        Les cookies relatifs aux réseaux sociaux vous offrent la possibilité de vous connecter aux réseaux sociaux et de partager le contenu de notre site Web sur ces derniers. Les cookies publicitaires (ou de tierces parties) recueillent des informations qui contribuent à mieux cibler la publicité selon vos centres d'intérêt, que ce soit sur LE BAZAR DE HECKLE ET JECKLE ou d'autres sites. Dans certains cas, ces cookies ont recours à l'utilisation de vos données personnelles. Pour en savoir plus sur la façon dont vos données personnelles sont utilisées, consultez notre Politique de confidentialité et de gestion des cookies. La désactivation de ces cookies peut entraîner l'affichage de publicités moins pertinentes pour vous et empêcher une liaison efficace avec Facebook, Twitter ou d'autres réseaux sociaux et/ou vous empêcher de partager du contenu sur les réseaux sociaux.</p>
      <a href="../Page du Site/index.php"><button class="buton">retour</button></a>
   </div>

<?php } ?>
<script src="../jq//jquery-3.6.0.min.js/"></script>

</body>

<style>

#cokie {
  border:  solid  #F0A224 5px;
  display: block;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  position: absolute;
  top: 150vh;
  padding: 2.5em;
  height: 100vh;
  width: 50vw;
  background-color:wheat;
  box-shadow: 5px 5px 5px 5px black ;
  border-radius: 25px;
  font-family:algerian;
  color: black;
  left: 25vw;
  top: 10vh;
  display: none;
  flex-wrap: wrap;
  
}

 #cokie .buton{
  
    background-color:#45A9FF;
    height: 5vh;
    width: 5vw;
    border-radius: 15px;
    font-family: algerian;
    border: 2px solid #F0A224;
  
}







.overlay{
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
        background: rgba(0,0,0,0.7);
    }

    .cookie-alert{
        text-align: center;
        position: fixed;
        bottom: 25vh;
        left: 25vw;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
        height: 50vh;
        width: 50vw;
        color:  #F0A224;
        font-family: algerian;
        padding: 25px;
        border-radius: 25px;
        background-color: black;
        border: 2px solid  #F0A224;
        box-shadow: 2px 2px 2px 2px #45A9FF  ;
      
    }
    .cookie-alert a{
        text-decoration: none;
        border: #F0A224 2px solid;
        border-radius: 20px;
        padding: 25px;
        color: #F0A224;
        transition: 1.2s ease;
        
    }

    .cookie-alert a:hover{
        color: black;
        font-size: 3px;
        background:#45A9FF;
        border: 2px #FF4618 solid;
       
       
    }
   
 
    







.phrases{
    text-align: center;
    column-count: 2;
}
  
*{box-sizing:border-box}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.mySlides {
  display: none;
}

.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

main{
    text-align: center;
    display: flex;
    flex-wrap:wrap;
    background-image: url('../Images/Background.jpg');
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

<script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 

$('.overlay').on('click', function(e) {
    if(e.target !== this) {
        return;
    }

    });


    function togglecokie(){
    
    var form = document.getElementById('cokie');
  
    // Condition pour afficher/cacher le formulaire en fonction de son état
    if(form.style.display == 'block'){
        form.style.display = 'none';
    }else{
        form.style.display = 'block';
        let appear = form.style.opacity = '1';
       setTimeout(appear, 1000) 
    }
}




</script>

<?php
include '../acceuil/footer.php'
?>
</html>