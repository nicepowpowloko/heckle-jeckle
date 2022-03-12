<body>
    <footer>
        <div class="wrapper">
        <div class="gauche">
            <h1>Paiement</h1>
            <img src="../IMAGES/FOOTER/VISA.png" alt="">
            <img src="../IMAGES/FOOTER/MASTERCARD.png" alt="">
        </div>
        <div class="milieu">
            <h1>Nous suivres</h1>
            <img src="../IMAGES/FOOTER/FACEBOOK.png" alt="">
            <img src="../IMAGES/FOOTER/TWITTER.png" alt="">
            <img src="../IMAGES/FOOTER/INSTAGRAM.png" alt="">
            <img src="../IMAGES/FOOTER/YOUTUBE.png" alt="">
        </div>
        <div class="droite">
            <h1>Notre societé</h1>
            <a href="../formulaire/formulaire.php"><p>Contact</p></a>
            <a href="../acceuil/mentions-legales.php"><p>Mentions légales</p></a>
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

    a{
      text-decoration: none;
    }

  .wrapper {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  min-height: 100px;
  background-color: black;
}

.gauche {
  order: 0;
}

.milieu {
  order: 1;
}

.droite {
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