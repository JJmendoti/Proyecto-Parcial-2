<?php
//datos cita
if (!isset($_POST['save_Patient'])) {

  die("Error no comming data");
}

$date = $_POST['date'];
$document_patient = $_POST['document_patient'];


try {

  include_once('database\Connection.php');
  $sql = "INSERT INTO  medical_appointments (date, document_patient) VALUES ('{$date}', {$document_patient} )";
  $result = $conn->query($sql);


  $_SESSION['message_type'] = 'success';
  $_SESSION['message_cita'] = 'Quote created with satisfaction';
  $_SESSION['message_typee'] = 'danger';

  header("location: create_patients.php");
} catch (Exception $ex) {
  echo "DB connection error";
}
?>