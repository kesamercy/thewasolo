<?php
session_start();
include_once "access-db.php";

// if(!isset($_SESSION["user_id"])){ //if login in session is not set
//     header("location:farmer-login.php");
// }

// if (isset($_POST['session-btn'])) {

//     $session = $_POST["pat-code"];
//     $email = $_POST["email"];

//     $query = "SELECT * FROM translator_doctors WHERE session_code='$session'";
//     $result = mysqli_query($conn, $query);

//     if ($row = mysqli_fetch_assoc($result)) {
//         $db_email = $row['email'];

//         if ($email == $db_email) {
//             $idnum = $row['id'];
//             $_SESSION["user_id"] = $idnum;

//             header("location:body-exam.php?user_id=" . $idnum);
//         } else {
//             $_SESSION['message'] = 'Session is not active, email does not match';

//         }
//     } else {
//         $_SESSION['message'] = 'The session has not been activated';

//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<title>The Wasolo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
    rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../style.css" />

<body>

    <div class="content">
        <?php include '../header.php';?>

        <div class="patient-info w3-center">

            <h3>Basic Patient info</h3>
            <!-- <p class="description-text audio-info"> The audio will play / read the title for the page and the page instructions for the patient in their chosen language </p>
            <audio controls>
                <source src="horse.ogg" type="audio/ogg">
                <source src="horse.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio> -->
            <!-- save the patient info in sessions array so that you don't have to use forms -->
            <!-- make the icons links so that they are clickable -->
            <!-- create an onclick function that stores the value for the session -->

            <p class="description-text">When this page loads, the patient will hear questions in their language asking for basic personal information. The doctor will be notified everytime a patient enters a response and the next question in the basic info category will be displayed on the card</p>

            <form class="w3-container w3-padding-64 w3-card-4 w3-light-grey">
                <h4>Qtn: Are you male / female ?</h4>

                <a href=""><i class="fa fa-female fa-5x" aria-hidden="true"></i> </a>

                <a href=""><i class="fa fa-male fa-5x" aria-hidden="true"></i> </a>


            </form>
            <br><br>

            <a class="w3-button w3-amber" href="body-exam.php"> Start Body Exam </a>

            


        </div>


    </div>
    <?php include '../footer.php';?>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script>

    </script>

</body>

</html>