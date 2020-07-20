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

            <p class="description-text">When this page loads, the patient will hear questions in their language asking for basic information </p>
            <form class="w3-container w3-card-4 w3-light-grey">
                <h2>Qtn: Are you male / female ?</h2>

                <input type="text"> <i class="fa fa-female" aria-hidden="true"></i> </input>
            
                <p><label>First Name</label>
                    <input class="w3-input w3-border" name="first" type="text"></p>

                <p><label>Last Name</label>
                    <input class="w3-input w3-border" name="last" type="text"></p>

                    <p>Note: these questions should be replaced with icons / pictures  as buttons for the patients to click as answers to the questions they hear</p>
            </form>

            <a class="w3-button w3-amber" href="body-exam.php"> Next </a>


        </div>


    </div>
    <?php include '../footer.php';?>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script>

    </script>

</body>

</html>