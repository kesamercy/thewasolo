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
    <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" />
     -->
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Anton|Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Shadows+Into+Light" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800;900&display=swap"
        rel="stylesheet">

    <title>Welcome</title>
</head>

<body class="main_container">

    <div class="header">

        <div class="menu_welcomePage">
            <ul>

                <li><a href="update-db.php">update questions</a> </li>
                <li>
                    <a href="./index.php">welcome page</a> </li>
                <li>about</li>

            </ul>
        </div>

        <div class="logo">
            <h2 class="logo"> <a href="./index.html">e.translate</a> </h2>
        </div>

    </div>

    <div class="banner-welcome" id="content">
        <div id="left">
            <div class="slogan">
                <img src="Free_Presciption_Pad_Vector/Free Presciption Pad Vector.svg" alt="">
                <div class="banner-title">
                    <h1>We are Committed to Helping you Understand your Patient's Needs.</h1>
                </div>

            </div>

        </div>

        <div id="right">
            <div class="welcomepage-card">
                <br><br><br><br><br><br>

                <img height="200" width="200" src="patient-doctor.svg" alt="">
                <br><br>
                <h2>THE MEDICAL TRANSLATOR</h2>

                <br><br><br>
                <a class="start-interview-btn" href="pat-lang.php"> Start Interview</a>

            </div>

        </div>
    </div>
    <br><br><br><br><br><br>


    <div class="footer">
    <a href="https://www.vecteezy.com/free-vector/doctor">Doctor Vectors by Vecteezy</a>
    <a href="https://www.vecteezy.com/free-vector/medical-infographics">Medical Infographics Vectors by Vecteezy</a>
        Icons made by <a href="https://www.flaticon.com/free-icon/information_2764540" title="monkik">monkik</a> from <a
            href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        <a href="https://vectorified.com/medical-background-vector">Medical Background Vector</a>
    </div>


    <!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Company</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Products</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Accounts</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Resources</h1>
    <ul>
      <li>Webmail</li>
      <li>Redeem code</li>
      <li>WHOIS lookup</li>
      <li>Site map</li>
      <li>Web templates</li>
      <li>Email templates</li>
    </ul>
  </div>
  <div class="col">
    <h1>Support</h1>
    <ul>
      <li>Contact us</li>
      <li>Web chat</li>
      <li>Open ticket</li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
    </ul>
  </div>
<div class="clearfix"> </div>
</div>
</div>
<!-- END OF FOOTER -->

 


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