<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de libro</title>
</head>
<body>
    <form action="<?= base_url('/admin/ejemploejemplar/guardar')?>" method="post">

    <input type="text" placeholder="ejemplar" name="ejemplar"><br>

    <select name="idLibro">
        <?php foreach($libros as $libro): ?>
        <option value="<?= $libro['idLibro'];?>"><?= $libro['titulo'];?></option>
        <?php endforeach; ?>
    </select><br>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>