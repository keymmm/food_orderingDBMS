<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "food_ordering";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("". $conn->connect_error);
}

?>