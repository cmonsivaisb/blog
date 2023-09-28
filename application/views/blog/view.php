<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Detalle de Entrada</title>
</head>
<body class="container container-md text-center">
    <div class="bg-light">
        <h1><?php echo $entry['title']; ?></h1>
        <p>Autor: <?php echo $entry['author']; ?></p>
        <p>Fecha de Publicación: <?php echo $entry['date_published']; ?></p>
        <p><?php echo $entry['content']; ?></p>
        <a class="btn btn-primary" href="<?php echo site_url('blog'); ?>">Volver al Listado</a>
        <br>
    </div>
</body>
</html>
