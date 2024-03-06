<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Gradetracker21";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);

}
echo "Connected successfully"
 ?>