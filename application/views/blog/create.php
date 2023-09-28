<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Crear Nueva Entrada</title>
</head>
<body class="container container-sm text-center">
    <h1>Crear Nueva Entrada</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('blog/create', 'class="form bg-light"'); ?>
        <label  class="col-form-label" for="title">Título:</label>
        <input class="form-control" type="text" name="title" required><br>

        <label class="col-form-label" for="author">Autor:</label>
        <input class="form-control" type="text" name="author" required><br>

        <label class="col-form-label" for="content">Contenido:</label><br>
        <textarea class="form-control" name="content" rows="4" cols="50" required></textarea><br>

        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
</body>
</html>
