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
.admin{
    margin-top: 50vh;
    margin-left: 50vh;
    font-size: 3vh;
}
label~text{
    border: solid 5px black;
}
</style>



</head>
<body>


    <div class="admin">
    <label for="pseudo">اسم االمستخدم</label>
    <input type="text" name="pseudo" id="pseud" required pattern="^[A-Za-z'-]+$">
    <label for="motdedep">قديم الطراز</label>
    <input type="password" name="pass" id="motpasse" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">
<input type="submit" value="يرسل">
</div>


    </form>

    


















</body>

<script>



</script>







</html>