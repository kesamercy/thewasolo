<?php
session_start();
include_once "access-db.php";

// if(!isset($_SESSION["user_id"])){ //if login in session is not set
//     header("location:farmer-login.php");
// }

$query = "SELECT category FROM category_table";
$query_results = $conn->query($query);


if (count($_POST) > 0) {

    $lang = $_SESSION['lang_type'];
    $category = $_POST['category'];

    // this is the code responsible to show the questions for the chosen category 
    $sql = "SELECT * FROM translator_content WHERE lang='$lang' AND category='$category'";
    $result = $conn->query($sql);

    // <!-- select all the questions for the specified language and the category -->
    if ($result->num_rows > 0) {
    
        // output data of each row
        while ($row = mysqli_fetch_array($result)) {

            echo "<form method='post' action='response-form.php'>";

            $eng_question = $row["question"];
            //     <!-- get the first qtn from the results and display the text in english -->
            echo "<h1> ".$eng_question." </h1>";

            // <!-- get the file path for that qtn to retrive the audio and show t -->
            echo "<img src='image.png' onclick='playAudio('mysound.mp3')'>";

            echo "<audio controls>
                <source src='horse.ogg' type='audio/ogg'>
                <source src='horse.mp3' type='audio/mpeg'>
            Your browser does not support the audio element.
            </audio>";

            // you need this as a hidden feature so that you can return the selected category when the form is submitted.
            echo "<input name='question'  type='hidden' value='$eng_question' >";

            // <!-- get response button to submit the question for the patient to respond selected qtn and submit the form-->
            echo "<input type='submit' name='response' value='get response'>";
           
            
            echo "</form>";
        }

    } else {
        echo "0 results";
    }


   
    //get the food name
    $food = $_POST['food_name'];

    //get the food quantity
    $quantity = $_POST['quantity'];
    echo 'this is the food quantity ', $quantity;

    //use the food name to get the food id from the food table
    $query = "SELECT food_id FROM farm_food WHERE food_name='$food'";
    $id_result = mysqli_query($conn, $query);

    //update the stock table with the values of the food id, the stock qnautity and the userid of the farmer
    if ($row = mysqli_fetch_assoc($id_result)) {
        $food_id = $row['food_id'];

        //store the user id in the userid col for the stock table
        if (mysqli_query($conn, "SELECT filepath (user_id, food_id, stock_quantity) VALUES ('$user_id', '$food_id', '$quantity')")) {
            echo 'your stock has been added to the inventory';

        } else {
            echo 'there was an error, your stock has not been added';
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Wasolo</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Select language</title>
</head>

<body class="questions_container">

    <p>ask the questions based on the ROS category</p>
    <!-- get all the questions from the chosen category and show them-->
    <?php

    if ($query_results->num_rows > 0) {
        echo "<table class='prodcue-table'><tr style='height: 80px'><th style='text-align:left'> Language </th></tr><br><br>";

        // output data of each row
        while ($row = mysqli_fetch_array($query_results)) {
            echo "<form method='post' action=''>";
            $category = $row["category_name"];
            echo "<tr style='height: 40px'>
                        <td>" . $category . "</td>
                        // you need this as a hidden feature so that you can return the selected category when the form is submitted.
                        <input name='category'  type='hidden' value='$category' >
                        <td> <input type='submit' value='select'></td>
                    </tr>";
                    echo "</form>";
        }
        echo "</table>";

    } else {
        echo "0 results";
    }
    ?>

    <hr>

    <h1>Patient real-time response</h1>

    <?php

    if(isset($_POST['record-response'])){
        $answer = $_POST["response"];
        $question = $_POST["question"];
        $patient_id = $_SESSION['patient_id'];

        // think about recording the session number too

        // display the patient response for the doctor
        echo "<p> Patient answer: " .$answer." </p>";

        // store the response into the db for the paitent responses 
        if (mysqli_query($conn, "INSERT INTO patient_table (patient_id, question, answer) VALUES ('$patient_id', '$question', '$answer')")) {
            echo 'patient response has been recorded ';

        } else {
            echo 'there was an error with the system, patient response was not recorded';
        }


    }  

    ?>



    <!-- show the doctor the response from the patient  -->

    <!-- save the doctor question and the response to the response form table in the database -->
    <!-- when the doctor clicks the end interview button, the retrive the data from the response form table -->

    <!-- when that submit button is clicked, show the question on the parent portal   -->
    <!-- have the form submit to patient.auth -->
    <!-- the paitent auth should display the content that has been submitied and the paitnet should see the question -->
    <!-- the paithent response form should show -->
    <!-- the paitient response should be submitted and shown on the response section for the doctor -->



    <!--the landing page for the paitent should be the page that asks for the code from the doctor to accept. that code should be saved as the session code  -->
    <!-- so you update the session code so that the session for the patient and the doctor are the same -->

    <!-- if the doctor clicks next category, then retrive the questions in the next category -->
    <p>for each category, change the expected response form on the patient page.</p>

    <form action="patient-answers.php">
        <input type="submit" name="end-interview" value="End Interview">
    </form>

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