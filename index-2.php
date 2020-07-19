<?php
session_start();
include_once "access-db.php";

if (isset($_POST['btn-login'])) {

    $email = $_POST["email"];
    $paswd = $_POST["paswd"];

    $query = "SELECT * FROM translator_doctors WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $db_password = $row['password'];

        if ($paswd == $db_password) {
            $idnum = $row['id'];
            $_SESSION["user_id"] = $idnum;

            header("location:pat-lang.php?user_id=" . $idnum);
        } else {
            $_SESSION['message'] = 'Incorrect password';

        }
    } else {
        $_SESSION['message'] = 'The user does not exist';

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
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style-2.css" />

    <body>

        <div class="content">
            <ul class='topnav'>
                <li><a class='logo' href='home.php'>E-translate</a></li>


                <li class='right'><a href='about.php'>Doctor Login</a></li>
                <li class='right'><a href='about.php'>About</a></li>

            </ul>

            <div class="row w3-padding-64">
                <div class="w3-center w3-padding-32 w3-half">
                    <img class="welcome-img" src="doctor-patient.png" alt="">

                </div>
                <div class="w3-center w3-padding-32 w3-half">
                    <img height="100" width="100" src="patient-doctor.svg" alt="">
                    <h2>The Medical Translator</h2>
                    <p class="welcome-text">E translator enables docotrs and patients who speak different languages to communicate. We have transalted the Review of Systems forms into various African languages to enable doctors understand their patients immediate needs during
                        a patient doctor interview.</p>


                    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-orange">Start Doctor-Patient Interview</button>

                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content">
                            <div class="w3-container">
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <h2>Login</h2>
                                <p>Please login as a doctor to start an interview with your patient</p>

                                <form class="form-inline w3-padding-32" action="">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" placeholder="Enter email" name="email">
                                    <label for="pwd">Password:</label>
                                    <input type="password" id="pwd" placeholder="Enter password" name="pswd">
                                    <label>
                                      <input type="checkbox" name="remember"> Remember me
                                    </label>

                                    <input type="submit" name="btn-login" class="w3-button w3-orange" value="Submit">

                                </form>
                                <br><br>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <footer>

                <div class='w3-row'>
                    <hr>
                    <div class='w3-third w3-center'>
                        <p>
                            Powered by <a href='https://www.w3schools.com/w3css/default.asp' target='_blank'>wandika</a>
                        </p>
                    </div>
                    <div class='w3-third w3-center'>
                        <p class='w3-center'> Copy right 2020</p>
                        <div class='sharethis-inline-follow-buttons follow-buttons'></div>
                    </div>
                    <div class='w3-third w3-center'>
                        <p>Contact Us</p>

                    </div>
                </div>
            </footer>
        </div>

        <script>
        </script>

    </body>

    </html>