<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimentations</title>
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
    <a href="../Article/Couscous.php"><img src="../IMAGES/ARTICLES/Couscous 1.jpg" style="width:50%"></a>
    <h1>Couscous</h1>
    <p class="price">3.20€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <a href="../Article/Massala.php"><img src="../IMAGES/ARTICLES/Masala 1.jpg" style="width:50%"></a>
    <h1>Masala</h1>
    <p class="price">2.80€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <a href="../Article/Dattes.php"><img src="../IMAGES/ARTICLES/Dattes 1.jpg" style="width:50%"></a>
    <h1>Dattes</h1>
    <p class="price">4.50€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
</div>
<br>
<div class="AR">
  <div class="card">
      <a href="../Article/Café.php"><img src="../IMAGES/ARTICLES/Café 1.jpg" style="width:50%"></a>
      <h1>Café</h1>
      <p class="price">4.80€</p>
      <p><button>Ajoutez au panier</button></p>
    </div>
    <div class="card">
      <a href="../Article/Thé.php"><img src="../IMAGES/ARTICLES/Thé 1.jpg" style="width:50%"></a>
      <h1>Thé</h1>
      <p class="price">4.76€</p>
      <p><button>Ajoutez au panier</button></p>
    </div>
    <div class="card">
      <a href="../Article/Harissa.php"><img src="../IMAGES/ARTICLES/Harissa 1.jpg" style="width:50%"></a>
      <h1>Harissa</h1>
      <p class="price">3.30€</p>
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

    .AR{
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
}

    main{
        background-image: url('../Images/Background.jpg');
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