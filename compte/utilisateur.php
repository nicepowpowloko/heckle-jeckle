


<?php
session_start();

if(!isset($_SESSION['auth'])){
header('location:./login.php');
exit();
}
include './header.php';
include './nav.php';


?>

<style>
    *{
        margin: 0;
       
    }
body{
    background-color:wheat;
    overflow: hidden;

}
    .compte{
        color: red;
        font-family:algerian;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 2vh;
    }

        .adresse{
            height: 20vh;
            width: 50vh;
            border: 5px solid black;
            position: fixed;
            flex-wrap: wrap;
            display: flex;
            justify-content: center;
            padding-top:2vh;
            margin-left: 3vh;
            font-family: algerian;
            box-shadow: 1px 1px 12px #F0A224;
            border-radius: 8px;
        }

        .banque{
            height: 20vh;
            width: 50vh;
            border: 5px solid black;
            position:fixed;
            flex-wrap: wrap;
            display: flex;
            justify-content: center;
            padding-top: 2vh;
           margin-left: 162vh;
            font-family: algerian;
            box-shadow: 1px 1px 12px #F0A224;
            border-radius: 8px;
        }

        .info{
            height: 20vh;
            width: 50vh;
            border: 5px solid black;
            position: fixed;
            flex-wrap: wrap;
            display: flex;
            justify-content: center;
            padding-top:2vh;
            margin-left: 80vh;
            font-family:algerian;
            margin-top: 10vh;
            box-shadow: 1px 1px 12px #F0A224;
            border-radius: 8px;
            
        }

        .img1{
            
            margin-left: 57vh;
            margin-top: 10vh;
            
        }

        .img2{
            margin-left: 61vh;
            margin-top: 10vh;
          
        }
    
        .inventaire{
            margin-left: 20vh;
            position: fixed;
            margin-top: -3vh;
          
        }
        .inventaire button{
            border-radius: 10px;
            padding: 10px;
            background-color:#F0A224;
            color: black;
            border:3px solid #45A9FF;
            font-family: algerian;

        }

    
</style>
<body>
    

<h1 class="compte">Bienvenue <?php echo $_SESSION['auth']->prenom; ?>! </h1>



<div class="adresse">
    <img src="../Images Bordel/maison.png" height="25px" alt="">
    <h2>MON CARNET D'ADRESSE</h2>
    <p>Thomas DARRAS<br>
    Appt 31 7 rue ARTHUR BECQUART<br>
    62600 BERCK-SUR-MERS<br></p>
</div>

<div class="banque">
    <img src="../Images Bordel/MASTERCARD.png"  height="25px" alt="">
    <h2>MON MOYEN DE PAIEMENT</h2>
    <P>Mastercard**********4250<br>
    Exp: 02/24</P>
</div>

<div class="info">
    <img src="../Images Bordel/admin.png" height="25px" alt="">
    <h2>MES INFOS COMPTE</h2>
    <p>tel: <?php echo $_SESSION['auth']->nom; ?> <br>
    e-mail: <?php echo $_SESSION['auth']->email; ?> <br></p>
</div>

<img class="img1" src="../Images Bordel/fleche1.png" height="130px" alt="">

<img class="img2" src="../Images Bordel/fleche1.png" height="130px" alt="">
<br>
<div class="inventaire">
<a href="../CRUD/acceuil.php"><button>Mes Inventaires</button></a>

</div>


</body>



</html>
