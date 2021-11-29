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
<div class="card">
  <img src="../Images/Chicha.jpg" style="width:50%">
  <h1>Chicha</h1>
  <p class="price">65.30€</p>
  <p><button>Ajoutez au panier</button></p>
</div> 
<div class="card">
  <img src="../Images/Tapis.jpg" style="width:56.4%">
  <h1>Tapis</h1>
  <p class="price">56.20€</p>
  <p><button>Ajoutez au panier</button></p>
</div> 
<div class="card">
  <img src="../Images/Lampe Génie.jpg" style="width:82%">
  <h1>Lampe</h1>
  <p class="price">28.50€</p>
  <p><button>Ajoutez au panier</button></p>
</div> 
</main>

</body>

<style>
     *{
        margin: 0;
    }
    main{
        text-align: center;
        display: flex;
        flex-wrap: wrap;
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