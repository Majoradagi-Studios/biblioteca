<?=$header;?>
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h2 class="page-title"> <i class="fa fa-users"></i> Usuarios </h2>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/admin/usuario/listar');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Editar usuario</h5> <br>
                  
                  <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Matricula</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Apellido Paterno</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Apellido Materno</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Rol</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccione una opción</option>
                                <option value="1">Usuario normal</option>
                                <option value="2">Administrador</option>
                                <option value="2">Super Administrador</option>
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