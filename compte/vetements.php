<?php
require '../nourriture/db.class.php';



?>

<?php
$db = new DB();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vetements</title>
</head>
<body>
<?php

include './header.php';
?>

<?php
include './nav.php';


?>

<main> 
    <br>
    <div class="AR">
    <?php $vetement= $db->query('SELECT * FROM vetement'); ?>

  
<?php foreach ($vetement as $product): ?>
    
  <div class="card">
  
    <a href="<?=$product->lien ?>"><img src ="<?=$product->image ?>" style="width:50%"></a>
    <h1> <?= $product->articles ?> </h1>
    <p class="price"> <?= number_format($product->prix,2,',',''); ?>€</p>
    <a href="../bon de commande/commande.php"><p><button><h2>commander</h2></button></p></a>
  </div>


  <?php endforeach ?>
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
  margin: 50px;
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
  font-family: algerian;
}
.card button:hover {
  opacity: 0.7;
  background-color: orangered;
}

.card img{
 transition: 2s ease-in-out; 
}
.card img:hover{
  transform: rotateY(180deg);
}


.card button:hover {
  opacity: 0.7;
  background-color: orangered;
}

.card img{
 transition: 2s ease-in-out; 
}
.card img:hover{
  transform: rotateY(180deg);
}

.card h1:hover{
  color: black;
}

button h2{
  color: black;
}


</style>


<?php
include './footer.php';
?>

</html>