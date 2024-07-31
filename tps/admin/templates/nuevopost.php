<?php require __DIR__ . '/../../templates/header.php'; ?>
<h2>Crear nueva publicación</h2>

<form action="" method="post">
    <label for="title">Título (requerido)</label>
    <input type="text" name="title" id="title" value="">

    <label for="excerpt">Extracto</label>
    <input type="text" name="excerpt" id="excerpt" value="">

    <label for="content">Contenido (Requerido)</label>
    <textarea name="content" id="content" cols="30" rows="30"></textarea>

    <p>
        <input type="submit" name="submit-new-post" value="Nueva publicación">
    </p>
</form>
<?php require __DIR__ . '/../../templates/footer.php'; ?>
