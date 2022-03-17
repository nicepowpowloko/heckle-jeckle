

<?php
session_start();

if(!isset($_SESSION['auth'])){
header('location:./login.php');
exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuill inventaire</title>
</head>


<style>
    *{
        margin: 0;
    }

    body{
        background-image: url('../Images Bordel/stock.webp');
        background-size: cover;
        background-repeat: no-repeat;  
    }

.button{
        display: flex;
        justify-content: space-around;
     flex-wrap: wrap;
}

.button button{
    border: 2px darkolivegreen solid ;
    padding: 30px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 15px;
    box-shadow: 5px 5px 5px darkolivegreen;
}

button:hover{
    background-color: darkgoldenrod;
    box-shadow: 5px 5px 5px black;
   
}

.compte{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 10vh;
    background-color: darkolivegreen;
    border: 4px black dashed;
    padding: 10px;
}

.retour{
    display: flex;
    flex-wrap: wrap;
    justify-content: right;
    margin-top: 10vh;
}

.retour img{
    height: 40px;
    width: 40px;   
}
</style>



<body>

<div class="retour">
    <a href="../compte/utilisateur.php"><img src="../Images Bordel/fleche retour.png" alt=""></a>
</div>


<h1 class="compte">BIENVENUE DANS TON GESTIONNAIRE DE STOCK : <?php echo $_SESSION['auth']->prenom; ?> </h1>
<br>
<br>
<br>
<div class="button">
    <a href="./index.php"><button>NOURRITURE</button></a>
    <a href="../CRUD-VETEMENT/index.php"><button>VÉTEMENTS & ACCS</button></a>
    <a href="../CRUD-DIVERS/index.php"><button>DIVERS</button></a>
</div>

