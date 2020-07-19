<?php

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
        <?php include 'header.php';?>



        <div class="row w3-padding-64">
            <div class="w3-center w3-padding-32 w3-half">
                <img class="welcome-img" src="doctor-patient.png" alt="">

            </div>
            <div class="w3-center w3-padding-32 w3-half">
                <img height="100" width="100" src="patient-doctor.svg" alt="">
                <h2>The Medical Translator</h2>
                <p class="welcome-text">E translator enables docotrs and patients who speak different languages to communicate. We have transalted the Review of Systems forms into various African languages to enable doctors understand their patients immediate needs during a
                    patient doctor interview.</p>


                <a href="doctorLanguage.html" class="w3-button w3-orange">Start Doctor-Patient Interview</a>

            </div>

        </div>

        <?php include 'footer.php';?>
    </div>

    <script>
    </script>

</body>

</html>