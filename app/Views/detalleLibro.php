<?=$header;?>
        <!-- Contenido -->
        <div id="layoutSidenav_content">
        <main>
                <div class="container-fluid px-4 mt-5 mb-4">
                                        
                    <!--  Detalle Libro    -->
                    <div class="row justify-content-center">
                        <h2>Detalle del libro</h2>
                        <div class="card shadow-lg border-0 rounded-lg mt-5" style="width:80%">
                        <div class="row g-0 mt-3">
                                <div class="col-md-5 ">
                                    <div class="card-header">
                                        Título: <strong>
                                            <?= $libro['titulo'];?>
                                        </strong>
                                    </div>
                                    
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"> Lugar de edición: <mark> <?= $libro['lugarEd'];?> </mark></li>
                                        <li class="list-group-item"> Año: <mark> <?= $libro['anioPub'];?> </mark></li>
                                        <li class="list-group-item"> Num. páginas: <mark> <?= $libro['numPaginas'];?></mark></li>
                                        <li class="list-group-item"> Num. edición: <mark> <?= $libro['numEdicion'];?></mark></li>
                                        <li class="list-group-item"> Autor: <mark><?= $libro['idAutor'];?> </mark></li>
                                        <li class="list-group-item">Editorial: <mark><?= $libro['idEditorial'];?></mark></li>
                                        <li class="list-group-item">Categoría: <mark><?= $libro['idCategoria'];?></mark></li>
                                    </ul>

                                    <a href="<?php echo base_url(); ?>/catalogo" class="btn btn-primary rounded mt-4 ms-2"> Regresar <i class="fa fa-undo"> </i></a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6 mb-4 mt-3">
                                    <img src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" class="card-img-top img-thumbnail border border-5 rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                        
            </main>
            <!--Fin del contenido-->
<?=$footer;?>