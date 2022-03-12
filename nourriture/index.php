<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nourriture</title>
</head>
<body>

<?php
include '../compte/header.php';
include '../acceuil/nav.php';

?>
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
    <title>nourriture</title>
</head>
<body>


<main> 
    <br>
    <div class="AR">
    <?php $nourriture2= $db->query('SELECT * FROM nourriture2'); ?>

  
<?php foreach ($nourriture2 as $product): ?>
    
  <div class="card">
  
    <a href="<?=$product->lien ?>"><img src ="<?=$product->image ?>" style="width:50%"></a>
    <h1> <?= $product->articles ?> </h1>
    <p class="price"> <?= number_format($product->prix,2,',',''); ?>€</p>
    <a href="../bon de commande/commande.php"><button><h2 data-text="commander">commander</h2></button></a>
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
  box-shadow: 2px 2px orangered;
}

.price {
  color: orangered;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: black;
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

.card h1:hover{
  color: black;
}

h2{
	color: black;
	position: relative;
	text-transform: uppercase;
	-webkit-text-stroke: 0.3vw #f7f7fe;
}

 h2::before {
	top: 0;
	left: 0;
	width: 0;
	height: 100%;
	color: blue;
	overflow: hidden;
	position: absolute;
	content: attr(data-text);
	border-right: 2px solid #37b9f1;
	-webkit-text-stroke: 0vw #f7f7fe;
	animation: animate 6s linear infinite;
}

@keyframes animate {
	0%,
	10%,
	100% {
		width: 0;
	}

	70%,
	90% {
		width: 100%;
	}
}

</style>

</main>
</body>


<?php
include '../acceuil/footer.php';

?>

<script>


</script>

</html>


