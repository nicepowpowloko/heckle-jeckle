<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

label{
    position: relative;
    margin-top: 50vh;
}

form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 50vh;
}
</style>



</head>
<body>

<form action="" method="post">
    <div class="admin">
    <label for="pseudo">pseudo</label>
    <input type="text" name="pseudo" id="pseud" required pattern="^[A-Za-z'-]+$">
    <label for="motdedep">mot de passe</label>
    <input type="password" name="pass" id="motpasse" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">
    <label for="adresse">email</label>
    <input type="email" name="mail" id="eemail" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">
    <input type="submit" value="يرسل">
</div>


    </form>

    


















</body>

<script>



</script>







</html>