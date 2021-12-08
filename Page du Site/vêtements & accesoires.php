<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vêtements & Accessoires</title>
</head>
<body>
<?php
include '../acceuil/en-tête.php'
?>
<?php
include '../acceuil/nav.php'
?>

<main>
  <br>
<div class="AR">
  <div class="card">
    <img src="../IMAGES/ARTICLES/Turban 1.jpg" style="width:50%">
    <h1>Turban</h1>
    <p class="price">24.90€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <img src="../IMAGES/ARTICLES/Danseuse 1.jpg" style="width:50%">
    <h1>Costumes Danse Orientale</h1>
    <p class="price">128.34€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <a href="../Article/Babouche.php"><img src="../IMAGES/ARTICLES/Babouche 1.jpg" style="width:50%"></a>
    <h1>Babouche</h1>
    <p class="price">45.26€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
</div>
<br>
<div class="AR">
  <div class="card">
    <img src="../IMAGES/ARTICLES/Fatma 1.jpg" style="width:50%">
    <h1>Main de Fatma</h1>
    <p class="price">75.50€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <img src="../IMAGES/ARTICLES/Kaftan 1.jpg" style="width:50%">
    <h1>Kaftan</h1>
    <p class="price">65.80€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <a href="../Article/Boucle d'oreille.php"><img src="../IMAGES/ARTICLES/Boucle 1.jpg" style="width:50%"></a>
    <h1>Boucle d'oreille</h1>
    <p class="price">44.80€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
</div>
<br>
</main>

</body>

<style>
  *{
        margin: 0;
    }
    main{
        background: url('../Images/Background.jpg');
    }
    .AR{
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
}

.card {
  
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: 'Arabela';
  color: #00B2FE;
  flex-wrap: wrap;
  background-color: white;
}

.price {
  color: orangered;
  font-size: 22px;
}

.card button {
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

.card button:hover {
  opacity: 0.7;
  background-color: orangered;
}
</style>

<?php
include '../acceuil/footer.php'
?>
</html>