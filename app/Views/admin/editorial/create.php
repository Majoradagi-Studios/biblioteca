<?=$header;?>
<?=$sidebar;?>

          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->

          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h2 class="page-title"> <i class="fa fa-address-card"></i> Editoriales</h2>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/admin/editorial/listar');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editorial</h5>
            <p class="card-text">

            <!--IMPRIMIR MENSAJE DE VALIDACIÓN-->
              <?php if (session('msg')):?>                       
                <div class="alert alert-danger" role="alert">

                  <?= session('msg');                    
                  ?>

                </div>
                          
              <?php endif;?>

              <form method="post" action="<?=base_url('admin/editorial/guardar')?>" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input id="nombre" class="form-control" value="<?=old('nombreEd');?>" type="text" name="nombre">
                </div>

                <button class="btn btn-success rounded-pill" type="submit">Guardar  <i class="fa fa-save"></i></button>
              </form>

            </p>

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