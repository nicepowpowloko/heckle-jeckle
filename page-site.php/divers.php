<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divers</title>
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
    <a href="../Article/Chicha.php"><img src="../IMAGES/ARTICLES/Chicha 1.jpg" style="width:50%"></a>
    <h1>Chicha</h1>
    <p class="price">65.30€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <a href="../Article/Tapis.php"><img src="../IMAGES/ARTICLES/Tapis 1.jpg" style="width:50%"></a>
    <h1>Tapis</h1>
    <p class="price">56.20€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <a href="../Article/Lampe.php"><img src="../IMAGES/ARTICLES/Lampe 1.jpg" style="width:50%"></a>
    <h1>Lampe</h1>
    <p class="price">920.50€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
</div>
<br>
<div class="AR">
  <div class="card">
      <a href="../Article/Ensemble de Thé.php"><img src="../IMAGES/ARTICLES/Ensemble Thé 1.jpg" style="width:50%"></a>
      <h1>Ensemble de thé</h1>
      <p class="price">42.96€</p>
      <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <a href="../Article/Couscoussier.php"><img src="../IMAGES/ARTICLES/Couscoussier 1.jpg" style="width:50%"></a>
    <h1>Couscoussier</h1>
    <p class="price">80.50€</p>
    <p><button>Ajoutez au panier</button></p>
  </div>
  <div class="card">
    <a href="../Article/Service de Table.php"><img src="../IMAGES/ARTICLES/Service de Table 1.jpg" style="width:50%"></a>
    <h1>Service de Table</h1>
    <p class="price">150.80€</p>
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