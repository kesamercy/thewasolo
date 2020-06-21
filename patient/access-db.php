<?php
$servername = "tethys.cse.buffalo.edu";
$username = "nekesame";
$password = "50278839";
$db = "nekesame_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>