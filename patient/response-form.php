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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <title> Patient Response Form</title>
</head>

<body>
    <div class="content">



        <?php include '../header.php';?>
        <div class="patient-responses w3-center">
            <h3>Patient Response Form</h3>


            <!-- <p class="description-text audio-info"> The audio will play / read the title for the page and the page instructions for the patient in their chosen language </p>
            <audio controls>
                <source src="horse.ogg" type="audio/ogg">
                <source src="horse.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio> -->

            <p class="description-text"> Please select the response using the input fields below to the question asked.
            </p>

            <p>If this page is empty, then the doctor has not asked any questions yet...</p>

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