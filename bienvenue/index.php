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
            text-decoration: none;
            color: orangered;
            font-family: algerian;
            text-align: center;
            margin-top: 50px;
         }

         .rideaux {
    width: 50%;
    height: 90vh;
    float: left;
    animation-duration: 6s;
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

/* Alternating color of curtain pieces */

.rideaux-element:nth-child(odd) {
    background-color:#01002e;
}

.rideaux-element:nth-child(even) {
    background-color: #d06800;
}


    </style>

<!--------------------------------------------------------------------------------------------------------------------------------------->

</head>




<iframe src="../audio/fais-moi-le-couscous-cherie.mp3" allowe="autoplay" style="display:none" id="iframeAudio"></iframe>





<body>
   
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
