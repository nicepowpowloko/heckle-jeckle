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
        <div class="cookie-alert">veuillez acceptez les cookies
<br /><a href="cookiesac.php">WALLAH</a>            
        </div>
    </div>

<?php } ?>
<script src="../jq//jquery-3.6.0.min.js/"></script>

</body>

<style>


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
        color: turquoise;
        padding: 25px;
        border-radius: 25px;
        background-color: black;
      
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
</script>

<?php
include '../acceuil/footer.php'
?>
</html>