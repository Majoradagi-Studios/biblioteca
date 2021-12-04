<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de libro</title>
</head>
<body>
    <form action="<?= base_url('/admin/libro/guardar')?>" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="titulo" name="titulo"><br>
    <input type="text" placeholder="lugarEd" name="lugarEd"><br>
    <input type="text" placeholder="anioPub" name="anioPub"><br>
    <input type="text" placeholder="numPaginas" name="numPaginas"><br>
    <input type="text" placeholder="numEdicion" name="numEdicion"><br>

    <select name="idAutor">
        <?php foreach($autores as $autor): ?>
        <option value="<?= $autor['idAutor'];?>"><?= $autor['apellidoA']." ".$autor['nombreA'];?></option>
        <?php endforeach; ?>
    </select><br>

    <select name="idEditorial">
        <?php foreach($editoriales as $editorial): ?>
        <option value="<?= $editorial['idEditorial'];?>"><?= $editorial['nombreEd'];?></option>
        <?php endforeach; ?>
    </select><br>

    <select name="idCategoria">
        <?php foreach($categorias as $categoria): ?>
        <option value="<?= $categoria['idCategoria'];?>"><?= $categoria['codigoD']." ".$categoria['nombreC'];?></option>
        <?php endforeach; ?>
    </select><br>

    <input id="imagen" type="file" name="imagen"><br>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>