<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>bienvenue</title>

    <style>
        body{
      background-image:url('../Images/magasin.webp');
      background-repeat:no-repeat ;
      background-attachment: fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
      overflow: hidden;
        }
       

         h1{
           
            color: black;
            font-family: algerian;
            display: flex;
            text-align: center;
            margin-top: 50px;
            position: absolute;
            left: 50vh;
            
         }
       
         
         .rideaux {
    width: 50%;
    height: 93vh;
    float: left;
    animation-duration: 5s;
    animation-iteration-count: 1;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
    z-index: 1;
}

.rideaux-gauche {
    animation-name: go-left;

}

.rideaux-droit {
    animation-name: go-right;
}

@keyframes go-left {
    0% {
        transform: translate(0%, 0%);
    }
    100% {
        transform: translate(-70%, 0%);
    }
}

@keyframes go-right {
    0% {
        transform: translate(0%, 0%);
    }
    100% {
        transform: translate(70%, 0%);
    }
}

.rideaux-element {
    width: 10%;
    height: 110%;
    float: left;
    border-bottom-right-radius: 67px;
    border-bottom-left-radius: 67px;
}



.rideaux-element:nth-child(odd) {
    background-color:#d15028;
   
}

.rideaux-element:nth-child(even) {
    background-color:#fca967;
   
}

.boutique{
    position: fixed;
    z-index: -1;
    display: flex;
    justify-content: center;
    margin-top: 60vh;
    margin-left: 75vh; 
}

button{
    display: flex;
   align-items: center;
    border: 2px solid black;
    border-radius: 10px;
    padding: 10px;
    font-family: algerian;
    font-size: 20px;
    font-weight: bolder;
    box-shadow: 2px 2px black;
    height: 10vh;
    text-decoration: none;
}

button:hover{
    background-color: #d15028;
   
}

a{
    text-decoration: none;
    color: black;
}
    </style>

<!-----------------------------------------------------------------FIN DE BALISE STYLE----------------------------------------------------------->

</head>




<iframe src="../audio/fais-moi-le-couscous-cherie.mp3" allowe="autoplay" style="display:none" id="iframeAudio"></iframe>

<h1>BIENVENUE AUX BAZAR DE HECKLE ET JECKLE</h1>

    
<body>

<div class="boutique">
<button><a href="../COOKIES/page1.php">VISITEZ NOTRE BOUTIQUE</a></button>
    </div>

<a href=""><img src="../Images/abu.png" alt=""></a>

   
<div class="rideaux rideaux-gauche">
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
    </div>
    <div class="rideaux rideaux-droit">
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
        <div class="rideaux-element"></div>
    </div>

</body>



<Script>

</Script>
</html>
