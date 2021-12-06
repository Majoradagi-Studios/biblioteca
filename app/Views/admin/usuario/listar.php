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
                    <li class="breadcrumb-item"><a href="<?=base_url('/admin/usuario/create');?>" class="btn btn-success rounded-pill">Agregar <i class="fa fa-plus"> </i></a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Usuarios</h5>
                  <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Matrícula</th>
                                <th scope="col" class="text-center">Nombre</th>
                                <th scope="col" class="text-center">Apellido Paterno</th>
                                <th scope="col" class="text-center">Apellido Materno</th>
                                <th scope="col" class="text-center">Grupo</th>
                                <th scope="col" class="text-center">Rol</th>
                                <th class="center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($usuarios as $usuario):?>
                            <tr>
                                <th scope="row" class="text-center"><?=$usuario['idUsuario'];?></th>
                                    <td ><?=$usuario['matricula'];?></td>
                                    <td><?=$usuario['nombre'];?></td>
                                    <td><?=$usuario['apellidoP'];?></td>
                                    <td><?=$usuario['apellidoM'];?></td>
                                    <td><?=$usuario['grupo'];?></td>
                                    <?php if($usuario['rol'] == 0):?>
                                    <td>Alumno</td>
                                    <?php endif; ?>
                                    <?php if($usuario['rol'] == 1): ?>
                                    <td>Administrador</td>
                                    <?php endif; ?>
                                    <?php if($usuario['rol'] == 2): ?>
                                    <td>Super</td>
                                    <?php endif; ?>
                                    <td class="center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="<?=base_url('admin/usuario/borrar/'.$usuario['idUsuario']);?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                            </tr>
                          <?php endforeach;?>
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