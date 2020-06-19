<?php
session_start();
include_once "access-db.php";

// if(!isset($_SESSION["user_id"])){ //if login in session is not set
//     header("location:farmer-login.php");
// }
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
    <title> Patient Response Form</title>
</head>

<body class="language_container">

    <div class="header">

        <div class="menu_welcomePage">
            <ul>

                <li><a href="update-db.php">update questions</a> </li>
                <li>
                    <a href="./index.php">welcome page</a> </li>
                <li> <a href="./index.php">about</a> </li>
                </li>

            </ul>
        </div>

        <div class="logo">
            <h2 class="logo"> <a href="./index.html">e.translate</a> </h2>
        </div>

    </div>

    <div class="mainQuestion_category">

        <?php

        if (isset($_POST['response'])) {

            // get the category for the question asked
            //determine the type of response form based on the category defined

            echo "<form method='post' action='ros-questions.php'>";
            echo "
            <label for='responseFormat_number'>First Response</label>
            <input name='response' type='number' id='responseFormat_number'>
            <br> <br>
            <label for='responseFormat_slideBar'>Second Response</label>
            <input name='response' type='range' id='responseFormat_slideBar'>
            <br> <br>
            <label for='responseFormat_Images'>Third Response</label>
            <input name='response' type='image' id='responseFormat_Images'>
            <br> <br>
            <label for='responseFormat_time'>fifth Response</label>
            <input name='response' type='time' id='responseFormat_bodyInteraction'>
            <br><br>
            <input id='responseFormSubmitButton' name='record-response' type='submit' value='Submit'>
            ";
            echo "</form>";

        }

        ?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script>
    $(document).ready(function() {



    });
    </script>


</body>

</html>