<?php
$servername = "localhost";
$username = "stud_login";
$password = "login";
$dbname = "stud_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>