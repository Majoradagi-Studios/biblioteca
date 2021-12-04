<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de libro</title>
</head>
<body>
    <form action="<?= base_url('/admin/ejemploejemplar/actualizar')?>" method="post" enctype="multipart/form-data">

    <input type="hidden" name="idEjemplar" value="<?=$ejemplar['idEjemplar']?>">
    <input type="hidden" name="ejemplar" value="<?=$ejemplar['ejemplar']?>">
    
    
    <select name="estado">
        <option selected>Seleccione una opción</option>
        <option value="Disponible">Disponible</option>
        <option value="Ocupado">Ocupado</option>
    </select><br>

    <input type="hidden" name="idLibro" value="<?=$ejemplar['idLibro']?>">


    <input type="submit" value="Enviar">
    </form>
</body>
</html>