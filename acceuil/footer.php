<body>
    <footer>
        
        <div class="wrapper">
        <img src="../Images/Footer.png" height="250px" width="1536px">
        <div class="gauche">
            <h1>Paiement</h1>
            <img src="../Images/VISA.png" alt="">
            <img src="../Images/MASTERCARD.png" alt="">
        </div>
        <div class="milieu">
            <h1>Nous suivre</h1>
            <img src="../Images/FACEBOOK.png" alt="">
            <img src="../Images/TWITTER.png" alt="">
            <img src="../Images/INSTAGRAM.png" alt="">
            <img src="../Images/YOUTUBE.png" alt="">
        </div>
        <div class="droite">
            <h1>Contact</h1>
            <p>A propos</p>
            <p>Mentions Légales</p>
        </div>
        </div>
        
    </footer>
</body>

<style>
    *{
        margin: 0;
    }

    footer{
        flex-wrap: wrap;
        color: #00B2FE;
        font-family: 'Arabela';
        text-align: center;
    }

    .wrapper {
  display: flex;
  flex-wrap: wrap;
  min-height: 100px;
  position: absolute;
}

.gauche {
  background-color: black;
  order: 0;
}

.milieu {
  background-color: black;
  order: 1;
}

.droite {
  background-color: black;
  order: 2;
}

.gauche,
.milieu,
.droite {
  flex: 1; 
}

@media only screen and (max-width: 768px) {
  .milieu {
    width: 100%;
    order: 0;
  }
  .gauche {
    width: 50%;
  }
  .droite {
    width: 50%;
  }
  .gauche,
  .milieu,
  .droite {
    flex: none;
  }
}
</style>