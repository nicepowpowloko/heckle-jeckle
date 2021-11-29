<body>
    <footer>
        <div class="wrapper">
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
            <a href="../Page du Site/formulaire.php"><p>Formulaire</p></a>
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
      background:url('../Images/Footer.png');
      background-size:contain;
        flex-wrap: wrap;
        color: #00B2FE;
        font-family: 'Arabela';
        text-align: center;
        height: 250px; 
        width: 1519px;
        background-repeat: none;
    }

    a{
      text-decoration: none;
    }

  .wrapper {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  min-height: 100px;
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
  background-color: ;
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