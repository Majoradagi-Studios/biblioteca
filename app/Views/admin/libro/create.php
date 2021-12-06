<?=$header;?>
<?=$sidebar;?>

          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->

          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h2 class="page-title"> <i class="fa fa-book"></i> Libros</h2>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/admin/libro/listar');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> <i class="fa fa-book"></i> Agregar libro</h5> <br>
                  
                  <?php if(isset($validation)):?>
                      <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                      </div>
                    <?php endif;?>
                  
                  <form action="<?= base_url('/admin/libro/guardar')?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Título</label>
                            <input type="text" class="form-control" name="titulo" value="<?= set_value('titulo') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Lugar de edición</label>
                            <input type="text" class="form-control" name="lugarEd" value="<?= set_value('lugarEd') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Año</label>
                            <input type="text" class="form-control" name="anioPub" value="<?= set_value('anioPub') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Número de páginas</label>
                            <input type="text" class="form-control" name="numPaginas" value="<?= set_value('numPaginas') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Edición</label>
                            <input type="text" class="form-control" name="numEdicion" value="<?= set_value('numEdicion') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Autor</label>
                            <select class="form-select" aria-label="Default select example" name="idAutor">
                                <option selected>Seleccione una opción</option>
                                <?php foreach($autores as $autor): ?>
                                  <option value="<?= $autor['idAutor'];?>"><?= $autor['apellidoA']." ".$autor['nombreA'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Editorial</label>
                            <select class="form-select" aria-label="Default select example"  name="idEditorial">
                                <option selected>Seleccione una opción</option>
                                <?php foreach($editoriales as $editorial): ?>
                                  <option value="<?= $editorial['idEditorial'];?>"><?= $editorial['nombreEd'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Categoría</label>
                            <select class="form-select" aria-label="Default select example" name="idCategoria">
                                <option selected>Seleccione una opción</option>
                                <?php foreach($categorias as $categoria): ?>
                                  <option value="<?= $categoria['idCategoria'];?>"><?= $categoria['codigoD']." ".$categoria['nombreC'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Imagen</label> <br>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen">
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