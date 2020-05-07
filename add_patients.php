<?php include_once('database\Connection.php');  ?>

<?php include_once('includes\header.php');  ?>
<br>
<div class="text-center text-primary text-dark mt-5 h3 border border-success bg-info ">Pacientes</div>

<div class="alert alert-info  alert-dismissible fade show" role="alert">
    <strong>Bienvenido! </strong> Para agendar Por favor completa los campos acontinuacion.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="container mt-1 text-white" id="contai">

    <div class="container">

        <div class="row">

            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-1 mb-2">

                <?php if (isset($_SESSION['message'])) { ?>

                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php session_unset();
                } ?>

                <div class="card card-body mt-2 mb-2 bg-gradient-light text-dark">

                    <form action="save_patients.php" method="post" onsubmit="return validate();">

                        <p class="font-weight-bold h2 text-dark border border-success bg-info">Completa tus datos</p>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="Name" class="form-control" id="Name" placeholder="Name" autofocus>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="Lastname" class="form-control" id="Lastname" placeholder="Lastname" autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="Document" class="form-control" id="Document" placeholder="Document" autofocus>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <input type="date" name="Birthdate" class="form-control" id="Birthdate" placeholder="Birthdate" autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="City_of_Residence" class="form-control" id="City" placeholder="City_of_Residence" autofocus>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="Neighborhood" class="form-control" id="Neighborhood" placeholder="Neighborhood" autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="Cell_Phone_Number" class="form-control" id="Cellphonenumber" placeholder="Cell phone number" autofocus>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-raised btn-success btn-block" name="save_Patient" value="save_Patient">

                    </form>

                </div>

            </div>

            <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-4">

                <div class="header-content-right">

                    <img src="img/img7.jpg" alt="Clinica" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>