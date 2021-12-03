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
    margin-top: 10vh;
}

form input ~ label{
    margin: 10px;
}


form input{
    margin: 20px;
    padding: 10px;
    border: 2px solid #F0A224;
    box-shadow: 10px 5px 5px #A14808;
    background: #612C11;
    color:#C71F16;
}
.envoie{
    font-family: "algerian";
}
fieldset{
    background-image: url('../Images/marakesh1.jpg');
    background-repeat: no-repeat;
    height: 60vh;
    border: 4px solid #F0A224;
    background-size: cover;
    
}
</style>
<fieldset>


<form action="./include/log.php" method="post">
    
    <label for="pseudo"> Nom Utilisateur</label>
    <input type="text" name="pseudo" id="pseud" required pattern="^[A-Za-z'-]+$">
    <label for="code">mot de passe</label>
    <input type="password" name="code" id="codemd" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">
<input class="envoie" type="submit" value="Envoie">


    </form>

    </fieldset>

<?php
include './footer.php';

?>
