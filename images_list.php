<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./css/styles.css" rel="stylesheet">
    <title>Imatges</title>
</head>
<body>
    <div id="content" class="container">
        <h1>Images</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Vista Previa</th>
                    <th scope="col">Accions</th>
                </tr>
            </thead>
            <tbody>
            <?php $files = glob("../img/*.*"); ?>
            <?php foreach ($files as $index => $img): ?>
                <tr>
                    <th scope="row"><?= $index+1 ?></th>
                    <td><img src="<?= $img ?>" class="img300" /></td>
                    <td>
                        <form action="functions/images_delete_action.php" method="POST">
                        <input type="hidden" nom="img" value="<?= $img ?>"/>
                            <button class="btn btn-danger btn-delete">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <div>
            <a class="btn btn-primary" href="./images_create.php">Crear imatge nova</a>
        </div>
    </div>
    <footer id="footer" class="fixed-bottom">
        <?php include(__DIR__ . "functions/partials_footer.php"); ?>
    </footer>
    <script src="../assets/scripts.js"></script>
</body>
</html>