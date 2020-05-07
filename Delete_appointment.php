<?php

if (isset($_GET['id'])) {

    include_once('database\Connection.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM medical_appointments WHERE 	Id_cita={$id}";
    $result = $conn->query($sql);


    header("location: create_patients.php");
}
