<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicha</title>
</head>
<body>
<?php
include '../acceuil/en-tête.php';
?>
<?php
include '../acceuil/nav.php';
?>

<main>

<div class="container">

<div class="mySlides">
    <img src="../IMAGES/ARTICLES/GALLERY/Chicha 1.jpg" style="width:30%">
</div>

<div class="mySlides">
    <img src="../IMAGES/ARTICLES/GALLERY/Chicha 2.jpg" style="width:30%">
</div>

<div class="mySlides">
    <img src="../IMAGES/ARTICLES/GALLERY/Chicha 3.jpg" style="width:30%">
</div>

<div class="mySlides">
    <img src="../IMAGES/ARTICLES/GALLERY/Chicha 4.jpg" style="width:30%">
</div>

<div class="mySlides">
    <img src="../IMAGES/ARTICLES/GALLERY/Chicha 5.jpg" style="width:30%">
</div>

<div class="mySlides">
    <img src="../IMAGES/ARTICLES/GALLERY/Chicha 6.jpg" style="width:30%">
</div>




<div class="caption-container">
  <p id="caption"></p>
</div>


<div class="row">
  <div class="column">
    <img class="demo cursor" src="../IMAGES/ARTICLES/GALLERY/Chicha 1.jpg" style="width:100%" onclick="currentSlide(1)">
  </div>
  <div class="column">
    <img class="demo cursor" src="../IMAGES/ARTICLES/GALLERY/Chicha 2.jpg" style="width:100%" onclick="currentSlide(2)">
  </div>
  <div class="column">
    <img class="demo cursor" src="../IMAGES/ARTICLES/GALLERY/Chicha 3.jpg" style="width:100%" onclick="currentSlide(3)">
  </div>
  <div class="column">
    <img class="demo cursor" src="../IMAGES/ARTICLES/GALLERY/Chicha 4.jpg" style="width:100%" onclick="currentSlide(4)">
  </div>
  <div class="column">
    <img class="demo cursor" src="../IMAGES/ARTICLES/GALLERY/Chicha 5.jpg" style="width:100%" onclick="currentSlide(5)">
  </div>
  <div class="column">
    <img class="demo cursor" src="../IMAGES/ARTICLES/GALLERY/Chicha 6.jpg" style="width:100%" onclick="currentSlide(6)">
  </div>
</div>
</div> 

<style>

body{
  background: url('../IMAGES/Background.jpg')
}

.container {
  position: relative;
}


.mySlides {
  display: none;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


.column {
  float: left;
  width: 16.66%;
}


.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
} 
</script>
</main>

<?php
include '../acceuil/footer.php';
?>
</body>
</html>