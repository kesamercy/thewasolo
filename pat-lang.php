<?php
session_start();
include_once "access-db.php";

if(!isset($_SESSION["user_id"])){ //if login in session is not set
    header("location:index.php");
}

$sql = "SELECT * FROM translator_language";
$result = $conn->query($sql);

if (count($_POST) > 0) {
    //get the language type and save it into the session
    $_SESSION['language'] = $_POST['lang_id'];

    //route to the body exam page
    header("location:ros-questions.php?");

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Wasolo</title>
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
    rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css" />
    <title>Select language</title>
</head>

<body>
    <!-- populate the form with a list of languages from the db -->
    <!-- the user should submit the form with the lsit of languages from the db -->
    <!-- each language should be it's own form -->
    <!-- based on the lang selected, the db for that lang should be accessed for the questions to be asked. so save the selection to the seeions -->

    <!-- // you need this as a hidden feature in the form so that you can return the selected language when the form is submitted. -->

    <div class="content">
    <?php include 'header.php';?>

        <div class="language-page w3-center">


            <h2> Select the Patient's langauge </h2>

            <p class="description-text">Click <strong> activate patient session </strong> button to start the session for the patient. A code will display and you should give it to your paitent to enter in the patient portal so that they will join your current session for the interview.</p>

           
            
            <form action="enable-pat-session.php">
                <input name="enable" class="w3-button w3-red" type="submit" value="Activate Patient Session">
            </form>

            <div class="display-message">
                <?php
                if (isset($_SESSION['session-code'])) {
                    echo $_SESSION['session-code'];
                    unset($_SESSION['session-code']);
                }
                ?>
            </div>

            <p class="description-text"> When the patient session is active, <strong> select the language </strong> that your patient understands. This is the language your patient will hear the questions you ask when the interview begins.</p>



            <?php

            if ($result->num_rows > 0) {

                echo "<table class='language-table'><tr style='height: 80px'></tr><br><br>";

                // output data of each row
                while ($row = mysqli_fetch_array($result)) {
                    echo "<form method='post' class='w3-center' action=''>";
                    $lang_type = $row["language_type"];
                    $lang_id = $row["id"];

                    echo "<tr style='height: 40px'>
                                    <td>" . $lang_type . "</td>

                                    <input name='lang_id'  type='hidden' value='$lang_id' >
                                    <td> <input type='submit' class='w3-button w3-amber' value='select'></td>
                                </tr>";
                    echo "</form>";
                }
                echo "</table>";

            } else {
                echo "0 results";
            }
            ?>

        </div>
    </div>
    <?php include 'footer.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script>
    $(document).ready(function() {



    });
    </script>


</body>

</html>