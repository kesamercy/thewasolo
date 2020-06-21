<?php
session_start();
include_once "access-db.php";

// if(!isset($_SESSION["user_id"])){ //if login in session is not set
//     header("location:farmer-login.php");
// }

if (isset($_POST['end-interview'])) {
    $patient_id = $_POST['patient_id'];

    // get all the paitnet response from the db and display them
    $sql = "SELECT * FROM patient_table WHERE patient_id='$patient_id'";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Wasolo</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />

    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Patient Answers</title>
</head>

<body class="answers-container">

    <div class="answers">
        

        <?php
            //display the results for all the questions for the patient
            if ($result->num_rows > 0) {
                
                // output data of each row
                while ($row = mysqli_fetch_array($result)) {
                    $question = $row['question'];
                    $answer = $row['answer'];

                    echo " Question: .$question.";
                    echo "<br> <br>";
                    echo "< Answer: .$answer.";
                    echo "<br> <br>";
                }
                echo "</table>";

            } else {
                echo "0 results";
            }
            ?>

    </div>





    <div class="welcomePage_button_container">

        <a class="next_button" href="javascript:loadPage('./pat-lang.html')"> back </a>
        <a class="next_button" href="javascript:loadPage('./response-form.php')"> next </a>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script>
    $(document).ready(function() {

        // $("a").click(function() {
        //     $("p").toggle();
        // });

    });
    </script>


</body>

</html>