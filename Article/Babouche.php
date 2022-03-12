<title>Babouche</title>
<body>
  <?php
  include '../acceuil/en-tête.php';
  ?>
  <?php
  include '../acceuil/nav.php';
  ?>
  <main>
	  <h1>CHAUSSURES & CHAUSSONS EN CUIR pour Homme, Babouches Marocaines"Dambira", Mules confortable 100% cuir. Cadeau parfait pour lui. </h1>
  <div class="container">
	
  <div class="feature">
      <figure class="featured-item image-holder r-3-2 transition"></figure>
  </div>
  
  <div class="gallery-wrapper">
      <div class="gallery">
              <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2 active transition"></figure>
              </div>
              <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2 transition"></figure>
              </div>
              <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2 transition"></figure>
              </div>
              <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2 transition"></figure>
              </div>
              <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2"></figure>
              </div>
              <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2"></figure>
              </div>
              <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2"></figure>
              </div>
              <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2"></figure>
              </div>
              <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2"></figure>
              </div>
            
             
              
      </div>
  </div>
  
  <div class="controls">
      <button class="move-btn left">&larr;</button>
      <button class="move-btn right">&rarr;</button>
  </div>
  
</div>
<br>

<div class="description">
    <p> À propos de cet article
    <br>
    Cette babouche tout terrain devient rapidement très souple et se porte partout, et avec tout.
En extérieur ou à la maison, vous ne voudrez plus les quitter.
<br><br>
Très confortables, ces babouches sont destinées à tous les usages.
Fabriquées en cuir naturel et équipées d'une semelle en élastomère très résistante, ces mules allient robustesse et bien-être en toutes occasions.
Comptez 2 ou 3 jours d'utilisation pour les assouplir correctement.
<br><br>
Pour vos commandes, choisissez toujours votre pointure habituelle en chaussures de ville de préférence.
<br><br>
Les chaussures en cuir sont tannées de manière végétale de façon 100% naturelle.
Aucun additif toxique n'a été ajouté, il n'y a donc aucune crainte d'allergies.
Comme tous nos produits sont faits à la main, il peut y avoir de légères variations dans la conception des chaussures.
<br><br>
La livraison est mondiale par FEDEX express et recommandé.
Pour chaque envoi, un numéro de suivi sera envoyé immédiatement.
Vous le trouverez également sur Amazon et pourrez suivre votre envoi à tout moment.
<br><br>
Pour vos demandes de vente en gros ou de fabrication personnalisée pour les mariages et les événements, veuillez me contacter par message à tout moment, je serai heureuse de vous aider.
Avec tous mes remerciements
<br>
Sabrina.
<br><br>
	Extérieur Cuir
	<br>
    Intérieur croûte de cuir
	<br>
    Renfort Talon
	<br>
    Semelle épaisse en élastomère collée et cousue.
	<br>
    Livraison Express Offerte

    </p>
</div>

<br>

<?php
include '../acceuil/footer.php';
?>
<style>
  *,
*::before,
*::after {
	margin: 0;
	padding: 0;
	outline: none;
	box-sizing: border-box;
}

main{
  background: url('../IMAGES/Background.jpg');
}

body {
	margin: 0;
	font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
	color: black;
}

h1{
    text-align: center;
    font-family: 'Algerian';
}

.description {
    text-align: center;
    font-family: 'Arabolical';
    font-size: 15px;
    border: 2px solid black;
    background-color: white;
    border-radius: 25px;
}

.container {
	margin: 0 auto;
	max-width: 700px;
	max-height: 100vh;
}


/* Useful Classes */
.xy-center {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.transition {
	transition: all 350ms ease-in-out;
}

.r-3-2 {
	width: 100%;
	padding-bottom: 66.667%;
}

.image-holder {
	background-size: contain;
	background-position: center center;
	background-repeat: no-repeat;
	height: 200px;
}

/* Main Styles */
.gallery-wrapper {
	position: relative;
	overflow: hidden;
}

.gallery {
	position: relative;
	white-space: nowrap;
	font-size: 0;
}

.item-wrapper {
	cursor: pointer;
	width: 23%; /* arbitrary value */
	display: inline-block;
	background-color: white;
}

.gallery-item { opacity: 0.5; }
.gallery-item.active { opacity: 1; }

.controls {
	font-size: 0;
	border-top: none;
}
.move-btn {
	display: inline-block;
	width: 50%;
	border: none;
  color: black;
	background-color: transparent;
	padding: 0.2em 1.5em;
}
.move-btn:first-child {border-right: none;}
.move-btn.left  { cursor: w-resize; }
.move-btn.right { cursor: e-resize; }
</style>

<script>
  var gallery = document.querySelector('.gallery');
var galleryItems = document.querySelectorAll('.gallery-item');
var numOfItems = gallery.children.length;
var itemWidth = 23; // percent: as set in css

var featured = document.querySelector('.featured-item');

var leftBtn = document.querySelector('.move-btn.left');
var rightBtn = document.querySelector('.move-btn.right');
var leftInterval;
var rightInterval;

var scrollRate = 0.2;
var left;

function selectItem(e) {
	if (e.target.classList.contains('active')) return;
	
	featured.style.backgroundImage = e.target.style.backgroundImage;
	
	for (var i = 0; i < galleryItems.length; i++) {
		if (galleryItems[i].classList.contains('active'))
			galleryItems[i].classList.remove('active');
	}
	
	e.target.classList.add('active');
}

function galleryWrapLeft() {
	var first = gallery.children[0];
	gallery.removeChild(first);
	gallery.style.left = -itemWidth + '%';
	gallery.appendChild(first);
	gallery.style.left = '0%';
}

function galleryWrapRight() {
	var last = gallery.children[gallery.children.length - 1];
	gallery.removeChild(last);
	gallery.insertBefore(last, gallery.children[0]);
	gallery.style.left = '-23%';
}

function moveLeft() {
	left = left || 0;

	leftInterval = setInterval(function() {
		gallery.style.left = left + '%';

		if (left > -itemWidth) {
			left -= scrollRate;
		} else {
			left = 0;
			galleryWrapLeft();
		}
	}, 1);
}

function moveRight() {
	//Make sure there is element to the leftd
	if (left > -itemWidth && left < 0) {
		left = left  - itemWidth;
		
		var last = gallery.children[gallery.children.length - 1];
		gallery.removeChild(last);
		gallery.style.left = left + '%';
		gallery.insertBefore(last, gallery.children[0]);	
	}
	
	left = left || 0;

	leftInterval = setInterval(function() {
		gallery.style.left = left + '%';

		if (left < 0) {
			left += scrollRate;
		} else {
			left = -itemWidth;
			galleryWrapRight();
		}
	}, 1);
}

function stopMovement() {
	clearInterval(leftInterval);
	clearInterval(rightInterval);
}

leftBtn.addEventListener('mouseenter', moveLeft);
leftBtn.addEventListener('mouseleave', stopMovement);
rightBtn.addEventListener('mouseenter', moveRight);
rightBtn.addEventListener('mouseleave', stopMovement);


//Start this baby up
(function init() {
	var images = [
		'https://m.media-amazon.com/images/I/41UL8cSrijL.jpg',
		'https://m.media-amazon.com/images/I/516V6w+dfVL.jpg',
		'https://m.media-amazon.com/images/I/41kWgOy1UvL.jpg',
		'https://m.media-amazon.com/images/I/41tCd7kCAxL.jpg',
		'https://m.media-amazon.com/images/I/4155knxoO5L.jpg',
		'https://m.media-amazon.com/images/I/51ZPqoFYYAL.jpg',
		'https://m.media-amazon.com/images/I/41ossR6A+uL.jpg',
		'https://m.media-amazon.com/images/I/414i3kzFPJL.jpg',
		'https://m.media-amazon.com/images/I/51Gk-foDAxL.jpg',
		
	];
	
	//Set Initial Featured Image
	featured.style.backgroundImage = 'url(' + images[0] + ')';
	
	//Set Images for Gallery and Add Event Listeners
	for (var i = 0; i < galleryItems.length; i++) {
		galleryItems[i].style.backgroundImage = 'url(' + images[i] + ')';
		galleryItems[i].addEventListener('click', selectItem);
	}
})();
</script>
  </main>
</body>