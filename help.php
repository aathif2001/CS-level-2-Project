<?php include 'menu.php' ?>  
<html>
    <head>
        <link rel="stylesheet" href="css/main.css">
       <style type="text/css">
            body{
             margin: 0;
             }
    
             .help{
                width: 100vw;
                height: 100vh;
                display: flex;
                flex-direction: row;
                background-color: rgb(174, 211, 241);
   
             }

            .helpl{
            width: 70%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            }

            .helpr{
            width: 30%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content:center;
            }
            .helpbox{
            width: 30vw;
            height: 15vw;
            margin: 1vw;
            border: #000000 solid 0.2vw;
            box-shadow: 10px 10px 5px;
            position: relative;
            left:3vw;
            
            background-color:#8DB6C6;
            border-radius:1vw;
      

            }
        </style>
</head>
<body style="background-color:#B0D2DE;">

    <div class="topic">
    <h1> Help Center</h1>
    </div>
    <div class="help">
        <div class="helpl">
            <div class="helpbox">
                <h2>Account & payment</h2>
                <p>If you have any issues regarding payment and </br>
                   Account related issues,</br>
                   IT department-033 2456789</p>
                
            </div>
            <div class="helpbox">
                <h2>App issues</h2>
                <p>If you have any issues with the application </br>
                    click here <a href="help.php">HElp</a> </p>
            </div>
            <div class="helpbox">
                <h2>Our local Shops</h2>
                <p>Elaptop Nugegoda-0113434567</p>
            </div>
            <div class="helpbox">
                <h2>Emergency contact</h2>
                <p>Phone N0:0112296967</br>
                   email-abc@gmail.com</p>
            </div>
        </div>
        <div  class="helpr">
            <img src= "./images/help.jpg" width="90%">
        </div>
    </div>

</body>
</html>