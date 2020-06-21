<?php
session_start();
include_once "access-db.php";

if (isset($_POST['get-code'])) {

    $code = $_POST["code"];
    
    $query = "SELECT * FROM translator_doctors WHERE session_code='$code'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
            header("location:patient-info.php?");
        } 
        else {
            $_SESSION['message'] = 'Incorrect session code';

        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Wasolo</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" />
     -->
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Anton|Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Shadows+Into+Light" />
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800;900&display=swap"
        rel="stylesheet">

    <title>Welcome</title>
</head>

<body class="main_container">

    <div class="header">

        <div class="menu_welcomePage">
            <ul>

                <li><a href="about.php">about</a> </li>
                <li><a href="pat-lang.php">select language</a> </li>
                <li><a href="login.php">Login</a> </li>

            </ul>
        </div>

        <div class="logo">
            <h2 class="logo"> <a href="index.html">e.translate</a> </h2>
        </div>

    </div>

    <div class="banner-welcome" id="content">
        <div id="left">
            <div class="slogan">
                <br><br>

                <form action="">
                    <input type="text" name="code" placeholder="Enter code here" >
                    <input type="submit" name="get-code" value="Submit code">
                </form>
 

            </div>

        </div>

        <div id="right">
            <div class="welcomepage-card">
                <br><br><br><br><br><br>
                

            </div>

        </div>
    </div>
    <br><br><br><br><br><br>


    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script>
    
    </script>

</body>

</html>