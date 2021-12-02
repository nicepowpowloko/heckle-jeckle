<?php
include './header.php';
?>

<style>
form{
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: column;
    color: black;
    flex-wrap: wrap;
    font-family: "algerian";
}

form input ~ label{
    margin: 10px;
}


form input{
    margin: 20px;
    padding: 5px;
    border: 2px solid #F0A224;
    box-shadow: 10px 5px 5px #A14808;
    background: #612C11;
    color:#C71F16;
}
.envoie{
    font-family: "algerian";
}
fieldset{
    background-image: url('../Images/dessert.jpg');
    background-repeat: no-repeat;
    height: 80vh;
    border:  10px solid black;
    
}
.dromadaire{
    position: absolute;
    flex-wrap: wrap;
    top: 2vh;
    display: flex;
    margin-left: 1.4vh;
  margin-top:85vh;
}

@media only screen and (min-width: 375px) and (max-width:600px)  {

*{
  overflow: hidden;
}
.dromadaire{
    display: none;
}
}
</style>









<fieldset>
   <form action="" method="POST">

    <label for="pseudo">Nom Utilisateur</label>
    <input type="text" name="pseudo" id="pseud" required pattern="^[A-Za-z'-]+$" max="20">
  
    <label for="code">Mot de passe</label>
    <input type="password" name="code" id="codemd" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">

    <label for="codeconf">Veuillez confirmer</label>
    <input type="password" name="codeconf" id="codage" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">

    <label for="email">Votre adresse mail</label>
    <input type="email" name="email" id="email" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">


    <div id="bouton">
    <input class="envoie" type="submit" value="wallah">
    </div>

   </form>
</fieldset>

<div class="dromadaire">
<img src="../Images//dromadaire.png" height="250px" alt="">
</div>





<script>
$(document).ready(function(){
    
    $('#bouton').click(function(){
        $('.envoie').toggle('explode')
    })
})
</script>



<?php
include './footer.php';
?>
<script src="../jquery-ui-1.13.0/jquery-ui.css"></script>