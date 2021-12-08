<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
    <?php
    include '../acceuil/en-tête.php'
    ?>
    <?php
    include '../acceuil/nav.php'
    ?>


<style>
    form{
    padding : 5px 10px;
    font-family: algerian;
    position: absolute;
    margin-left: 85vh;
    margin-top: 30vh;
    flex-wrap: wrap;
}

label{
    display: block;
    min-width: 25%;
}
input[type="submit"]{
    color: RGB(200,100,0);
    border-radius: 5px;
    padding: 5px 10px;
    font-size: 14px;
    border: 2px solid RGB(200,100,0);
    background-color: black;
}
input[type="submit"]:hover{
    background-color: RGB(200,100,0);
    color:black;
    font-family: algerian;
    cursor: pointer;
    box-shadow: 0px 0px 5px 0px rgb(236, 4, 4);
    border: 2px solid black;
}
 input{
     background: transparent;
     border-left: none;
     border-right: none;
     border-top:none ;
     border-bottom: 2px solid black;
     font-family: algerian;
     letter-spacing: 1vh;   
 }

input:focus{
    outline: none;
   
}
 .pays1{
     background:transparent;
     border-left: none;
     font-family: algerian;
     border-right: none;
     border-top: none;
     border-bottom: 2px solid black;
 }

 .pays1 option{
     font-family: algerian;
     background: black;
     color:RGB(200,100,0);
     border-left: none;
 }

  
</style>





    <main>
    <form id="form" method="post" action="./function.php">   
    <div class="form1">
        <label for="nomm">NOM</label>
        <input required placeholder="Inscrit ton nom" type="text" id="nomm" name="nomm">
    </div>
<br>
    <div class="form2">
        <label for="prenomm">Prénom</label>
        <input required placeholder="Inscrit ton prénom" type="text" id="prenomm" name="prenomm">
    </div>
<br>
    <div class="form3">
        <label for="emaill">E-MAIL</label>
        <input required placeholder="Inscrit ton e-mail" type="email" id="emaill" name="emaill">
    </div>
<br>
    <div class="form4">
        <label for="payss">PAYS DE L'UTILISATEUR</label>
        <select class="pays1" name="payss" id="payss">
            <optgroup  label="">
                <option value="">SELECTION PAYS</option>
                <option value="France">FRANCE</option>
                <option value="Belgique">BELGIQUE</option>
                <option value="Suisse">SUISSE</option>
                <option value="Hongrie">HONGRIE</option>
                <option value="Pologne">POLOGNE</option>
                <option value="allemagne">ALLEMAGNE</option>
                <option value="maroc">MAROC</option>
            </optgroup>
        </select>
    </div>
<br>
    <div class="form5">
        <label for="coment">COMMENTAIRE</label>
        <input required placeholder="ECRIVEZ-NOUS" type="text" id="comentairee" name="comentairee">
    </div>
<br>
<br>
    <div class="form6">
        <input  type="submit" value="ENVOYER">
    </div>
    </form>








        <div class="formulaire"><img src="../Images Bordel/Parchemin Formulaire.png" alt=""></div>
        <div class="lampe"><img src="../Images Bordel/Lampe Formulaire Contact.png" alt=""></div>
    </main>
</body>

<style>

   main{
       background-color: black;
       flex-wrap: wrap;
       background: url('../Images Bordel/Smoke Background.jpg');
       background-size: cover;
   }
    .formulaire{
        height: 800px;
        display: flex;
        justify-content: center;
    }

    .lampe{
        height: 250px;
        display: flex;
        justify-content: center;
    }
</style>
<?php
include '../acceuil/footer.php'
?>



</html>