<?php
session_start();
include_once "access-db.php";

if (!isset($_SESSION["user_id"])) { //if login in session is not set
    header("index.php");
}

$query = "SELECT * FROM translator_qtncategory";
$query_results = $conn->query($query);

if (count($_POST) > 0) {

    // the correct id's are not being submiited

    $lang_id = $_SESSION['language'];
    $category_id = $_POST['category'];

    // this is the code responsible to show the questions for the chosen category
    $sql = "SELECT * FROM translator_content WHERE language_id='$lang_id' AND category_id='$category_id'";
    $result = $conn->query($sql);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Wasolo</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />

    <title>Start Interview</title>
</head>

<body>

    <div class="content">
        <?php include 'header.php';?>

        <div class="questions_container w3-center">



            <div class="categories">


                <h3>Select the Body Category for the Questions to Ask the Patient </h3>

                <p class="description-text"> The first line of buttons will display questions in the body category based
                    on the ROS form. Please select the button category based on the questions you would like to ask your
                    patient.</p>
                <!-- get all the questions from the chosen category and show them-->
                <!-- you need the type as a hidden in the form so that you can return the selected category when the form is submitted.-->
                <?php

                    if ($query_results->num_rows > 0) {
                        echo "<table class='prodcue-table'><tr style='height: 80px'></tr><br><br>";
                        echo "<tr style='height: 40px'>";
                        // output data of each row
                        while ($row = mysqli_fetch_array($query_results)) {
                            echo "<form method='post' action=''>";
                            $category = $row["cat_name"];
                            $category_id = $row["id"];

                            echo "<input name='category'  type='hidden' value='$category_id' >
                                                                    <td> <input type='submit' class='w3-button w3-amber' value='$category'></td>";

                            echo "</form>";
                        }
                        echo "</tr>";
                        echo "</table>";

                    } else {
                        echo "0 results for the category table";
                    }
                    ?>

            </div>

            <div class="w3-row">
                <div class="w3-half">
                    <?php

                        // <!-- select all the questions for the specified language and the category -->
                        if ($result->num_rows > 0) {
                            echo "<table class='prodcue-table'><tr style='height: 80px'><th style='text-align:left'> Id </th><th style='text-align:center'> Question </th> <th style='text-align:center'> Audio </th> </tr><br><br>";

                            // output data of each row
                            while ($row = mysqli_fetch_array($result)) {

                                echo "<form method='post' action='response-form.php'>";

                                $qtn_id = $row["question_id"];
                                $id = $row["id"];
                                $audio_path = $row["sourcefile"];

                                $new_sql = "SELECT question FROM translator_questions WHERE id='$qtn_id'";
                                $new_result = $conn->query($new_sql);

                                if ($new_row = mysqli_fetch_array($new_result)) {
                                    # code...
                                    $qtn = $new_row["question"];

                                    echo "<tr style='height: 40px'>
                                            <td>" . $id . "</td>
                                            <td>" . $qtn . "</td>
                                            <td> <audio controls>
                                                <source src='horse.ogg' type='audio/ogg'>
                                                <source src='mercytesting.mp3' type='audio/mpeg'>
                                                Your browser does not support the audio element.
                                                </audio> </td>
                                                <input name='category'  type='hidden' value='$category_id' >
                                            <td> <input type='submit' name='response' class='w3-button w3-light-green' value='get response'> </td>
                                            </tr>";
                                    echo "</form>";

                                }
                            }

                        } else {
                            echo "0 results for the questions based on the language and the category";
                        }

                        ?>

                </div>
                <div class="w3-half">
                    <h4>Expect to see the patient response here: </h4>
                <?php

                    if (isset($_POST['record-response'])) {
                        $answer = $_POST["response"];
                        $question = $_POST["question"];
                        $patient_id = $_SESSION['patient_id'];

                        // think about recording the session number too

                        // display the patient response for the doctor
                        echo "<h3 class='page_title'> Patient answer: " . $answer . " </h3>";

                        // store the response into the db for the paitent responses
                        if (mysqli_query($conn, "INSERT INTO patient_table (patient_id, question, answer) VALUES ('$patient_id', '$question', '$answer')")) {
                            echo 'patient response has been recorded ';

                        } else {
                            echo 'there was an error with the system, patient response was not recorded';
                        }

                    }

                    ?>

                </div>
            </div>


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