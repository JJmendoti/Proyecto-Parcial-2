<?php
  
if(isset($_GET['id'])){
    include_once('database\Connection.php');
    $id= $_GET['id'];
    $date = $_POST['date'];
    $document_patient = $_POST['document_patient'];
  
    $sql = "UPDATE medical_appointments SET date='{$date}',
    document_patient={$document_patient} WHERE Id_cita={$id}";
    $result= $conn->query($sql);


    $_SESSION['message_type']= 'success';
    $_SESSION['message_cita']= 'Datos modificados con satisfacción';
    $_SESSION['message_typee']= 'danger';
    
    header("location: create_patients.php");
}
?>