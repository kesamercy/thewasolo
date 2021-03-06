<?php
session_start();
include_once "access-db.php";

// if(!isset($_SESSION["user_id"])){ //if login in session is not set
//     header("location:farmer-login.php");
// }

if (isset($_POST['session-btn'])) {

    $session = $_POST["pat-code"];
    $email = $_POST["email"];

    $query = "SELECT * FROM translator_doctors WHERE session_code='$session'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $db_email = $row['email'];

        if ($email == $db_email) {
            $idnum = $row['id'];
            $_SESSION["user_id"] = $idnum;

            header("location:patient-info.php?user_id=" . $idnum);
        } else {
            $_SESSION['message'] = 'Session is not active, email does not match';

        }
    } else {
        $_SESSION['message'] = 'The session has not been activated';

    }
}

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

        <div class="w3-center patient-index">


            <div class="row w3-padding-64">
                <div class="w3-center w3-padding-32 w3-half">
                    <img class="welcome-img" src="black-woman-sick.svg" alt="">

                </div>
                <div class="w3-center w3-padding-64 w3-half">
                <img height="100" width="100" src="patient-doctor.svg" alt="">
                    <h2>Activate Patient Session</h2>

                    <p class="description-text">
                        Enter your <strong > doctor email and the session code </strong> retrived from the doctor session. This will allow your paitent to join
                        your
                        interview session.
                    </p>

                    <form method="POST" action="">
                        <input type="text" class="w3-input w3-border session-input" name="email"
                            placeholder="Enter doctor email"> <br>
                        <input type="text" class="w3-input w3-border session-input" name="pat-code"
                            placeholder="Enter the session code"> <br>
                        <input type="submit" class="w3-button w3-light-green" name="session-btn" value="Start Session">
                    </form>
                </div>
            </div>



        </div>
    </div>
    <?php include '../footer.php';?>
    <script></script>

</body>

</html>