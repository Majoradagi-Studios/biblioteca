<?=$header;?>
       <!-- Contenido -->
       <div id="layoutSidenav_content">
            <main>
                   
                <div class="container-fluid px-5 mt-4 mb-4">
                    <!-- Aqui inicia el contenido -->                    
                    <h1>Busqueda por categoria: <?=$categoria['nombreC'];?></h1>
                    <small class="">Todos los libros existentes</small>

                    <!--libro-->
                    <div class="row mt-4">
                        <?php foreach($libros as $libro): ?>
                            <div class="col">
                                <div class="card" style="width: 17rem;">
                                    <img src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" class="card-img-top" alt="No existe imagen">
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$libro['titulo'];?></h5>
                                        
                                        <?php $autor = $autores->where('idAutor',$libro['idAutor'])->first();?>
                                        <p class="card-text">Por: <?=$autor['apellidoA'].' '.$autor['nombreA'];?></p>
                                        <p class="card-text"><?=$libro['lugarEd'];?></p>

                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a href="<?=base_url('/catalogo/detalle/'.$libro['idLibro']);?>" class="btn btn-warning"><strong>Detalles</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </main>
            <!--Fin del contenido-->
<?=$footer;?>