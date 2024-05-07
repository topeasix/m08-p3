<!doctype html>
<html lang="en">
<head>
    <title>Pujar una imatge</title>
    <link href="./css/styles.css" rel="stylesheet">
</head>
<body>
    <div id="content" class="container">
        <h1>Pujar una imatge</h1>
        <?php if (!empty($_GET['error'])): ?>
        <div class="alert alert-primary" role="alert">
            <ul>
            <?php foreach ($_GET['error'] as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
            </ul>
        </div>
        <?php endif ?>
        <form action="uploadimg.php" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Imatge a pujar (ha de ser de format JPG o PNG!!)</label>
                <input type="file" name="file" id="file">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <footer id="footer" class="fixed-bottom">
        <?php include(__DIR__ . "functions/partials_footer.php"); ?>
    </footer>
</body>
</html>