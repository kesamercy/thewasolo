<?php
session_start();
include_once "../access-db.php";

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
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <title> Patient Response Form</title>
</head>

<body>
    <div class="content">



        <?php include '../header.php';?>
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

            // after response is submitted, update the db with the response sent 
            // when the thumbs up button is clicked, prompt the doctor to get the paitent response.- light the get response button green
            //when the doctor clicks the button, show the patient response.

        }

        ?>


        </div>

    </div>
    <?php include '../footer.php';?>

    <script src="js/index.js"></script>
    <script>
    $(document).ready(function() {



    });
    </script>


</body>

</html>