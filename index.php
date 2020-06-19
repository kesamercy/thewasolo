<?php
session_start();
include_once "access-db.php";


if(isset($_POST['btn-login'])){

  $email = $_POST["email"];
  $paswd = $_POST["paswd"];

  if(empty($email) || empty($paswd)){

      echo 'fill in the blanks';
  }
  else {
      $query = "SELECT * FROM farm_clients WHERE customer_email='$email'";
      $result = mysqli_query($conn, $query);

      if($row=mysqli_fetch_assoc($result)){
          $db_password = $row['customer_password'];

          if($paswd == $db_password){
              $idnum=$row['customer_id'];
              $_SESSION["user_id"] = $idnum;
              
              header("location:pat-lang.php?user_id=" .$idnum);
          }
          else {
              echo 'incorrect password';
             // header("location:customer-login.php");
          }
      }
      else {
          echo '<p>the user does not exist</p>';
         // header("location:customer-login.php");
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
    <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" />
     -->
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Anton|Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Shadows+Into+Light" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800;900&display=swap"
        rel="stylesheet">

    <title>Welcome</title>
</head>

<body class="main_container">

    <div class="header">

        <div class="menu_welcomePage">
            <ul>

                <li><a href="update-db.php">update questions</a> </li>
                <li>
                    <a href="./index.php">welcome page</a> </li>
                <li><a href="login.php">Login</a> </li>

            </ul>
        </div>

        <div class="logo">
            <h2 class="logo"> <a href="./index.html">e.translate</a> </h2>
        </div>

    </div>

    <div class="banner-welcome" id="content">
        <div id="left">
            <div class="slogan">
                <br><br>
                <img width="600" height="600" src="Free_Presciption_Pad_Vector/Free Presciption Pad Vector.svg" alt="">


            </div>

        </div>

        <div id="right">
            <div class="welcomepage-card">
                <br><br><br><br><br><br>

                <img height="100" width="100" src="patient-doctor.svg" alt="">
                <br><br>
                <h2>THE MEDICAL TRANSLATOR</h2>
                <div class="banner-title">
                    <h1> At e.translate, we are Committed to Helping you Understand your Patient's Needs.
                        The medical translation tool helps doctors and patients who speak
                        different languages to communicate through the translation capabilites
                        afforded throguh the application.
                    </h1>
                </div>

                <br><br><br>
                <a id="myBtn" class="start-interview-btn"> Start Interview</a>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div id="frm">
                            <form method='POST' action="doctor-login-auth.php">

                                <input type="text" class="login_input" id="email" name="email" placeholder="Enter Email"
                                    required>
                                <br><br>
                                <input type="text" class="login_input" id="paswd" name="paswd"
                                    placeholder="Enter Password" required>

                                <br><br>
                                <div class="button">
                                    <div class="button__text"><input class="submit-button" id="btn" type="submit"
                                            value="Login" name="btn-login"></input></div>

                                    <div class="button__wrapper">
                                        <div class="button__arrow"></div>
                                        <div class="button__border-circle"></div>
                                        <div class="button__mask-circle">
                                            <div class="button__small-circle"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>

                                <a href="user-forgot.php" id="forgot_link_id"> forgot password? </a>
                                <br>
                                <br>

                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <br><br><br><br><br><br>


    <div class="footer">
        <a href="https://www.vecteezy.com/free-vector/doctor">Doctor Vectors by Vecteezy</a>
        <a href="https://www.vecteezy.com/free-vector/medical-infographics">Medical Infographics Vectors by Vecteezy</a>
        Icons made by <a href="https://www.flaticon.com/free-icon/information_2764540" title="monkik">monkik</a> from <a
            href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        <a href="https://vectorified.com/medical-background-vector">Medical Background Vector</a>
    </div>


    <!-- FOOTER START -->
    <div class="footer">
        <div class="contain">
            <div class="col">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Mission</li>
                    <li>Services</li>
                    <li>Social</li>
                    <li>Get in touch</li>
                </ul>
            </div>
            <div class="col">
                <h1>Products</h1>
                <ul>
                    <li>About</li>
                    <li>Mission</li>
                    <li>Services</li>
                    <li>Social</li>
                    <li>Get in touch</li>
                </ul>
            </div>
            <div class="col">
                <h1>Accounts</h1>
                <ul>
                    <li>About</li>
                    <li>Mission</li>
                    <li>Services</li>
                    <li>Social</li>
                    <li>Get in touch</li>
                </ul>
            </div>
            <div class="col">
                <h1>Resources</h1>
                <ul>
                    <li>Webmail</li>
                    <li>Redeem code</li>
                    <li>WHOIS lookup</li>
                    <li>Site map</li>
                    <li>Web templates</li>
                    <li>Email templates</li>
                </ul>
            </div>
            <div class="col">
                <h1>Support</h1>
                <ul>
                    <li>Contact us</li>
                    <li>Web chat</li>
                    <li>Open ticket</li>
                </ul>
            </div>
            <div class="col social">
                <h1>Social</h1>
                <ul>
                    <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
                    <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
                    <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- END OF FOOTER -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script>
    $(document).ready(function() {

        displayTime();
        setInterval(displayTime, 1000);

    });
    </script>

</body>

</html>