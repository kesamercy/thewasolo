<?php
session_start();
include_once "access-db.php";

if(count($_POST > 0)) {

    // geenerate the code 
    $code= strval(mt_rand(100000, 999999));

    echo $code;

    $doctor_id = $_SESSION['user_id'];
    
    //show the code on the doctor portal so they can give the paitent to enter
    $_SESSION['session-code'] = "The session code  $code";

    mysqli_query($conn,"UPDATE translator_doctors SET session_code='" . $code  . "' WHERE id='" . $doctor_id. "'"); 
    
    //route to the body exam page
    header("location:pat-lang.php?");
}

else {
    echo "post was not enabled";
}

?>