<?php

session_start();


$host = "localhost";
$username = 'root';
$password = '';
$dbname = "clinica";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die($conn->connect_error);
}
//echo "successful connection! Welcome.";
