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
                <div class="banner-title">
                    <h1>We are Committed to Helping you Understand your Patient's Needs.</h1>
                </div>

            </div>

        </div>

        <div id="right">
            <div class="welcomepage-card">
                <br><br><br><br><br><br>

                <img height="200" width="200" src="patient.svg" alt="">
                <br><br>
                <h2>THE MEDICAL TRANSLATOR</h2>

                <br><br><br>
                <a class="start-interview-btn" href="pat-lang.php"> Start Interview</a>

            </div>

        </div>
    </div>
    <br><br><br><br><br><br><br><br>


    <div class="footer">
        Icons made by <a href="https://www.flaticon.com/free-icon/information_2764540" title="monkik">monkik</a> from <a
            href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        <a href="https://vectorified.com/medical-background-vector">Medical Background Vector</a>
    </div>

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the
                        upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or
                        snippets as the code wants to be simple. We will help programmers build up concepts in different
                        programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android,
                        SQL and Algorithm.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">About Us</a></li>
                        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#">Scanfcode</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>





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