<nav>
        <div class="topnav">
            <a href="./acceuil.php">ACCUEIL</a>
            <a href="./nourriture.php">ALIMENTATION</a>
            <a href="./vetements.php">VETEMENTS & ACCESSOIRES</a>
            <a href='./divers.php'>DIVERS</a>
            <a href="./bon-commande.php">COMMANDEZ</a>
            <a href="./utilisateur.php">MON COMPTE</a>
            <a href="../acceuil/index.php"class="conn"><img src="../Images Bordel/barraca-arabe-logo-png-transparent.png" height="50px">DECONNEXION</a>
          </div> 
</nav>

<style>

    *{
        margin: 0;
    }
    .conn{
        display:flex;
        align-items:center;
        justify-content: space-between;
    }
    
    .topnav{
    background-color:#F0A224;
    overflow: hidden;
    justify-content: space-around;
    display: flex;
    font-family: 'Arabela';
    flex-wrap: wrap;
    align-items: center;
    border:3px solid #45A9FF;
}
  
.topnav a{
    float: left;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}
  
.topnav a:hover{
    background-color: #45A9FF;
    color: black;
    border-radius: 10px;
}
</style>