<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>bienvenue</title>

    <style>
        body{
      background-image:url('../Images/Marchand Aladdin.jpg');
      background-repeat:no-repeat ;
      background-attachment: fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
      overflow: hidden;
        }
       

         h1{
           
            color: orangered;
            font-family: algerian;
            display: flex;
            text-align: center;
            margin-top: 50px;
            position: absolute;
            left: 50vh;
            
         }
         img{
          position:fixed;
          height: 250px;
          top: 50%;
          left: 45%;
          z-index: -1;
         
      
         
         }

         .rideaux {
    width: 50%;
    height: 90vh;
    float: left;
    animation-duration: 4s;
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
    background-color:#01002e;
}

.rideaux-element:nth-child(even) {
    background-color: #d06800;
}


    </style>

<!-----------------------------------------------------------------FIN DE BALISE STYLE----------------------------------------------------------->

</head>




<iframe src="../audio/fais-moi-le-couscous-cherie.mp3" allowe="autoplay" style="display:none" id="iframeAudio"></iframe>

<h1>BIENVENUE SUR LE BAZAR DE HECKLE ET JECKLE</h1>

<body>

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
