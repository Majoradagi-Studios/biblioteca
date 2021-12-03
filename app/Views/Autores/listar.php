<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Autores </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    Lista de autores
    <div class="container">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($autores as $autor):?>
                <tr>
                    <td> <?=$autor['idAutor'];?> </td>
                    <td><?=$autor['nombreA'];?></td>
                    <td><?=$autor['apellidoA'];?></td>
                    <th>Editar/Borrar</th>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    
</body>
</html>