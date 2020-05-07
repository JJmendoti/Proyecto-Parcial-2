<?php

if (isset($_GET['id'])) {

    include_once('database\Connection.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM  medical_appointments WHERE Id_cita={$id}";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}

?>


<?php include_once('includes\header.php');  ?>
<br>
<div class="col-4">
    <?php if (isset($_SESSION['message_cita'])) { ?>

        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message_cita'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php session_unset();
    } ?>


    <div class="card card-body mt-5 mb-4">
        <form action="Update_appointment.php?id=<?php echo $row['Id_cita'] ?>" method="post" onsubmit="return Confirm_Ship();">
            <p class="font-weight-bold h2 text-dark border border-success bg-info">Modificar tu Cita</p>
            <div class="ro">
                <div class="col">
                    <div class="form-group">
                        <input type="date" value="<?php echo $row['date'] ?>" name="date" class="form-control" id="date" placeholder="Date" autofocus>

                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" value="<?php echo $row['document_patient'] ?>" name="document_patient" class="form-control" id="documentpatient" placeholder="Ingresa tu  Document" autofocus>
                    </div>
                </div>

                <input type="submit" class="btn btn-raised btn-success btn-block" name="save_Patient" value="save appointment">
            </div>
        </form>
    </div>
</div>


<?php include_once('includes\footer.php') ?>