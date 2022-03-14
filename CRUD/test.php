
<?php

session_start();


require_once('connect.php');

$sql = 'SELECT * FROM `liste`';

//je prepare la requete 

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);


require_once('close.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test crud</title>
</head>
<body>


<main> 
    <br>
    <div class="AR">
 
    <?php
                            foreach($result as $produit){

//recuperation  avec boucle foreach

                             ?>
                                 
    
  <div class="card">
  
    <a href=""><img src ="<?= $produit['photos'] ?>" ></a>
    <h1> <?= $produit['produit'] ?></h1>
    <p><?= $produit['prix'] ?>€</p>
    <p>STOCK : <?= $produit['nombre'] ?></p>
   
  
  </div>

  <?php
                            }
                            ?>
  
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
        background-image: url('../Images Bordel/garnet.jpg');
        background-repeat: no-repeat;
    }

.card {
  
  max-width: 300px;
  margin: auto;
  text-align: center;
  color: green;
  flex-wrap: wrap;
  background-color: black;
  margin: 50px;
  box-shadow: 2px 2px green;
  animation: animer  1s ease-in infinite 1s;
}

@keyframes animer{
  10%{
box-shadow: 2px 2px green;
  }
  20%{
    box-shadow: 3px 3px green;
  }
  40%{
box-shadow: 5px 5px green;
  }
  60%{
box-shadow: 2px 2px green;
  }
}


.card img{
  height: 300px;
  width: 300px;
  
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



button h2{
  color: black;
}




</style>





</style>





</main>
</body>
</html>



