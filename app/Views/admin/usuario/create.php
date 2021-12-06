<?=$header;?>
<?=$sidebar;?>

          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->

          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h2 class="page-title"> <i class="fa fa-users"></i> Usuarios</h2>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/admin/usuario/listar');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> <i class="fa fa-user"></i> Agregar usuario</h5> <br>

                    <?php if(isset($validation)):?>
                      <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                      </div>
                    <?php endif;?>
                  
                  <form action="<?= base_url('/admin/usuario/guardar')?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Matrícula</label>
                            <input type="text" class="form-control" name="matricula" value="<?= set_value('matricula') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="<?= set_value('nombre') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellidoP" value="<?= set_value('apellidoP') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellidoM" value="<?= set_value('apellidoM') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Grupo</label>
                            <input type="text" class="form-control" name="grupo" value="<?= set_value('grupo') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Contraseña</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Confirmar contraseña</label>
                            <input type="password" class="form-control" name="confirmpassword">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Rol</label>
                            <select class="form-select" aria-label="Default select example" name="idCategoria">
                                <option selected>Seleccione una opción</option>
                                  <option value="0">Alumno</option>
                                  <option value="1">Administrador</option>
                            </select>
                        </div>
                        <button class="btn btn-success rounded-pill" type="submit">Guardar  <i class="fa fa-save"></i></button>
                    </form>

                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        
<?=$footer;?>