<?=$header;?>
<?=$sidebar;?>

          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->

          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h2 class="page-title"> <i class="fa fa-address-card"></i> Ejemplares</h2>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/admin/ejemplar/listar');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Agregar ejemplar</h5> <br>
                  
                  <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Número de ejemplares</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Estado</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccione una opción</option>
                                <option value="1">Disponible</option>
                                <option value="2">Ocupado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Libro</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccione una opción</option>
                                <option value="1">Libro 1</option>
                                <option value="2">Libro 2</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success rounded-pill">Guardar <i class="fa fa-save"> </i></button>
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