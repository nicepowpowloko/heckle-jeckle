


<?php
session_start();

if(!isset($_SESSION['auth'])){
header('location:index.php');
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
}
    .compte{
        color: blueviolet;
        font-family:algerian;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 2vh;
    }

        .adresse{
            height: 20vh;
            width: 50vh;
            border: 2px solid black;
            position: fixed;
            flex-wrap: wrap;
            display: flex;
            justify-content: center;
            padding-top:2vh;
            margin-left: 3vh;
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
    62600 BERCK-SUR-MERS<br>
    06.37.29.75.55</p>


</div>









    
</body>
</html>
