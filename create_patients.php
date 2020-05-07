<?php include_once('database\Connection.php');  ?>

<?php include_once('includes/header.php');  ?>
<br><br><br>

<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong class="h2">Tus datos se guardaron con satisfacción!</strong>
    <div class="text-info h5">los campos de abajo son necesarios para agendar la cita!</div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong class="h5">Escoge la fecha e Ingresa tu Número de Documento!</strong>
</div>
<div class="text-center text-primary text-dark mt-5 h3 border border-success bg-info ">Citas</div>
<div class="container" id="contai">

    <div class="container">
        <div class="row">

            <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <?php if (isset($_SESSION['message_cita'])) { ?>

                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message_cita'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php session_unset();
                } ?>

                <div class="card card-body mt-3 mb-4">
                    <form action="save_appointment.php" method="post" onsubmit=" return Confirm_Ship();">
                        <p class="font-weight-bold h2 text-dark border border-success bg-info">Agenda tu Cita</p>
                        <div class="col">
                            <div class="form-group">
                                <input type="date" name="date" class="form-control" id="date" placeholder="Date" autofocus>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="document_patient" class="form-control" id="documentpatient" placeholder="Ingresa tu  Document" autofocus>
                            </div>
                        </div>
                        <a href="add_patients.php"><input type="submit" class="btn btn-raised btn-success btn-block" name="save_Patient" value="save appointment" id="appointment" onclick="return confirm_appointment();"></a>
                    </form>
                </div>
            </div>

            <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-5">
                <div class="container mt-3">
                    <form action="">
                        <div class="row justify-content-start">
                            <div class="col p-3 mb-1 text-info bg-dark">Fecha Cita</div>
                            <div class="col p-3 mb-1 text-info bg-dark">Documento del Paciente</div>
                            <div class="col p-3 mb-1 text-info bg-dark">Acciones</div>

                        </div>

                        <?php
                        try {
                            include_once('database\Connection.php');
                            $sql = "SELECT * FROM medical_appointments";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $colfile = "
                                    <div class=' justify-content-start'> 
                                    <div class='row'>
                                    <div class='col  bg-transparent text-dark'>{$row['date']}</div>                               
                                    <div class='col  bg-transparent text-dark'>{$row['document_patient']}</div>
                                    <div class='text-center'>
                                    <div class='btn-group btn-group col'>
                                    <div class='col'><a href='Edit_appointment.php?id={$row['Id_cita']}' class='badge badge-pill badge-success  text-dark'><i class='fas fa-pen-square'>Editar</i></a></div>
                                    <div class='col'><a href='Delete_appointment.php?id={$row['Id_cita']}' class='badge badge-pill badge-danger text-dark' onclick='return AlertDelet();'>Eliminar<i class='far fa-trash-alt'></i></a></div>
                                    </div>    
                                    </div>
                                    </div>
                                    </div>";
                                    echo $colfile;
                                }
                            }
                        } catch (Exception $ex) {
                            echo "Error";
                        }
                        ?>
                    </form>
                </div>

            </div>
        </div>

    </div>



</div>


<?php include_once('includes/footer.php'); ?>