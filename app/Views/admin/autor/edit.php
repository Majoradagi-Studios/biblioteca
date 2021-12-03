
<?=$header;?>

<!-- <?php
print_r($autor);
?> -->

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
              <h4 class="page-title"> <i class="fa fa-users"></i> <?=$autor['nombreA'].' '.$autor['apellidoA'];?> </h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('/admin/autor/listar');?>" class="btn btn-warning rounded-pill">Regresar <i class="fa fa-undo"> </i></a></li>
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

          <?php if (session('mensaje')){?>
          <div class="alert alert-danger" role="alert">
            <?php
            echo session('mensaje');
            ?>
          </div>
          <?php
            }
          ;?>
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> <i class="fa fa-user"></i> Editar autor </h5> <br>
                  
                  <form method="post" action="<?=site_url('/admin/autor/actualizar');?>" enctype"multipart/form-data">
                        <input type="hidden" name="id" value="<?=$autor['idAutor'];?>">
                        <div class="form-group">
                            <label for="apellidoA">Apellido</label>
                            <input value="<?=old('apellidoA');?>" type="text" class="form-control" id="apellidoA" placeholder="Apellido(s) del autor" name="apellidoA">
                        </div>
                        <div class="form-group">
                            <label for="nombreA">Nombre</label>
                            <input value="<?=old('nombreA');?>" type="text" class="form-control" id="nombreA" placeholder="Nombre(s) del autor" name="nombreA">
                        </div>

                        <button type="submit" class="btn btn-success rounded-pill">Actualizar <i class="fa fa-save"> </i></button>
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
