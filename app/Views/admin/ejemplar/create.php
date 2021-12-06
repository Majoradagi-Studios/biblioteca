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
                  
                  <?php if(isset($validation)):?>
                      <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                      </div>
                    <?php endif;?>
                    <?php if(isset($verificar)):?>
                      <div class="alert alert-danger">
                        <?= $datos['verificar']; ?>
                      </div>
                    <?php endif;?>
                  
                  <form action="<?= base_url('/admin/ejemplar/guardar')?>" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Número del ejemplar</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="ejemplar">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Libro</label>
                            <select class="form-select" aria-label="Default select example" name="idLibro">
                                <option selected>Seleccione una opción</option>
                                <?php foreach($libros as $libro): ?>
                                <option value="<?= $libro['idLibro'];?>"><?= $libro['titulo'];?></option>
                                <?php endforeach; ?>
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