<?php $db = db_connect(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar libros</title>
</head>
<body>
    <h1>Listado de libros</h1>
    <a href="<?=base_url('admin/libro/create')?>">Agregar libro</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">titulo</th>
                <th scope="col" class="text-center">lugarEd</th>
                <th scope="col" class="text-center">anioPub</th>
                <th scope="col" class="text-center">numPaginas</th>
                <th scope="col" class="text-center">numEdicion</th>
                <th scope="col" class="text-center">idAutor</th>
                <th scope="col" class="text-center">idEditorial</th>
                <th scope="col" class="text-center">idCategoria</th>
                <th scope="col" class="text-center">imagen</th>
                <th class="center text-danger">Opciones</th>
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

                    <!--Arreglar problema de nombres, que los muestre en vez de la id-->
                    <td><?=$libro['idAutor'];?></td>
                    <td><?=$libro['idEditorial'];?></td>
                    <td><?=$libro['idCategoria'];?></td>

                    <td>
                        
                        <img src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" width="100" alt="No existe imagen">
                        <?=$libro['imagen'];?>
                
                    </td>
    
                    <td class="center">
                        <div class="btn-group" role="group" aria-label="Second group">
                            <a href="<?=base_url('/admin/libro/editar/'.$libro['idLibro']);?>" class="btn btn-sm btn-primary">editar</i></a>
                            <a href="<?=base_url('admin/libro/borrar/'.$libro['idLibro']);?>" class="btn btn-sm btn-danger">borrar</i></a>
                        </div>
                    </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    
</body>
</html>