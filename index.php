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

    <div class="welcomePage" id="pageDetails">
        <div class="welcomePage_title_container">
            <h1 class="page_title">Hospital Translation Tool</h1>
            <br>
            <p class="slogan">We help translate the needs of your patients.</p>

            <hr>
            <br><br>

            <a href="pat-lang.php">next</a>
            

        </div>

        <div class="time">
            <div class="day" id="day"></div>
            <div id='clock'></div>
        </div>


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