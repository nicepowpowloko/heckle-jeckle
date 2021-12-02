<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tapis de prière</title>
</head>
<body>
<?php
include '../acceuil/en-tête.php';
?>
<?php
include '../acceuil/nav.php';
?>

<main>
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
  

  <div id="simpleModal" class="modal">
    <div class="modal-content">
      <span class="closeBtn">&times;</span>
      <!-- Swiper modal -->
      <div id="swiper-container-modal" class="swiper-container-modal">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide-modal">
            <div class="swiper-zoom-container">
              <img class="swiper-lazy swiper-lazy-modal" data-src="../Images/Article Tapis 1.png">
            </div>
          </div>
          <div class="swiper-slide swiper-slide-modal">
            <div class="swiper-zoom-container">
              <img class="swiper-lazy swiper-lazy-modal" data-src="../Images/Article Tapis 2.png">
            </div>
          </div>
          <div class="swiper-slide swiper-slide-modal">
            <div class="swiper-zoom-container">
              <img class="swiper-lazy swiper-lazy-modal" data-src="../Images/Article Tapis 3.png">
            </div>
          </div>
          <div class="swiper-slide swiper-slide-modal">
            <div class="swiper-zoom-container">
              <img class="swiper-lazy swiper-lazy-modal" data-src="../Images/Article Tapis 4.png">
            </div>
          </div>
          <div class="swiper-slide swiper-slide-modal">
            <div class="swiper-zoom-container">
              <img class="swiper-lazy swiper-lazy-modal" data-src="../Images/Article Tapis 5.png">
            </div>
          </div>
          <div class="swiper-slide swiper-slide-modal">
            <div class="swiper-zoom-container">
              <img class="swiper-lazy swiper-lazy-modal" data-src="../Images/Article Tapis 6.png">
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div id="swiper-pagination-modal" class="swiper-pagination"></div>
        <!-- Add Pagination -->
        <div id="swiper-button-next-modal" class="swiper-button-next"></div>
        <div id="swiper-button-prev-modal" class="swiper-button-prev"></div>
      </div>
    </div>
  </div>

  <!-- Swiper -->
  <div class="swiper swiper-container-main">
    <div class="swiper-wrapper">
      <div class="swiper-slide minimum-height"><img class="swiper-slide-img" src="../Images/Article Tapis 1.png"></div>
      <div class="swiper-slide minimum-height"><img class="swiper-slide-img" src="../Images/Article Tapis 2.png"></div>
      <div class="swiper-slide minimum-height"><img class="swiper-slide-img" src="../Images/Article Tapis 3.png"></div>
      <div class="swiper-slide minimum-height"><img class="swiper-slide-img" src="../Images/Article Tapis 4.png"></div>
      <div class="swiper-slide minimum-height"><img class="swiper-slide-img" src="../Images/Article Tapis 5.png"></div>
      <div class="swiper-slide minimum-height"><img class="swiper-slide-img" src="../Images/Article Tapis 6.png"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Pagination -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

      <!-- Swiper thumbnails -->
<div class="swiper gallery-thumbs">
	<div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide-thumbs">     
	 	<img src="../Images/Article Tapis 1.png">  
            </div>
            <div class="swiper-slide swiper-slide-thumbs">     
	 	<img src="../Images/Article Tapis 2.png">  
            </div>
            <div class="swiper-slide swiper-slide-thumbs">     
	 	<img src="../Images/Article Tapis 3.png">  
            </div>
            <div class="swiper-slide swiper-slide-thumbs">     
	 	<img src="../Images/Article Tapis 4.png">  
            </div>
            <div class="swiper-slide swiper-slide-thumbs">     
	 	<img src="../Images/Article Tapis 5.png">  
            </div> 
            <div class="swiper-slide swiper-slide-thumbs">     
	 	<img src="../Images/Article Tapis 6.png">  
 	</div>
</div>	

	<h1>Description</h1>
	<p>Taille: Taille unique
	<br>
	Dimensions du produit: 32L x 10W centimètres
	<br>
	Couleur: Bleu
	<br>
	Motif: Cachemire
	<br>
	Matériau: Cachemire
	<br>
	Forme: Rectangulaire
	<br>
	Poids de l'article: 0.01 Kilogrammes
	<br>
	Marque: Nakw88
	<br>
	Caractéristique spéciale: Anti dérapant</p>


<p><button>Acheter</button></p>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
</body>
</main>

<style>
* {
  box-sizing: border-box;
}

body {
  
  font-family: 'Arabela';
  font-size: 16px;
  background-image: url('../Images/Background.jpg');
  margin: 0;
  padding: 0;
}



/* ................................................ swiper gallery .......................................................... */

.swiper {
  width: 500px;
  min-width: 300px;
  height: auto;
  padding-bottom: 15px;
}

.swiper-slide-img {
  height: auto;
  width: 100%;
  border: 30px solid transparent;  /* move next and prev buttons off img */ 
  min-height: 353px;
  
}

.swiper-slide-img:hover {
  cursor: pointer;
}

.gallery-thumbs .swiper-slide img:hover, .swiper-slide img:hover  {
    cursor: pointer;
 
}

.swiper-pagination {
  background-color: #d8d8d8;
  padding: 10px;
}

.swiper-button-prev {
  position: absolute;
  transform: translateX(-40%);
  color: black;
}

.swiper-button-prev:focus {
  outline: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.swiper-button-next {
  position: absolute;
  transform: translateX(40%);
  color: black;
  font-weight: 900;
}

.swiper-button-next:focus {
  outline: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.swiper-pagination {
  background: linear-gradient(to bottom right, #c2c2f0, #8585e0);
  border-radius: 10px;
}

/*active pagination*/
.swiper-pagination .swiper-pagination-bullet-active {
  background-color: rgb(255, 255, 255);
}

/*other pagination*/
.swiper-pagination .swiper-pagination-bullet {
  height: 15px;
  width: 15px;
}

.swiper-pagination .swiper-pagination-bullet:hover {
  transform: scale(1.2);
  transition: all 0.5s;
}

.swiper-pagination .swiper-pagination-bullet:focus {
    outline: none;
    background-color: rgb(255, 255, 255);
    -webkit-tap-highlight-color: rgb(248, 248, 248);
}

.minimum-height { 
    min-height: 257px;

    @include small-screen {
        min-height: calc((0.3002 * 100vw) + 21.49px);
    }
}

/* ................................................ thumbs .......................................................... */

.gallery-thumbs {
    padding: 0;
    margin-top: 0;
    margin-bottom: 40px;
}

.gallery-thumbs .swiper-slide {
    width: 25%;
    opacity: 0.8    ;
}

.gallery-thumbs .swiper-slide-thumb-active {
    opacity: 1;
}
  
.gallery-thumbs .swiper-slide img {
    width: 100%;
    height: 70px;
    min-height: 40px;
    object-fit: cover;
}



/* ................................................ modal .......................................................... */
.modal {
  display:none;
  position: fixed;
  z-index: 2;
  left: 0;
  top: 0;
  height: 100vh;
  width: 100vw;
}

.modal-content {
  background-color: rgb(0, 0, 0);
  padding: 0;
  height: 100%;
  width: 100%;
  min-width: 300px;
  animation-name: modalOpen;
  animation-duration: 1s;
}

.closeBtn {
  position: absolute;  /* removed from normal flow of doc, positioned relative to its nearest ancestor (modal content)*/
  z-index: 4;
  color:white;
  right: 5px;
  font-size: 30px;
}

 .closeBtn:hover,.closeBtn:focus {
  color: rgb(114, 114, 114);
  text-decoration: none;
  cursor: pointer;
}

@keyframes modalOpen {
  from{opacity: 0}
  to {opacity: 1}
}

/* ............................................. modal swiper gallery ....................................................... */
/* used ids higher specificity to override gallery styles */

#swiper-container-modal {
  z-index:3;
  width:100%;
  height:100%;
  overflow:hidden;
  padding:0;
  border:0;
}

#swiper-pagination-modal {
  display:none; /* if pagination not included in modal... index.html pagination buttons dnt change (black for active slide)*/
}

#swiper-button-next-modal {
  transform:translateX(-40%);
  color: white;
}

#swiper-button-prev-modal {
  transform:translateX(40%);
  color: white;
}

.swiper-slide-modal {
  height: 100vh;
}

.swiper-lazy-modal {
  object-fit: contain;
  border:0;  
}
/* ............................................. responsiveness ....................................................... */
@media all and (max-width: 520px) {
  .swiper {
    width: calc(100vw - 20px);
  }

  .swiper-button-next:after {
    font-size: 20px !important;
    transform:translateX(60%);
  }
  
  

  .swiper-button-prev:after {
    font-size: 20px !important;
    transform:translateX(-60%);
  }

  #swiper-button-next-modal {
    font-size: 20px !important;
    transform:translateX(20%);
  }
  
  #swiper-button-prev-modal {
    font-size: 20px !important;
    transform:translateX(-20%);
  }

  .swiper-pagination {
    padding: 4px;
  }

  .swiper-slide-img {
    width: calc(100vw-32px);
    height: auto;
    border: 16px solid #d8d8d8;  /* move next and prev buttons off img */ 
    min-height: calc((0.5338 * 100vw) + 48.476px); 
  }

  .swiper-pagination .swiper-pagination-bullet {
    height: 12px;
    width: 12px;
  }

.gallery-thumbs .swiper-slide img {
        height: 14vw;
    }

}


@media all and (max-width: 360px) {
  .swiper-slide-img {
    border: 1px solid #d8d8d8; 
  }
}

button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #00B2FE;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover {
  opacity: 0.7;
  background-color: orangered;
}

</style>

<script>
 <!-- Initialize Swiper -->
var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  loop: true,
  //autoHeight: true, //enable auto height
  // Enable lazy loading
  preloadImages: false,
  lazy: true,
  lazy: {
    loadPrevNext: true,
  },
});


var swiper = new Swiper('.swiper-container-main', {
  autoHeight: true, //enable auto height

  //runCallbacksOnInit: true,
  observer: true,
  observeParents: true,
  observeChildren: true,
  spaceBetween: 0,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  preloadImages: false,
  // Enable lazy loading
  lazy: true,
  lazy: {
    loadPrevNext: true,
  },

  keyboard: {
    enabled: true,
  },

  effect: 'coverflow',
  coverflowEffect: {
    rotate: 60,
    slideShadows: false,
  },
  loop: true,
  thumbs: {
    swiper: galleryThumbs
  }

});

// swiper - modal
var swiperModal = new Swiper('.swiper-container-modal', {
  observer: true,
  observeParents: true,
  observeChildren: true,
  spaceBetween: 0,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  zoom: {
    maxRatio: 2,
    toggle: true,  // enable zoom-in by double tapping slide
  },
  loop: true,
  preloadImages: false,
  // Enable lazy loading
  lazy: true,
  lazy: {
    loadPrevNext: true,
    //loadOnTransitionStart: true,
  },


  effect: 'coverflow',
  coverflowEffect: {
    rotate: 60,
    slideShadows: false,
  },
  loop: true,


});


// Create a Modal With HTML, CSS & JavaScript (https://www.youtube.com/watch?v=6ophW7Ask_0)
const nonModalGalleryImgContainer = document.querySelector(
  '.swiper-container-main'
);
const nonModalGalleryImgWrapper = nonModalGalleryImgContainer.querySelector(
  '.swiper-wrapper'
);
// Get modal element
var modal = document.getElementById('simpleModal');
// Get open modal button
var modalBtn = document.querySelectorAll('.swiper-slide-img'); // select all swiper-slides (outside modal)
// close button
var closeBtn = document.getElementsByClassName('closeBtn')[0]; // returns an array... just get first one (only one element with this class)

function openModal() {
  // prevent page scrolling when modal open: https://css-tricks.com/prevent-page-scrolling-when-a-modal-is-open/
  // When the modal is shown, we want a fixed body
  document.body.style.position = 'fixed'; // prevents scrolling
  document.body.style.top = `-${window.scrollY}px`; // subtract scroll top, add to body styles

  let swiperIndexPos = swiper.activeIndex;
  swiperModal.slideTo(swiperIndexPos);
  swiperModal.lazy.load(); // need to initailize lazy load if modal opened
  modal.style.display ='block';
  swiper.keyboard.disable();
  swiperModal.keyboard.enable();
  document.addEventListener('keydown', closeModalWithKeyboard);
}

modalBtn.forEach(element => { 
  element.addEventListener('click', openModal); // add an click event listener for each swiper-slide (outside the modal)
})

function openModalWithKeyboard(event) {
  if (event.key === 'Enter') {
    openModal();
  }
}

// open modal if non-modal image wrapper is in focus and enter is hit
nonModalGalleryImgContainer.addEventListener('keydown', openModalWithKeyboard);


function closeModal() {          
  // prevent page scrolling when modal open: https://css-tricks.com/prevent-page-scrolling-when-a-modal-is-open/
  // When the modal is hidden...
  const scrollY = document.body.style.top; // retrieve scroll location
  document.body.style.position = '';
  document.body.style.top = '';
  window.scrollTo(0, parseInt(scrollY || '0') * -1);

  let swiperModalIndexPos = swiperModal.activeIndex;
  swiper.slideTo(swiperModalIndexPos);
  modal.style.display = 'none';
  swiperModal.keyboard.disable();
  swiper.keyboard.enable();
  document.removeEventListener('keydown', closeModalWithKeyboard);
}

// Listen for close click
closeBtn.addEventListener('click', closeModal);

// close modal using Escape key 
function closeModalWithKeyboard(event) {
  if (event.key === 'Escape') {
    closeModal();
  }
}  
</script>

<?php
include '../acceuil/footer.php';
?>
</body>
</html>