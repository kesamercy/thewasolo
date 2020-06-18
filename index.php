<?php
session_start();
include_once "access-db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Wasolo</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Anton|Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Shadows+Into+Light" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800;900&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>

<body class="main_container">

    <div class="header">

        <div class="menu_welcomePage">
            <ul>

                <li><a href="javascript:loadPage('./updateQuestions.html')">update questions</a> </li>
                <li>
                    <a href="./index.html">welcome page</a> </li>
                <li>about</li>

            </ul>
        </div>

        <div class="logo">
            <h2 class="logo"> <a href="./index.html">thewasolo</a> </h2>
        </div>

    </div>

    <div id="banner-welcome">
        <div id="left">
            <div class="slogan">


                <div class="banner-title before-login">
                    <h1>We are Committed to Helping you Understand your Patient's Needs.</h1>
                </div>

            </div>

        </div>

        <div id="right">
            <div class="welcomepage-card">
            
            <img src="patient.svg" alt="">
            <a class="start-interview-btn" href="pat-lang.php"> Start Interview</a>
                
            </div>

        </div>
    </div>


    <div class="footer">
        Icons made by <a href="https://www.flaticon.com/free-icon/information_2764540" title="monkik">monkik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>

    </div>



        
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script>
        $(document).ready(function() {

            displayTime();
            setInterval(displayTime, 1000);

        });
    </script>

</body>

</html>