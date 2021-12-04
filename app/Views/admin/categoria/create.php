<?=$header;?>
<?=$sidebar;?>
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title"> <i class="fa fa-archive"></i> Categorías</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/admin/categoria/listar');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

<?php if(session('mensaje')){?>
  <div class="alert alert-danger" role="alert">
    <?php
    echo session('mensaje');
    ?>
</div>
<?php
}
?>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Agregar una categoría</h5><br>
                    
                  <form method="post" action="<?=base_url('admin/categoria/guardar')?>" enctype="multipart/form-data">

                      <div class="form-group">
                        <label for="codigo">Codigo Dewey</label>
                        <input id="codigoD" value="<?=old('codigoD')?>" class="form-control" type="text" name="codigoD">
                      </div>
                      <div class="form-group">
                        <label for="nombre">Nombre de la Categoria</label>
                        <input id="nombreC" value="<?=old('nombreC')?>" class="form-control" type="text" name="nombreC">
                      </div>
                      
                      <div class="form-group">
                        <label for="desc">Descripcion de la Categoria</label>
                        <input id="descripcion" value="<?=old('descripcion')?>" class="form-control" type="text" name="descripcion">
                      </div>
                      <button class="btn btn-success rounded-pill" type="submit">Guardar <i class="fa fa-save"></i></button>
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
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Majoradagi Studios. Designed and Developed by
          <a href="">Majoradagi Studios</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../backend/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../backend/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../backend/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../backend/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../backend/dist/js/custom.min.js"></script>
  </body>
</html>