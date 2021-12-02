<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Registro de alumnado</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2 class="mb-3">Alumno</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?php echo base_url(); ?>/SignupController/store" method="post">

                    <div class="form-group mb-3">
                        <input type="text" name="matricula" placeholder="Matricula" value="<?= set_value('matricula') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="nombre" placeholder="Nombre" value="<?= set_value('nombre') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="apellidoP" placeholder="Apellido Paterno" value="<?= set_value('apellidoP') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="apellidoM" placeholder="Apellido Materno" value="<?= set_value('apellidoM') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="grupo" placeholder="Grupo" value="<?= set_value('grupo') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Contraseña" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirmar contraseña" class="form-control" >
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Registrar alumno</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>