<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Listado de Entradas</title>
</head>
<body class="container container-md text-center">
    <h1>Listado de Entradas</h1>
     <!-- Formulario de búsqueda -->
     <form method="GET" class="text-center" action="<?php echo site_url('blog'); ?>">
        <input type="text" name="search" placeholder="Buscar por título, contenido o autor">
        <button type="submit">Buscar</button>
    </form>
    <div class="text-left">
        <a class="btn btn-primary" href="<?php echo site_url('blog/create'); ?>">Agregar Nueva Entrada</a>
    </div>
    <br>
    <ul class="list-group">
        <?php foreach ($entries as $entry): ?>
            <li class="text-left list-group-item ">
                <a href="<?php echo site_url('blog/view/' . $entry['id']); ?>">
                    <h2><?php echo $entry['title']; ?></h2>
                </a>
                <p>Autor: <?php echo $entry['author']; ?></p>
                <p>Fecha de Publicación: <?php echo $entry['date_published']; ?></p>
                <p><?php echo substr($entry['content'], 0, 70) . '...'; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
