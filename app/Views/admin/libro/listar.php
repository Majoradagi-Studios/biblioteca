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
                    <li class="breadcrumb-item"><a href="<?=base_url('admin/libro/create')?>" class="btn btn-success rounded-pill">Agregar <i class="fa fa-plus"> </i></a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Título</th>
                                <th scope="col" class="text-center">Lugar de edición</th>
                                <th scope="col" class="text-center">Año</th>
                                <th scope="col" class="text-center">No. páginas</th>
                                <th scope="col" class="text-center">Edición</th>
                                <th scope="col" class="text-center">Autor</th>
                                <th scope="col" class="text-center">Editorial</th>
                                <th scope="col" class="text-center">Categoria</th>
                                <th class="center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($libros as $libro):?>
                          <tr>
                            <th scope="row" class="text-center"><?=$libro['idLibro'];?></th>
                                <td><?=$libro['titulo'];?></td>
                                <td><?=$libro['lugarEd'];?></td>
                                <td><?=$libro['anioPub'];?></td>
                                <td><?=$libro['numPaginas'];?></td>
                                <td><?=$libro['numEdicion'];?></td>

                                <!--¿Solución definitiva?-->
                                <?php $autor = $autores->where('idAutor',$libro['idAutor'])->first();?>
                                <?php $editorial = $editoriales->where('idEditorial',$libro['idEditorial'])->first();?>
                                <?php $categoria = $categorias->where('idCategoria',$libro['idCategoria'])->first();?>

                                <td><?=$autor['apellidoA'].' '.$autor['nombreA'];?></td>
                                <td><?=$editorial['nombreEd'];?></td>
                                <td><?=$categoria['nombreC'];?></td>
                                <!-- ------------------------ -->

                                <td>
                                    <img src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" width="100" alt="No existe imagen">
                                </td>

                                <td class="center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="<?=base_url('/admin/libro/editar/'.$libro['idLibro']);?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="<?=base_url('admin/libro/borrar/'.$libro['idLibro']);?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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