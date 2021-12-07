<?php 
session_start();

if(!isset($_SESSION['pseudo'])){

    header("location:./log.php");
exit();

}
?>

<?php
include './header.php';
include './nav.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utilisateur</title>
</head>





<body>
<div class="adresse">

</div>


<h1>Binvenue <?php echo $_SESSION['pseudo']; ?> !</h1>






    
</body>
</html>
