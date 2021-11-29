<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
body {
           background-color: black;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .main_box {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            max-width: 200px;
            height: 350px;
            position: relative;
            flex-wrap: wrap;

           
        }

        .box {
           
            background: transparent;
            color: black;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 20px;
            height: 81.5%;
        }
        h1{
            font-size: 50px;
            margin-bottom: 10px;
            font-family: algerian;
            
        }

        .heading{
            margin-bottom: 20px;
            margin-top: -10px
        }

        .form{
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .int{
            border-radius: 5px;
            font-size: 17px;
            margin-bottom: 10px;
            font-family: algerian;
            color: black;
          
            
           
        }
        .btn{
            font-size: 20px;
            color:black;
            margin-top: 80px;
            font-family: algerian;
            font-size: 30px;
            
        }

    img{
        position: fixed;
        margin-top: -60vh;
        z-index: -1;
        margin-left: 60vh;
        
        
    }

    .img2{
        height: 3vh;
        width: 3vh;
        position: absolute;
        margin-top: -7vh;
        left: 30vh;
    }

    
    .img3{
        height: 3vh;
        width: 3vh;
        position: absolute;
        margin-top: -1vh;
        left: 30vh;
    }

</style>



</head>
<body>


    
<div class="main_box">
        <div class="box">
            <div class="heading">
                <h1>INSCRIPTION</h1>
            </div>
            <div class="form">
                <input class="int" type="text" placeholder="utilisateur" required pattern="" />
                <input class="int" type="password" placeholder="mot de passe" required pattern="" />
                <input class="int" type="email" placeholder="email" required pattern="">
            </div>
            <button class="btn">ENVOIE</button>
        </div>
    </div>

<img src="../Images/kisspng-paper-quill-pen-clip-art-plumas-de-ave-5adae0b2b52501.768700781524293810742.png" alt="">

<img src="../Images/femme.png" alt="" class="img2">

<img src="../Images/cle.png" alt="" class="img3">















</body>

<script>



</script>







</html>