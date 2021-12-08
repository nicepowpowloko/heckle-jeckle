<title>Boucle d'oreilles</title>
<body>
  <?php
  include '../acceuil/en-tête.php';
  ?>
  <?php
  include '../acceuil/nav.php';
  ?>
  <main>
	  <h1>Boucle d'oreille en argent sterling 925 avec boucles d'oreilles en perles d'eau douce naturelles 6mm pour les femmes de MetJakt Fine Jewelry</h1>
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
    ♥ Perle d'eau douce naturelle authentique ♥ - Chaque perle est un peu différente, car ils sont naturels. ♥ ELABORER LE DESIGN ♥ - Très noble et à la mode. Boucles d'oreilles simples mais personnalisées. Strikingly surprise surprise! Style de mode classique. Rempli de personnalité.
	<br><br>
    ♥ HAUTE QUALITÉ ♥ - le mental des boucles d'oreilles: 925 Sterling Silver. Chaque boucle d'oreille est fixée avec le ruban de qualité supérieure "925".
	<br><br>
    ♥ Idéal cadeau de choix ♥ Il est livré dans une jolie boîte cadeau. Il est magnifique à porter et super comme un cadeau, convient à tous les groupes d'âge. Cadeau idéal pour vous, pour petite amie, pour les amis proches, pour la fille, pour la mère, pour les enseignants, pour la mariée, la Saint-Valentin, Anniversaire, Anniversaire, Mariage, Occasions Spéciales, Fête des Mères, Noël, remise des diplômes. Un cadeau parfait pour celui qui est chéri. "Je t'aimerai jusqu'à la fin des temps."
	<br><br>
    ♥ MetJakt Fournir de haute qualité Ne pas besoin de prendre soin de vos bijoux ♥ Silver Polishing Cloth: ils effectuent des miracles sur les bijoux. Frottez ensuite avec un chiffon en coton doux propre et sec pour redonner de l'éclat. Vous pouvez même porter vos bijoux dans l'eau comme la douche, la piscine ou la plage. Ou les parfums et les lotions ne peuvent pas causer d'usure.
	<br><br>
    ♥ GARANTIE DE REMBOURSEMENT DE 30 JOURS ♥ - Les bijoux de MetJakt que nous vendons sont caractéristiques de qualité supérieure, de prix favorable et de conception exquise. Pour garantir votre entière satisfaction, nous offrons à nos clients une politique de retour de 30 jours. N'hésitez pas à contacter notre service clientèle à tout moment si vous vous sentez insatisfait ou confus.

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
		'https://m.media-amazon.com/images/I/61MU94Lo9wL._AC_UY575_.jpg',
		'https://m.media-amazon.com/images/I/61YNnFDzCtL._AC_UY395_.jpg',
		'https://m.media-amazon.com/images/I/61WLa6VVA4L._AC_UY395_.jpg',
		'https://m.media-amazon.com/images/I/716DSISIM+L._AC_UY395_.jpg',
		'https://m.media-amazon.com/images/I/71wSNO67FsL._AC_UY395_.jpg',
		'https://m.media-amazon.com/images/I/61a7w9vao7L._AC_UY395_.jpg',
		'https://m.media-amazon.com/images/I/71NFKGHaWlL._AC_UY395_.jpg',
		
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