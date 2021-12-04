<?php $db = db_connect(); ?>

<body>
    <h1>Listado de ejemplares</h1>
    <a href="<?=base_url('/admin/ejemploejemplar/create')?>">Agregar ejemplar</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">ejemplar</th>
                <th scope="col" class="text-center">estado</th>
                <th scope="col" class="text-center">idLibro</th>
                <th class="center text-danger">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($ejemplares as $ejemplar):?>
            <tr>
                <th scope="row" class="text-center"><?=$ejemplar['idEjemplar'];?></th>
                    <td><?=$ejemplar['ejemplar'];?></td>
                    <td><?=$ejemplar['estado'];?></td>
                    <td><?=$ejemplar['idLibro'];?></td>
                    <td class="center">
                        <div class="btn-group" role="group" aria-label="Second group">
                            <a href="<?=base_url('/admin/ejemploejemplar/editar/'.$ejemplar['idEjemplar']);?>" class="btn btn-sm btn-primary">editar</i></a>
                            <a href="<?=base_url('admin/ejemploejemplar/borrar/'.$ejemplar['idEjemplar']);?>" class="btn btn-sm btn-danger">borrar</i></a>
                        </div>
                    </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    
<?=$footer?>