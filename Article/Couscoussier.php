<title>Couscoussier</title>
<body>
  <?php
  include '../acceuil/en-tête.php';
  ?>
  <?php
  include '../acceuil/nav.php';
  ?>
  <main>
<h1>Couscoussier de cuisson - Petit Modèle - Marocain Turquoise </h1>
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
             
            
             
              
      </div>
  </div>
  
  <div class="controls">
      <button class="move-btn left">&larr;</button>
      <button class="move-btn right">&rarr;</button>
  </div>
  
</div>

<div class="description">
    <p> À propos de cet article
    <br>
    Ce couscoussier pour 4 à 6 personnes spécialement conçu pour la cuisson sur le feu et l'idéal.
	<br>
	Couscoussier pour réaliser vos couscous. Il peut s'assortir avec les assiettes creuses Tebsis, disponibles dans la boutique.
	<br>
	Couscoussier 4/6 pers composé de 2 pièces + couvercleRécipient à sauce + récipient à semoule- Hauteur totale : 34 cm- Contenance 3 L
	<br>
	Conseils de nos spécialistes : - avant la 1ère utilisation mettre la base dans l'eau entre 6 et 8 heures puis laisser sécher
	<br>
    • Fabrication artisanale
	<br>
    • Décoré à la main
	<br>
    • Idéal pour un cadeau
	<br>
    • Articles coordonnés et autres coloris disponibles
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
		'https://m.media-amazon.com/images/I/51cHW3Cfl3L._AC_.jpg',
		'https://m.media-amazon.com/images/I/519MxaD2zML._AC_.jpg',
		'https://m.media-amazon.com/images/I/51fJE7bkINL._AC_.jpg',
		'https://m.media-amazon.com/images/I/51wgEGLH2fL._AC_.jpg',
		'https://m.media-amazon.com/images/I/51cjU7fQcaL._AC_.jpg',
		
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