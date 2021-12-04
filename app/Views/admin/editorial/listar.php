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
                    <li class="breadcrumb-item"><a href="<?=base_url('admin/editorial/create');?>" class="btn btn-success rounded-pill">Agregar <i class="fa fa-plus"> </i></a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Editorial</h5>
                                
                  <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Nombre</th>
                                <th class="center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                        </thead>

                        <tbody>
                          <?php foreach($editoriales as $editorial): ?>
                            <tr>
                              <td class="text-center"> <?=$editorial['idEditorial'];?> </td>
                              <td class="text-center"> <?=$editorial['nombreEd'];?> </td>
                                    <td class="center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="<?=base_url('admin/editorial/edit/'.$editorial['idEditorial']);?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="<?=base_url('admin/editorial/borrar/'.$editorial['idEditorial']);?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                  </table>
                  
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